<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'  => 'required|string|min:3|max:255',
            'author' => 'required|string|max:255|regex:/^[a-zA-Z\s\.\-\']+$/',
            'year'   => 'required|integer|min:1900|max:' . date('Y'),
            'stock'  => 'required|integer|min:0|max:1000',
        ], [
            'title.required'  => 'Judul buku wajib diisi.',
            'title.min'       => 'Judul buku minimal 3 karakter.',
            'author.required' => 'Nama penulis wajib diisi.',
            'author.regex'    => 'Nama penulis hanya boleh berisi huruf, spasi, titik, tanda hubung, dan apostrof.',
            'year.required'   => 'Tahun terbit wajib diisi.',
            'year.integer'    => 'Tahun terbit harus berupa angka.',
            'year.min'        => 'Tahun terbit tidak boleh kurang dari 1900.',
            'year.max'        => 'Tahun terbit tidak boleh lebih dari tahun ' . date('Y') . '.',
            'stock.required'  => 'Stok wajib diisi.',
            'stock.min'       => 'Stok tidak boleh negatif.',
            'stock.max'       => 'Stok tidak boleh lebih dari 1000.',
        ]);

        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Data buku berhasil ditambahkan.');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title'  => 'required|string|min:3|max:255',
            'author' => 'required|string|max:255|regex:/^[a-zA-Z\s\.\-\']+$/',
            'year'   => 'required|integer|min:1900|max:' . date('Y'),
            'stock'  => 'required|integer|min:0|max:1000',
        ], [
            'title.required'  => 'Judul buku wajib diisi.',
            'title.min'       => 'Judul buku minimal 3 karakter.',
            'author.required' => 'Nama penulis wajib diisi.',
            'author.regex'    => 'Nama penulis hanya boleh berisi huruf, spasi, titik, tanda hubung, dan apostrof.',
            'year.required'   => 'Tahun terbit wajib diisi.',
            'year.integer'    => 'Tahun terbit harus berupa angka.',
            'year.min'        => 'Tahun terbit tidak boleh kurang dari 1900.',
            'year.max'        => 'Tahun terbit tidak boleh lebih dari tahun ' . date('Y') . '.',
            'stock.required'  => 'Stok wajib diisi.',
            'stock.min'       => 'Stok tidak boleh negatif.',
            'stock.max'       => 'Stok tidak boleh lebih dari 1000.',
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