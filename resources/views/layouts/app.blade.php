<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Sistem Informasi Perpustakaan</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #333;
        }

        header {
            background: #263c5a;
            color: white;
            padding: 25px 40px;
        }

        header h1 {
            margin: 0 0 8px;
        }

        nav {
            background: #344f73;
            padding: 15px 40px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 25px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            max-width: 1100px;
            margin: 30px auto;
            padding: 0 20px;
            min-height: 400px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            padding: 13px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #263c5a;
            color: white;
        }

        footer {
            background: #263c5a;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Sistem Informasi Perpustakaan</h1>
        <p>Platform Pengelolaan Informasi Perpustakaan</p>
    </header>

    <nav>
        <a href="/dashboard">Dashboard</a>
        <a href="/books">Buku</a>
        <a href="/categories">Kategori</a>
        <a href="/members">Anggota</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Sistem Informasi Perpustakaan</p>
    </footer>

</body>
</html>
