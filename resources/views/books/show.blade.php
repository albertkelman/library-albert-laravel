@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h2>Detail Buku</h2>

    <p><strong>ID:</strong> {{ $book->id }}</p>
    <p><strong>Judul:</strong> {{ $book->title }}</p>
    <p><strong>Penulis:</strong> {{ $book->author }}</p>
    <p><strong>Kategori:</strong> {{ $book->category?->name ?? 'Belum ada kategori' }}</p>
    <p><strong>Tahun Terbit:</strong> {{ $book->year }}</p>
    <p><strong>Stok:</strong> {{ $book->stock }}</p>

    @if($book->stock > 0)
        <p>Status: Tersedia</p>
    @else
        <p>Status: Stok Habis</p>
    @endif

    <br>
    <a href="{{ route('books.edit', $book) }}">Edit</a> |
    <a href="{{ route('books.index') }}">← Kembali ke Daftar Buku</a>
@endsection