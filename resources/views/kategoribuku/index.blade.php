kategori buku
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <div class="d-flex vh-100">
        <!-- Sidebar -->
        <div class="bg-secondary text-white p-4" style="width: 250px;">
            <div class="d-flex align-items-center mb-4">
                <img src="https://storage.googleapis.com/a1aa/image/7rRhZIExe5fxB9t_4CsnNNDFMIO3iqMg_5ciDaJp4SY.jpg" width="40" height="40" class="me-2" alt="Logo">
                <span class="fw-bold">Logo</span>
            </div>
            <div class="d-flex align-items-center mb-4">
                <img src="https://storage.googleapis.com/a1aa/image/A_9K3IJrOBhk2iQJ_dRRgnLKdekEJMW2Xb8ARpu4cSY.jpg" width="40" height="40" class="rounded-circle me-2" alt="User Avatar">
                <span>Username</span>
            </div>
            <nav class="nav flex-column">
                <a class="nav-link text-white" href="#"><i class="fas fa-user me-2"></i>Account</a>
                <a class="nav-link text-white" href="#"><i class="fas fa-home me-2"></i>Home</a>
                <a class="nav-link text-white" href="#"><i class="fas fa-heart me-2"></i>Favorites</a>
                <a class="nav-link text-white" href="#"><i class="fas fa-comments me-2"></i>Chat CS</a>
            </nav>
        </div>
        
        <!-- Main Content -->
        <div class="container-fluid p-4">
            <!-- Search Bar -->
            <div class="input-group mb-4">
                <input type="text" class="form-control" placeholder="What book are you looking for?">
                <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
            </div>
            
            <!-- Category -->
            <h2 class="mb-3">Category</h2>
            <div class="d-flex flex-wrap gap-3 mb-4">
                <button class="btn btn-outline-primary">All</button>
                <button class="btn btn-outline-primary">Science</button>
                <button class="btn btn-outline-primary">Horror</button>
                <button class="btn btn-outline-primary">Komik</button>
                <button class="btn btn-outline-primary">Novel</button>
                <button class="btn btn-outline-primary">Sejarah</button>
                <button class="btn btn-outline-primary">Pendidikan</button>
            </div>
            
            <!-- Book List -->
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="https://storage.googleapis.com/a1aa/image/ZRAZSM427g1Iiuf0dPgoshhhYUn7PVWYhj8GS3rUzxA.jpg" class="card-img-top" alt="Book Cover">
                        <div class="card-body text-center">
                            <h5 class="card-title">Judul Buku</h5>
                            <p class="card-text text-muted">Penulis</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://storage.googleapis.com/a1aa/image/ZRAZSM427g1Iiuf0dPgoshhhYUn7PVWYhj8GS3rUzxA.jpg" class="card-img-top" alt="Book Cover">
                        <div class="card-body text-center">
                            <h5 class="card-title">Judul Buku</h5>
                            <p class="card-text text-muted">Penulis</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://storage.googleapis.com/a1aa/image/ZRAZSM427g1Iiuf0dPgoshhhYUn7PVWYhj8GS3rUzxA.jpg" class="card-img-top" alt="Book Cover">
                        <div class="card-body text-center">
                            <h5 class="card-title">Judul Buku</h5>
                            <p class="card-text text-muted">Penulis</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="https://storage.googleapis.com/a1aa/image/ZRAZSM427g1Iiuf0dPgoshhhYUn7PVWYhj8GS3rUzxA.jpg" class="card-img-top" alt="Book Cover">
                        <div class="card-body text-center">
                            <h5 class="card-title">Judul Buku</h5>
                            <p class="card-text text-muted">Penulis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
