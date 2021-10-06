<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Church;

class ChurchController extends Controller
{
    public function viewChurches(Request $request) {
        $churches = DB::table('churches')->get();
        return view('app', ['churches' => $churches]);
    }

    public function viewChurch($id) {
        $church = DB::table('churches')->where('id', $id)->first();
        $church_id = $church->id;
        $groups = DB::table('groups')->where('church_id', $church_id)->get();
        $members = DB::table('members')->where('church_id', $church_id)->get();
        return view('church', ['church' => $church, 'groups' => $groups, 'members' => $members]);
    }

    public function createForm(Request $request) {
        return view('register_church');
    }

    public function ChurchForm(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'branch' => 'required',
            'registration_number' => 'required',
            'user_id' => 'required'
        ]);

        Church::create($request->all());

        return back()->with('success', 'Church Registered.');
    }
}
