<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.menu.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $uploadedFile = $request->file('photo');
            $path = $uploadedFile->store('public/photo');
            $data['photo'] = $path;
        }
        Menu::create($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        echo json_encode($menu);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($menu->photo);
            $data['photo'] = $request->file('photo')->store('public/photo');;
            $menu->update($data);
            return json_encode(['menu' => $menu]);
        }
        $menu->update($request->except('photo'));
        return json_encode(['menu' => $menu]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
    }
}
