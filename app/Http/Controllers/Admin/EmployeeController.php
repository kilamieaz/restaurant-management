<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index()
    {
        $roles = Role::employees();
        return view('admin.employee.index', compact('roles'));
    }

    public function store(EmployeeRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        // $data['role_id'] = UserRole::Chef;
        if ($request->hasFile('photo')) {
            $uploadedFile = $request->file('photo');
            $path = $uploadedFile->store('public/photo');
            $data['photo'] = $path;
        }
        User::create($data);
    }

    public function edit(User $employee)
    {
        echo json_encode($employee);
    }

    public function update(EmployeeRequest $request, User $employee)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($employee->photo);
            $data['photo'] = $request->file('photo')->store('public/photo');;
            $employee->update($data);
            return json_encode(['employee' => $employee]);
        }
        $employee->update($request->except('photo'));
        return json_encode(['employee' => $employee]);
    }

    public function destroy(User $employee)
    {
        $employee->delete();
    }
}
