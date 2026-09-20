<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [
            'Fiksi',
            'Non-Fiksi',
            'Sains & Teknologi',
            'Mitologi',
            'Science Fiction',
        ];

        return view('categories.index', compact('categories'));
    }
}