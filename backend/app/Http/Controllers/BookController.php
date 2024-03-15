<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Books;

class BookController extends Controller
{
    public function addbook(Request $resp)
        {
            $books = new Books;
            $books->book_isbn = $resp['b_isbn'];
            $books->book_name = $resp['b_name'];
            $books->book_author = $resp['b_author'];
            $books->book_genre = $resp['b_genre'];
            $books->book_quantity = $resp['b_quantity'];
            $books->book_price = $resp['b_price'];
            $books->book_image = $resp['b_image'];
            $books->save();
        }

    public function getbook()
        {
            $books = new Books;
            return response()->json($books->all());
        }
    
    
}
