<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
     public function store(Request $request, Book $book)
    {
        $request->validate(['comment' => 'required|string']);

        $book->comments()->create([
            'user_id' => auth()->id(),
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Comment added!');
    }
}
