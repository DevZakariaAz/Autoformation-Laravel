<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function adminIndex()
    {
        $books = Book::all();
        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        return view('admin.books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|digits:4',
            'isbn' => 'required|string|max:13|unique:books,isbn',  // Assuming ISBN should be unique
            'description' => 'nullable|string',
        ]);

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'published_date' => $request->year,  // Assuming you're saving the year as the publication date
            'isbn' => $request->isbn,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.books.index')->with('success', 'Book added successfully!');
    }


    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.books.index')->with('success', 'Book deleted successfully!');
    }
}

