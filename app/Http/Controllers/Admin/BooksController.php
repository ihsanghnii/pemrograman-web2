<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Genre;
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

    public function create()
    {
        return view('admin.books.create');;
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'isbn' => 'required',
            'deskripsi' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'genres_id' => 'required|exists:genres,id'
        ]);

        Book::create($request->all());

        return redirect()->route('books.create')->alert('sukses! data berhasil diedit ');
    }

    public function delete(string $id)
    {
        $books = Book::find($id);
        $books->delete();

        return redirect()->route('books.index');
    }

    public function edit(string $id)
    {
        $book = Book::find($id);
        $genres = Genre::all();
        return view('admin.books.edit', compact('book', 'genres'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'isbn' => 'required',
            'deskripsi' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'genres_id' => 'required|exists:genres,id'
        ]);

        $book = Book::find($id);
        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Employee berhasil diperbarui');
    }
}
