<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori Perpustakaan</title>
</head>
<body>

    <h1>Daftar Kategori Buku</h1>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <a href="/categories/create">+ Tambah Kategori</a>

    <br><br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a href="/categories/{{ $category->id }}/edit">
                            Edit
                        </a>

                        <form
                            action="/categories/{{ $category->id }}"
                            method="POST"
                            style="display:inline;"
                            onsubmit="return confirm('Yakin ingin menghapus kategori ini?')"
                        >
                            @csrf
                            @method('DELETE')

                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada kategori.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
