<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|min:2|max:255',
            'author'      => 'required|string|max:255|regex:/^[a-zA-Z\s\.\-\']+$/',
            'year'        => 'required|integer|min:1900|max:' . date('Y'),
            'stock'       => 'required|integer|min:0|max:1000',
            'category_id' => 'required|exists:categories,id',
        ], [
            'title.required'       => 'Judul buku wajib diisi.',
            'title.min'            => 'Judul buku minimal 2 karakter.',
            'author.required'      => 'Nama penulis wajib diisi.',
            'author.regex'         => 'Nama penulis hanya boleh berisi huruf, spasi, titik, tanda hubung, dan apostrof.',
            'year.required'        => 'Tahun terbit wajib diisi.',
            'year.integer'         => 'Tahun terbit harus berupa angka.',
            'year.min'             => 'Tahun terbit tidak boleh kurang dari 1900.',
            'year.max'             => 'Tahun terbit tidak boleh lebih dari tahun ' . date('Y') . '.',
            'stock.required'       => 'Stok wajib diisi.',
            'stock.min'            => 'Stok tidak boleh negatif.',
            'stock.max'            => 'Stok tidak boleh lebih dari 1000.',
            'category_id.required' => 'Kategori wajib dipilih.',
            'category_id.exists'   => 'Kategori yang dipilih tidak valid.',
        ]);

        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function show(Book $book)
    {
        $book->load('category');
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $categories = Category::orderBy('name')->get();
        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title'       => 'required|string|min:2|max:255',
            'author'      => 'required|string|max:255|regex:/^[a-zA-Z\s\.\-\']+$/',
            'year'        => 'required|integer|min:1900|max:' . date('Y'),
            'stock'       => 'required|integer|min:0|max:1000',
            'category_id' => 'required|exists:categories,id',
        ], [
            'title.required'       => 'Judul buku wajib diisi.',
            'title.min'            => 'Judul buku minimal 2 karakter.',
            'author.required'      => 'Nama penulis wajib diisi.',
            'author.regex'         => 'Nama penulis hanya boleh berisi huruf, spasi, titik, tanda hubung, dan apostrof.',
            'year.required'        => 'Tahun terbit wajib diisi.',
            'year.integer'         => 'Tahun terbit harus berupa angka.',
            'year.min'             => 'Tahun terbit tidak boleh kurang dari 1900.',
            'year.max'             => 'Tahun terbit tidak boleh lebih dari tahun ' . date('Y') . '.',
            'stock.required'       => 'Stok wajib diisi.',
            'stock.min'            => 'Stok tidak boleh negatif.',
            'stock.max'            => 'Stok tidak boleh lebih dari 1000.',
            'category_id.required' => 'Kategori wajib dipilih.',
            'category_id.exists'   => 'Kategori yang dipilih tidak valid.',
        ]);

        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Data buku berhasil diperbarui.');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Data buku berhasil dihapus.');
    }
}