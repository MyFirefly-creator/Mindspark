<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-light">
    <div class="d-flex vh-100">
        <!-- Sidebar -->
        <div class="bg-white p-4 border-end" style="width: 20%;">
            <div class="d-flex align-items-center mb-4">
                <i class="fas fa-book fs-3"></i>
                <span class="ms-2 fs-4 fw-bold">Logo</span>
            </div>
            <div class="d-flex align-items-center mb-4">
                <div class="rounded-circle bg-secondary" style="width: 50px; height: 50px;"></div>
                <span class="ms-2 fs-5 fw-semibold">Username</span>
            </div>
            <nav class="nav flex-column">
                <a href="#" class="nav-link text-dark"><i class="fas fa-user me-2"></i> Account</a>
                <a href="#" class="nav-link text-dark"><i class="fas fa-home me-2"></i> Home</a>
                <a href="#" class="nav-link text-dark"><i class="fas fa-heart me-2"></i> Favorites</a>
                <a href="#" class="nav-link text-dark"><i class="fas fa-comments me-2"></i> Chat CS</a>
            </nav>
        </div>
        <!-- Main Content -->
        <div class="flex-grow-1 p-5 bg-light">
            <!-- Search Bar -->
            <div class="input-group mb-4">
                <input type="text" class="form-control" placeholder="What book are you looking for?">
                <button class="btn btn-secondary">Search</button>
            </div>
            <!-- Book Details -->
            <div class="row">
                <div class="col-md-8">
                    <h1 class="fw-bold">Judul Buku</h1>
                    <p class="text-muted">Penulis</p>
                    <span class="badge bg-secondary">Kategori</span>
                    <p class="mt-3">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto...</p>
                    <div class="d-flex align-items-center mt-3">
                        <span class="fw-semibold me-2">Rating</span>
                        <div class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <div class="position-relative bg-secondary rounded" style="width: 150px; height: 220px;"></div>
                </div>
            </div>
            <!-- Other Books -->
            <h2 class="fw-bold mt-5">Buku lainnya</h2>
            <div class="row g-3">
                <div class="col-6 col-md-3">
                    <div class="bg-secondary rounded" style="height: 150px;"></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="bg-secondary rounded" style="height: 150px;"></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="bg-secondary rounded" style="height: 150px;"></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="bg-secondary rounded" style="height: 150px;"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
