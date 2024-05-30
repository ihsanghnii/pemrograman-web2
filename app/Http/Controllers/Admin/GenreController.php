<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    public function index ()
    {
        // $genres = DB::select('SELECT * FROM genres');
        $genres = Genre::all();
        // dd($genres);

        return view('admin.genres.index', compact('genres'));
    }
}
