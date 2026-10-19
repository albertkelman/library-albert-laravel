@extends('layouts.app')

@section('title', 'Daftar Kategori')

@section('content')
    <h2>Daftar Kategori</h2>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Jumlah Buku</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->books_count }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection