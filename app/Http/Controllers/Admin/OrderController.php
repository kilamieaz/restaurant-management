<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use App\Order;
use App\Table;
use App\DetailOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.order.index');
    }
}
