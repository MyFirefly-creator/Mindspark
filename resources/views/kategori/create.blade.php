<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
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

        .sidebar a:hover,
        .sidebar a.active {
            background-color: #ffc107;
            color: #343a40;
        }

        .main-content {
            margin-left: 250px;
            flex-grow: 1;
            padding: 20px;
        }

        form {
            max-width: 500px;
            margin: auto;
        }
    </style>
</head>
<body>

    <div class="wrapper">
        <aside class="sidebar">
            <h3>Kategori</h3>
            <ul class="list-unstyled">
                <li><a href="{{ route('kategori.index') }}">Beranda</a></li>
                <li><a href="{{ route('kategori.create') }}" class="active">Tambah Kategori</a></li>
                <li><a href="{{ route('dashboard.index') }}">Kembali</a></li>
            </ul>
        </aside>

        <div class="main-content">
            <h2>Tambah Kategori</h2>

            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="index.blade.php" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>

</body>
</html>
