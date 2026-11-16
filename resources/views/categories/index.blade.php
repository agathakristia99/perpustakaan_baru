@extends('layouts.app')

@section('title', 'Kategori Buku')

@section('content')
    <h1>Daftar Kategori</h1>

    <p>Berikut merupakan kategori buku yang tersedia di perpustakaan.</p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($categories as $index => $category)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $category }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">Belum ada kategori.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
