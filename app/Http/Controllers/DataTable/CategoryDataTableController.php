<?php

namespace App\Http\Controllers\DataTable;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryDataTableController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $data = [];
        foreach ($category as $index => $list) {
            $row = [];
            $row[] = ++$index;
            $row[] = $list->name;
            $row[] = $list->description;
            $row[] = '<div class="text-center"><div class="btn-group">
               <button type="button" onclick="editForm(' . $list->id . ')" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
               <button type="button" onclick="deleteData(' . $list->id . ')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></div></div>';
            $data[] = $row;
        }

        $output = ['data' => $data];
        return response()->json($output);
    }
}
