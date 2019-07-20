<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use App\Order;
use App\Table;
use App\DetailOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\Controller;

class DetailOrderController extends Controller
{
    public function index()
    {
        $auth = Auth::user();
        $userRole = $auth->role->id;
        return view('admin.detailOrder.index', compact('userRole'));
    }
}
