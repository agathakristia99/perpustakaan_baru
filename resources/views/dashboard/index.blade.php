@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>

    <p>
        Selamat datang di Sistem Informasi Perpustakaan.
        Halaman ini menampilkan ringkasan informasi perpustakaan.
    </p>

    <div class="cards">
        <div class="card">
            <h3>Total Buku</h3>
            <div class="number">{{ $totalBooks }}</div>
        </div>

        <div class="card">
            <h3>Total Anggota</h3>
            <div class="number">{{ $totalMembers }}</div>
        </div>

        <div class="card">
            <h3>Total Kategori</h3>
            <div class="number">{{ $totalCategories }}</div>
        </div>
    </div>
@endsection
