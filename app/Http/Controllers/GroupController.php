<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function viewGroup($id) {
        $group = DB::table('groups')->where('id', $id)->first();
        $group_id = $group->id;
        $members = DB::table('members')->where('group_id', $group_id)->get();
        return view('group', ['group' => $group, 'members' => $members]);
    }

    public function createForm(Request $request) {
        $user_id = Auth::user()->id;
        $churches = DB::table('churches')->where('user_id', $user_id)->get();
        return view('register_group', ['churches' => $churches]);
    }

    public function GroupForm(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'church_id' => 'required'
         ]);

        Group::create($request->all());

        return back()->with('success', 'Group Registered.');
    }
}
