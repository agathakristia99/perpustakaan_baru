<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
</head>
<body>
    <h1>Daftar Buku Perpustakaan</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Kategori</th>
            <th>Tahun</th>
            <th>Stok</th>
        </tr>

        @forelse ($books as $book)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->category->name ?? '-' }}</td>
            <td>{{ $book->year }}</td>
            <td>{{ $book->stock }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="6">Belum ada data buku.</td>
        </tr>
        @endforelse
    </table>
</body>
</html>
