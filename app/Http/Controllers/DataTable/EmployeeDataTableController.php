<?php

namespace App\Http\Controllers\DataTable;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Storage;

class EmployeeDataTableController extends Controller
{
    public function index()
    {
        $users = User::employees();
        $data = [];
        foreach ($users as $index => $list) {
            $row = [];
            $row[] = ++$index;
            $row[] = $list->name;
            $row[] = $list->role->name;
            $row[] = $list->email;
            $row[] = $list->handphone;
            $row[] = isset($list->photo) ?
            '<div class="text-center"><img class="lazyload" style="height:50px; width:50px" src="'.Storage::url($list->photo).'"></div>' :
            '<div class="text-center"><img class="lazyload" style="height:50px; width:50px" src="'.'https://via.placeholder.com/50/50'.'"></div>';
            $row[] = '<div class="text-center"><div class="btn-group">
               <button type="button" onclick="editForm('.$list->id.')" class="btn btn-primary btn-sm"><i class="mdi mdi-tooltip-edit"></i></button>
               <button type="button" onclick="deleteData('.$list->id.')" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></button></div></div>';
            $data[] = $row;
        }

        $output = ['data' => $data];

        return response()->json($output);
    }
}
