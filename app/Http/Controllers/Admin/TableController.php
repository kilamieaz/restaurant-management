<?php

namespace App\Http\Controllers\Admin;

use App\Table;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TableController extends Controller
{
    public function index()
    {
        return view('admin.table.index');
    }
    public function store(Request $request)
    {
        $table = Table::create($request->all());    
    }
    public function edit(Table $table)
    {
        echo json_encode($table);
    }
    public function update(Request $request, Table $table)
    {
        $table->update($request->all());
    }
    public function destroy(Table $table)
    {
        $table->delete();
    }
}
