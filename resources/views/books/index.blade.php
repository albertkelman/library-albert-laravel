@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $index => $book)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $book['judul'] }}</td>
                <td>{{ $book['penulis'] }}</td>
                <td>{{ $book['tahun'] }}</td>
                <td><a href="/books/{{ $index + 1 }}">Lihat Detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection