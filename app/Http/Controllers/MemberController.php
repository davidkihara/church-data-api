<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function viewMember($id) {
        $member = DB::table('members')->where('id', $id)->first();
        $member_id = $member->id;
        return view('member', ['member' => $member,]);
    }

    public function createForm(Request $request) {
        $user_id = Auth::user()->id;
        $churches = DB::table('churches')->where('user_id', $user_id)->get();
        return view('register_member', ['churches' => $churches]);
    }

    public function MemberForm(Request $request) {
        $this->validate($request, [
            'email' => 'required',
            'phone_number' => 'required',
            'social_security_number' => 'required',
            'church_id' => 'required'
         ]);

        Member::create($request->all());

        return back()->with('success', 'Member Registered.');
    }
}
