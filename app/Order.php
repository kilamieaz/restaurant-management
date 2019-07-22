<?php

namespace App;

use App\Charts\Dashboard;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;

class Order extends Model
{
    use Cachable;
    protected $guarded = [];
    // protected $with = 'detailOrders';

    public function detailOrders()
    {
        // return $this->belongsTo(Role::class, 'role_id');
        return $this->hasMany(DetailOrder::class, 'order_id');
    }

    public static function chartOrder()
    {
        $order = Order::all()->count();
        $orderChart = new Dashboard;
        $orderChart
            ->title('All Order')
            ->minimalist(true)
            ->labels(['order'])
            ->dataset('All Order' , 'bar', [$order])
            ->backgroundColor("#4C84FF");
        return $orderChart;
    }

    public static function chartMonthOrder()
    {
        $months = Order::select(DB::raw("COUNT(*) as count, MONTHNAME(created_at) as month, YEAR(created_at) year"))
        ->orderBy("created_at")
        // ->whereYear('created_at', date("Y"))     // if you want data only in this year
        ->groupBy(DB::raw("month(created_at), year(created_at)"))
        ->get();
        $arrayMonthYear = [];
        $arrayCount = [];
        $arrayColour = [];
    
        if (isset($months)) {
            foreach ($months as $month) {
                $arrayMonthYear [] = $month->month .' '. $month->year; 
                $arrayCount [] = $month->count;
                // $arrayColour [] = '#'.str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT); 
            }
            
            $orderMonthChart = new Dashboard;
            $orderMonthChart->title('Order Per Month')
            // ->minimalist(true)
            ->labels($arrayMonthYear)
            ->dataset('Order Per Month', 'line', $arrayCount)
            ->backgroundColor("#4C84FF");
            return $orderMonthChart;
        }
        return ;
    }

    public static function getPeriod()
    {
        $oldestOrder = Order::oldest()->first();
        $latestOrder = Order::latest()->first();
        $period = [];
        if ($oldestOrder && $latestOrder) {
            $period = collect($oldestOrder->created_at->isoFormat('MMM Do YY'))->merge($latestOrder->created_at->isoFormat('MMM Do YY'));
            return $period;
        }
        return ;
    }

    public static function createIfDontExist($member_id, $order_code)
    {
        $order = Order::firstOrCreate([
            'member_id' => $member_id,
            'cashier_id' => Auth::user()->id,
            'order_code' => $order_code,
        ]);
        return $order;
    }
}
