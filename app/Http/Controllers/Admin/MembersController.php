<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index ()
    {
        // $members = DB::select('SELECT * FROM members');
        $members = Member::all();
        // dd($members);
    
        return view('admin.members.index', compact('members'));
    }
}
