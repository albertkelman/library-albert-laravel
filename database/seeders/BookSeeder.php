<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Circe',
            'author' => 'Madeline Miller',
            'year' => 2018,
            'stock' => 5,
        ]);

        Book::create([
            'title' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'year' => 2021,
            'stock' => 3,
        ]);

        Book::create([
            'title' => 'The Song of Achilles',
            'author' => 'Madeline Miller',
            'year' => 2011,
            'stock' => 4,
        ]);

        Book::create([
            'title' => 'The Martian',
            'author' => 'Andy Weir',
            'year' => 2011,
            'stock' => 2,
        ]);

        Book::create([
            'title' => 'Recursion',
            'author' => 'Blake Crouch',
            'year' => 2019,
            'stock' => 6,
        ]);
    }
}