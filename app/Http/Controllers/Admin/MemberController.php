<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Enums\UserRole;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    public function index()
    {
        return view('admin.member.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // $data['password'] = 'member123';
        $data['role_id'] = UserRole::Member;
        User::create($data);
    }

    public function edit(User $member)
    {
        echo json_encode($member);
    }

    public function update(Request $request, User $member)
    {
        $member->update($request->all());
        return json_encode(['member' => $member]);
    }

    public function destroy(User $member)
    {
        $member->delete();
    }
}
