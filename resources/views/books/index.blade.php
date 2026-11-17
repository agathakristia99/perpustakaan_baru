@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')

<div class="container">
    <h1>Daftar Buku</h1>

    <p>Data buku perpustakaan yang tersimpan di database.</p>

    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Kategori</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->category->name ?? '-' }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->stock }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" align="center">
                        Belum ada data buku.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
