<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['judul' => 'Circe', 'penulis' => 'Madeline Miller', 'tahun' => 2018],
            ['judul' => 'Project Hail Mary', 'penulis' => 'Andy Weir', 'tahun' => 2021],
            ['judul' => 'The Song of Achilles', 'penulis' => 'Madeline Miller', 'tahun' => 2011],
            ['judul' => 'The Martian', 'penulis' => 'Andy Weir', 'tahun' => 2011],
            ['judul' => 'Recursion', 'penulis' => 'Blake Crouch', 'tahun' => 2019],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}