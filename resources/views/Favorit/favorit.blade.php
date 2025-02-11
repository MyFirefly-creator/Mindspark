<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="d-flex min-vh-100">
    <!-- Sidebar -->
    <div class="bg-light p-4 d-flex flex-column align-items-center w-25 border-end">
        <img src="https://storage.googleapis.com/a1aa/image/ndQApwRUBRj3WIR_Yevh4G4BmwxVQvmKVF02JDC_KyE.jpg" width="50" height="50" class="mb-4" alt="Logo">
        <span class="text-lg fw-semibold mb-3">Logo</span>
        <div class="text-center mb-4">
            <img src="https://storage.googleapis.com/a1aa/image/AW3PrjTY_QY-JriHfIJwqdNclr7aiHkMww2KV7KF5jM.jpg" width="50" height="50" class="rounded-circle mb-2" alt="User Avatar">
            <p class="text-sm fw-medium">Username</p>
        </div>
        <nav class="nav flex-column text-center w-100">
            <a class="nav-link text-dark" href="#"><i class="fas fa-user me-2"></i> Account</a>
            <a class="nav-link text-dark" href="#"><i class="fas fa-home me-2"></i> Home</a>
            <a class="nav-link text-dark" href="#"><i class="fas fa-star me-2"></i> Favorites</a>
            <a class="nav-link text-dark" href="#"><i class="fas fa-comments me-2"></i> Chat CS</a>
        </nav>
    </div>
    <!-- Main Content -->
    <div class="flex-grow-1 d-flex flex-column justify-content-center align-items-center">
        <p class="text-xl fw-semibold mb-4">You haven't favored any books yet</p>
        <button class="btn btn-secondary d-flex align-items-center">
            <span>Find books</span>
            <i class="fas fa-arrow-right ms-2"></i>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
