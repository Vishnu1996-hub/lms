<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class LmsController extends Controller
{
    public function index(){
        $books = Book::all();
        return $books->toJson();
    }
}
