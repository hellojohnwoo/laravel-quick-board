<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $books = [
            'Snow White',
            'The Little Mermaid'
        ];
        return view('welcome', [
            'books' => $books
        ]);
    }

    public function hello()
    {
        return view('hello');
    }

    public function contact()
    {
        return view('contact');
    }
}
