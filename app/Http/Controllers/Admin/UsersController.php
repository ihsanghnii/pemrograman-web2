<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index ()
    {
        // $users = DB::select('SELECT * FROM users');
        $users = User::all();
        // dd('users');

        return view('admin.users.index', compact('users'));
    }
}
