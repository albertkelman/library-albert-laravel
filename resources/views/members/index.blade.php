@extends('layouts.app')

@section('title', 'Daftar Member')

@section('content')
    <h2>Daftar Member</h2>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $index => $member)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $member['nama'] }}</td>
                <td>{{ $member['email'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection