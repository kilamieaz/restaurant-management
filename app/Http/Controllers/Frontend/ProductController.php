<?php

namespace App\Http\Controllers\Frontend;

use App\Menu;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $menusLatest = Menu::latest()->offset(0)->limit(10)->get();
        $menuRandom = Menu::all()->random();
        $categories = Category::with('menus')->get();
        return view('frontend.product.index', compact('menusLatest', 'menuRandom', 'categories'));
    }

    public function show(Menu $product)
    {
        $menus = Menu::latest()->get();
        return view('frontend.product.show', compact('product', 'menus'));
    }
}
