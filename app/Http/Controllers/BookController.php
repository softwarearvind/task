<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
class BookController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::query();

        if ($request->search) {
            $query->where('title', 'like', "%{$request->search}%")
                ->orWhere('author', 'like', "%{$request->search}%");
        }

        $books = $query->paginate(5);

        return view('books.index', compact('books'));
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function rate(Request $request, Book $book)
    {
        $request->validate([
            'rating' => 'required|numeric|min:1|max:5',
        ]);

        $book->rating = (($book->rating * $book->ratings_count) + $request->rating) / ($book->ratings_count + 1);
        $book->ratings_count += 1;
        $book->save();

        return redirect()->back()->with('success', 'Thank you for rating!')->with('redirect', true);

    }

}
