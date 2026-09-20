<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Library System';
        $description = 'Sistem Informasi Perpustakaan Sederhana';
        $jumlahBuku = 5;
        $jumlahMember = 5;
        $jumlahKategori = 5;

        return view('dashboard.index', compact('title', 'description', 'jumlahBuku', 'jumlahMember', 'jumlahKategori'));
    }
}