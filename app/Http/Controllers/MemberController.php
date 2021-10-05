<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function createForm(Request $request) {
        return view('register_member');
    }

    public function MemberForm(Request $request) {
        $this->validate($request, [
            'email' => 'required',
            'phone_number' => 'required',
            'social_security_number' => 'required',
         ]);

        Member::create($request->all());

        // 
        return back()->with('success', 'Member Registered.');
    }
}
