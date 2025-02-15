<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .wrapper {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            padding: 20px;
            height: 100vh;
            position: fixed;
            left: 0;
            overflow-y: auto;
            color: white;
        }

        .sidebar h3 {
            text-align: center;
            color: #ffc107;
        }

        .sidebar a {
            text-decoration: none;
            color: #f8f9fa;
            display: block;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .sidebar a:hover {
            background-color: #ffc107;
            color: #343a40;
        }

        .main-content {
            margin-left: 250px;
            flex-grow: 1;
            padding: 20px;
        }

        .table th, .table td {
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="wrapper">
        <aside class="sidebar">
            <h3>Kategori</h3>
            <ul class="list-unstyled">
                <li><a href="#">Beranda</a></li>
                <li><a href="{{ route('kategori.create') }}">Tambah Kategori</a></li>
                <li><a href="{{ route('dashboard.index') }}">Kembali</a></li>
            </ul>
        </aside>

        <div class="main-content">
            <h2>Daftar Kategori</h2>
            <a href={{ route('kategori.create') }} class="btn btn-primary mb-3">Tambah Kategori</a>

            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Sesuaikan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Komedi</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" onclick="confirmDelete()">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function confirmDelete() {
            if (confirm("Hapus kategori ini?")) {
                alert("Kategori dihapus.");
            }
        }
    </script>

</body>
</html>
