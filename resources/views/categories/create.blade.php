<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kategori</title>
</head>
<body>

    <h1>Tambah Kategori Buku</h1>

    <form action="/categories" method="POST">
        @csrf

        <label>Nama Kategori</label><br>
        <input
            type="text"
            name="name"
            value="{{ old('name') }}"
            required
        >

        @error('name')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <br><br>

        <label>Deskripsi</label><br>
        <textarea name="description">{{ old('description') }}</textarea>

        <br><br>

        <button type="submit">Simpan Kategori</button>
        <a href="/categories">Kembali</a>
    </form>

</body>
</html>
