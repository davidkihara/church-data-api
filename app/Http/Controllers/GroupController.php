<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function createForm(Request $request) {
        return view('register_group');
    }

    public function GroupForm(Request $request) {
        $this->validate($request, [
            'name' => 'required'
         ]);

        Group::create($request->all());

        // 
        return back()->with('success', 'Group Registered.');
    }
}
