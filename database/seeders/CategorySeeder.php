<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Fiksi',
            'Non-Fiksi',
            'Sains & Teknologi',
            'Mitologi',
            'Science Fiction',
        ];

        foreach ($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}

$names 