<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            ['nama' => 'Cynthia Erivo', 'email' => 'cynthia@email.com'],
            ['nama' => 'Kacey Musgraves', 'email' => 'kacey@email.com'],
            ['nama' => 'Joni Mitchell', 'email' => 'joni@email.com'],
            ['nama' => 'Jon M. Chu', 'email' => 'jonchu@email.com'],
            ['nama' => 'Michelle Yeoh', 'email' => 'michelle@email.com'],
        ];

        return view('members.index', compact('members'));
    }
}