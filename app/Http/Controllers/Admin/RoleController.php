<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Role;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin.role.index');
    }

    public function store(RoleRequest $request)
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

    public function update(RoleRequest $request, Role $role)
    {
        $role->update($request->all());
    }

    public function destroy(Role $role)
    {
        $role->delete();
    }
}
