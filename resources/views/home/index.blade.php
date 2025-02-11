<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .sidebar {
            height: 100vh;
            overflow-y: auto;
        }
        .main-content {
            overflow-y: auto;
            height: 100vh;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-secondary sidebar p-3 text-white">
                <div class="text-center mb-4">
                    <img src="https://storage.googleapis.com/a1aa/image/a4tshzulAv9DkL0QBBMW-CooBPKap003ATEKoM_yNkM.jpg" width="50" height="50" class="rounded-circle">
                    <h5 class="mt-2">Logo</h5>
                </div>
                <div class="text-center mb-4">
                    <img src="https://storage.googleapis.com/a1aa/image/pVyltp7vIObso0w-rj8wBoahWWZJMyyhdHyEBflNhXQ.jpg" width="50" height="50" class="rounded-circle">
                    <h5 class="mt-2">Username</h5>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-user me-2"></i>Account</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-home me-2"></i>Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-star me-2"></i>Favorites</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white"><i class="fas fa-comments me-2"></i>Chat CS</a></li>
                </ul>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <div class="py-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="What book are you looking for?">
                        <button class="btn btn-outline-secondary">Search</button>
                    </div>
                </div>
                
                <!-- Categories -->
                <div class="mb-3">
                    <h4>Category</h4>
                    <div class="btn-group">
                        <button class="btn btn-secondary"><i class="fas fa-book"></i> All</button>
                        <button class="btn btn-outline-secondary">Sains</button>
                        <button class="btn btn-outline-secondary">Horror</button>
                        <button class="btn btn-outline-secondary">Komik</button>
                        <button class="btn btn-outline-secondary">Novel</button>
                        <button class="btn btn-outline-secondary">Sejarah</button>
                        <button class="btn btn-outline-secondary">Pendidikan</button>
                    </div>
                </div>
                
                <!-- Books Grid -->
                <div class="row">
                    <div class="col-md-3 mb-4" repeat="8">
                        <div class="card">
                            <img src="https://storage.googleapis.com/a1aa/image/h07jftz6Qx7WAUJQIuilU_y-wfD2bY8sVFqPWOtpHoA.jpg" class="card-img-top" alt="Book cover">
                            <div class="card-body">
                                <h6 class="card-title">Judul Buku</h6>
                                <p class="text-muted">Penulis</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
