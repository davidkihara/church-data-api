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
        return view('church', ['church' => $church]);
    }

    public function createForm(Request $request) {
        return view('register_church');
    }

    public function ChurchForm(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'branch' => 'required',
            'registration_number' => 'required'
        ]);

        Church::create($request->all());

        return back()->with('success', 'Church Registered.');
    }
}
