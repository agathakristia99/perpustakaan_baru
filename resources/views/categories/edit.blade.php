<!DOCTYPE html>
<html>
<head>
    <title>Edit Kategori</title>
</head>
<body>

    <h1>Edit Kategori Buku</h1>

    <form action="/categories/{{ $category->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Kategori</label><br>
        <input
            type="text"
            name="name"
            value="{{ old('name', $category->name) }}"
            required
        >

        @error('name')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <br><br>

        <label>Deskripsi</label><br>
        <textarea name="description">{{ old('description', $category->description) }}</textarea>

        <br><br>

        <button type="submit">Simpan Perubahan</button>
        <a href="/categories">Kembali</a>
    </form>

</body>
</html>
