<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index ()
    {
        // $books = DB::select('SELECT * FROM books');
        $books = Book::all();
        $books = Book::with('genre')->get();
        // dd($books);

        return view('admin.books.index', compact('books'));
    }
}
