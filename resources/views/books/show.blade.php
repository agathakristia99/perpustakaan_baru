@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <h1>Detail Buku</h1>

    <p>Halaman ini menampilkan detail buku berdasarkan parameter URL.</p>

    @if ($id)
        <div class="card">
            <h3>ID Buku</h3>
            <div class="number">{{ $id }}</div>
        </div>
    @else
        <p>ID buku tidak tersedia.</p>
    @endif

    <br>

    <a href="/books">Kembali ke Daftar Buku</a>
@endsection
