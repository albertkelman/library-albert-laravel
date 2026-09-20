@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h2>Detail Buku</h2>
    <p>Detail Buku ID: {{ $id }}</p>
    
    @if($id > 0)
        <p>Buku dengan ID {{ $id }} ditemukan.</p>
    @else
        <p>Buku tidak ditemukan.</p>
    @endif

    <a href="/books">← Kembali ke Daftar Buku</a>
@endsection