<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>
</head>
<body>
    <h1>Daftar Anggota Perpustakaan</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Kode Anggota</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor Telepon</th>
        </tr>

        @forelse ($members as $member)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $member->member_code }}</td>
            <td>{{ $member->name }}</td>
            <td>{{ $member->email }}</td>
            <td>{{ $member->phone }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="5">Belum ada anggota.</td>
        </tr>
        @endforelse
    </table>
</body>
</html>
