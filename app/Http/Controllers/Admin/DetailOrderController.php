<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DetailOrderController extends Controller
{
    public function index()
    {
        $auth = Auth::user();
        $userRole = $auth->role->id;

        return view('admin.detailOrder.index', compact('userRole'));
    }
}
