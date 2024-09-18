<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //FUNCTION LOGIN
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        $books = Book::all();
        return view('index', compact('books'));
    }

    public function form(){
        return view('form');
    }

    public function store(Request $request){
        $request->validate([
            'title'=> 'required',
            'page_count'=> 'required',
            'author_name'=> 'required',
            'author_email'=> 'required'
        ]);
        Book::create($request->all() );
        return redirect()->route('book');
    }
}
