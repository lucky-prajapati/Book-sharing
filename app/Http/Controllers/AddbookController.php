<?php

namespace App\Http\Controllers;

use App\Models\AddBook;
use Illuminate\Http\Request;

class AddbookController extends Controller
{
    public function generatebookid()
    {
        $bookid = AddBook::select('book_id')->orderBy('book_id', 'desc')->first();
        if (!$bookid) {
            $bookid = 'B001';
        } else {
            $bookid = substr($bookid, 13, 3);
            $bookid = $bookid + 1;
            $bookid = "B00$bookid";
        }
        return $bookid;
    }

    public function addbook(Request $request)
    {
        $this->generatebookid();
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('Book_Images'), $imageName);
        $addbook = new AddBook();
        $addbook->book_id = $this->generatebookid();
        $addbook->book_name = $request->book_name;
        $addbook->author = $request->author;
        $addbook->category = $request->category;
        $addbook->isbn = $request->isbn;
        $addbook->edition = $request->edition;
        $addbook->page = $request->page;
        $addbook->publisher = $request->publisher;
        // $image=$request->file('image');
        $addbook->image=$imageName;
        $addbook->save();
        return view('add_book');
    }

    public function viewbook()
    {
        $book = AddBook::all();
        return view('view_book', ['viewbook' => $book]);
    }
}
