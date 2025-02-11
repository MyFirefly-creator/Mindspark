<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Tombol Kembali di Pojok Kiri Atas -->
    <div class="position-absolute top-0 start-0 m-3">
        <button class="btn btn-secondary" onclick="window.history.back()">Kembali</button>
    </div>
    
    <div class="container mt-5">
        <h2 class="text-center">Peminjaman Buku</h2>
        
        <!-- Daftar Buku -->
        <div class="card mt-4">
            <div class="card-header">Daftar Buku</div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">Buku 1 <button class="btn btn-primary btn-sm float-end" onclick="pinjamBuku('Buku 1')">Pinjam</button></li>
                    <li class="list-group-item">Buku 2 <button class="btn btn-primary btn-sm float-end" onclick="pinjamBuku('Buku 2')">Pinjam</button></li>
                    <li class="list-group-item">Buku 3 <button class="btn btn-primary btn-sm float-end" onclick="pinjamBuku('Buku 3')">Pinjam</button></li>
                </ul>
            </div>
        </div>

        <!-- Formulir Peminjaman -->
        <div class="card mt-4">
            <div class="card-header">Formulir Peminjaman</div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Peminjam</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" id="judul" placeholder="Pilih buku dari daftar">
                    </div>
                    <button type="submit" class="btn btn-success">Pinjam</button>
                </form>
            </div>
        </div>

        <!-- Daftar Peminjaman -->
        <div class="card mt-4">
            <div class="card-header">Daftar Peminjaman</div>
            <div class="card-body">
                <ul id="daftarPeminjaman" class="list-group">
                    <li class="list-group-item">Belum ada peminjaman</li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        function pinjamBuku(judul) {
            document.getElementById('judul').value = judul;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
