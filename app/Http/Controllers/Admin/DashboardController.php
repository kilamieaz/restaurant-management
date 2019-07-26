<?php

namespace App\Http\Controllers\Admin;

use App\DetailOrder;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Order;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $order = Order::all();
        $periodOrder = Order::getPeriod();
        $chartOrder = Order::chartOrder();
        $chartMonthOrder = Order::chartMonthOrder();
        $totalMenu = Menu::all()->count();
        $totalEmployee = User::employees()->count();
        $totalMember = User::member()->count();
        $totalIncome = 'Rp '.format_money(DetailOrder::total());

        if ($request->user()->authorizeRole('admin')) {
            return view(
                'admin.dashboard.index',
                compact(
                    'chartOrder',
                    'chartMonthOrder',
                    'periodOrder',
                    'totalMenu',
                    'totalEmployee',
                    'totalMember',
                    'totalIncome'
            )
            );
        }

        return redirect('404');;
    }
}
