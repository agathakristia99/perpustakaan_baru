@extends('layouts.app')

@section('title', 'Data Anggota')

@section('content')
    <h1>Daftar Anggota</h1>

    <p>Berikut merupakan data anggota perpustakaan.</p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Anggota</th>
                <th>Nama Anggota</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($members as $index => $member)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $member['number'] }}</td>
                    <td>{{ $member['name'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Belum ada anggota.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
