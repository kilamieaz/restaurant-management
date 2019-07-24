<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

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
