<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin.role.index');
    }

    public function store(Request $request)
    {
        $role = Role::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    }

    public function edit(Role $role)
    {
        echo json_encode($role);
    }

    public function update(Request $request, Role $role)
    {
        $role->update($request->all());
    }

    public function destroy(Role $role)
    {
        $role->delete();
    }
}
