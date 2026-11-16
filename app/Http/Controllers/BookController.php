<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['id' => 1, 'title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'year' => 2005],
            ['id' => 2, 'title' => 'Bumi', 'author' => 'Tere Liye', 'year' => 2014],
            ['id' => 3, 'title' => 'Laut Bercerita', 'author' => 'Leila S. Chudori', 'year' => 2017],
            ['id' => 4, 'title' => 'Negeri 5 Menara', 'author' => 'Ahmad Fuadi', 'year' => 2009],
            ['id' => 5, 'title' => 'Perahu Kertas', 'author' => 'Dee Lestari', 'year' => 2009],
            ['id' => 6, 'title' => 'Ronggeng Dukuh Paruk', 'author' => 'Ahmad Tohari', 'year' => 1982],
            ['id' => 7, 'title' => 'Pulang', 'author' => 'Tere Liye', 'year' => 2015],
            ['id' => 8, 'title' => 'Dilan 1990', 'author' => 'Pidi Baiq', 'year' => 2014],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}
