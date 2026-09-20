@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>

    <ul>
        <li>Jumlah Buku: {{ $jumlahBuku }}</li>
        <li>Jumlah Member: {{ $jumlahMember }}</li>
        <li>Jumlah Kategori: {{ $jumlahKategori }}</li>
    </ul>
@endsection