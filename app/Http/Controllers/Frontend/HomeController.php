<?php

namespace App\Http\Controllers\Frontend;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('frontend.home.index', compact('menus'));
    }
}
