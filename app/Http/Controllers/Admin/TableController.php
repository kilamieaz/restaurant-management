<?php

namespace App\Http\Controllers\Admin;

use App\Table;
use Illuminate\Http\Request;
use App\Http\Requests\TableRequest;
use App\Http\Controllers\Controller;

class TableController extends Controller
{
    public function index()
    {
        return view('admin.table.index');
    }
    public function store(TableRequest $request)
    {
        $table = Table::create($request->all());    
    }
    public function show(Table $table)
    {
        return $table;
    }
    public function edit(Table $table)
    {
        echo json_encode($table);
    }
    public function update(TableRequest $request, Table $table)
    {
        $table->update($request->all());
    }
    public function destroy(Table $table)
    {
        $table->delete();
    }
}
