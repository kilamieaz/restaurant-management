<?php

namespace App\Http\Controllers\Frontend;

use App\Menu;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $menusLatest = Menu::latest()->offset(0)->limit(10)->get();;
        $menuRandom = $menus->random();
        $categories = Category::with('menus')->get();
        return view('frontend.home.index', compact('menus', 'menuRandom', 'menusLatest', 'categories'));
    }
}
