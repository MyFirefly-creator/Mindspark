<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <div class="d-flex vh-100">
        <!-- Sidebar -->
        <div class="bg-primary text-white p-3" style="width: 250px;">
            <div class="d-flex align-items-center mb-4">
                <img src="https://storage.googleapis.com/a1aa/image/vxMQa7nixig0pKipDO8lTDpk-zi41ze_qkeOOb5F_-0.jpg" 
                     class="rounded-circle me-2" width="50" height="50" alt="Admin">
                <span class="fs-5 fw-bold">Admin</span>
            </div>
            <nav>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none p-2 rounded bg-opacity-50">
                            <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none p-2 rounded">
                            <i class="fas fa-users me-2"></i> Manage User
                        </a>
                    </li>
                    <li class="mb-3">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none p-2 rounded">
                            <i class="fas fa-book me-2"></i> Manage Buku
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none p-2 rounded">
                            <i class="fas fa-book-reader me-2"></i> Manage Peminjaman
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1 p-4">
            <header class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="fs-4 fw-bold">Dashboard</h1>
                <img src="https://storage.googleapis.com/a1aa/image/lDmPendpxW3hU2-pDO_Lqf1woEvvB79RJ1EJJCK27BM.jpg" 
                     class="rounded-circle" width="40" height="40" alt="User">
            </header>

            <!-- Dashboard Stats -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="bg-success text-white p-3 rounded text-center">
                        <p class="mb-1">User Bulan Ini</p>
                        <h2 class="fw-bold">27 User</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-primary text-white p-3 rounded text-center">
                        <p class="mb-1">Meminjam Buku Bulan Ini</p>
                        <h2 class="fw-bold">27 Buku</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bg-danger text-white p-3 rounded text-center">
                        <p class="mb-1">Buku Baru Yang Masuk Bulan Ini</p>
                        <h2 class="fw-bold">27 Buku</h2>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="row">
                <div class="col-md-6">
                    <div class="bg-white p-3 rounded text-center shadow-sm">
                        <h5 class="fw-semibold mb-3">User</h5>
                        <img src="https://storage.googleapis.com/a1aa/image/q9WeSgpjyNDmD8c3LZoqeYjR3JCOVsm3m-7WygfO2Ns.jpg" 
                             width="100%" height="150" alt="User Chart">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-white p-3 rounded text-center shadow-sm">
                        <h5 class="fw-semibold mb-3">Peminjam Buku</h5>
                        <img src="https://storage.googleapis.com/a1aa/image/Hh_3v1zHB3lTdrJ7YIFOhrMly4W9Iodmc08h5Ti6Fdk.jpg" 
                             width="100%" height="150" alt="Peminjam Buku Chart">
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="bg-white p-3 rounded text-center shadow-sm">
                        <h5 class="fw-semibold mb-3">Buku Baru Bulan Ini</h5>
                        <img src="https://storage.googleapis.com/a1aa/image/oNLncR__PYal2jnjdXl03MERcY3rgzZEImH_8dITz70.jpg" 
                             width="100%" height="150" alt="Buku Baru Bulan Ini Chart">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
