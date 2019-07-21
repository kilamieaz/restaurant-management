<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionMemberController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('q')) {
            $search = $request->q;
            $data = User::searchMember($search);
            return response()->json($data);
        }
    }
}
