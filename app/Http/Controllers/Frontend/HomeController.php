<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Menu;

class HomeController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $menusLatest = Menu::latest()->offset(0)->limit(10)->get();
        $menuRandom = $menus->random();
        $categories = Category::with('menus')->get();

        return view('frontend.home.index', compact('menus', 'menuRandom', 'menusLatest', 'categories'));
    }
}
