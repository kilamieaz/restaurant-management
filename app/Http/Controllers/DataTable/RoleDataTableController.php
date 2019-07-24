<?php

namespace App\Http\Controllers\DataTable;

use App\Http\Controllers\Controller;
use App\Role;

class RoleDataTableController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $data = [];
        foreach ($roles as $index => $list) {
            $row = [];
            $row[] = ++$index;
            $row[] = $list->name;
            $row[] = $list->description;
            $row[] = '<div class="text-center"><div class="btn-group">
               <button type="button" onclick="editForm('.$list->id.')" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil-box-outline"></i></button>
               <button type="button" onclick="deleteData('.$list->id.')" class="btn btn-danger btn-sm"><i class="mdi mdi-trash-can-outline"></i></button></div></div>';
            $data[] = $row;
        }

        $output = ['data' => $data];

        return response()->json($output);
    }
}
