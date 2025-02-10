<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card-custom {
            max-width: 900px;
            margin: auto;
            border-radius: 10px;
            overflow: hidden;
            background: white;
        }
        .carousel img {
            border-radius: 10px;
            object-fit: cover;
            height: 100%;
        }
        .form-control {
            border-radius: 8px;
            background-color: #e9ecef;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 8px;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        @media (max-width: 768px) {
            .carousel {
                display: none;
            }
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="card p-4 shadow-lg card-custom">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 d-none d-md-block">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://storage.googleapis.com/a1aa/image/cxBqMRBjJJHLuhTl-qSu8j7AiaDlfRItKVEDijwcxls.jpg" class="d-block w-100" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://storage.googleapis.com/a1aa/image/BL1cL-pJwvgqPksCunGsXiJAVUUIaBFP0Zo2kl8dYa4.jpg" class="d-block w-100" alt="Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://storage.googleapis.com/a1aa/image/FvRngZ3ZejslEFBj4rjKB7rYPaWJ2JvAUAWOl5wfQ3Q.jpg" class="d-block w-100" alt="Image 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h2 class="text-center fw-bold mb-3">Register</h2>
                <form id="registerForm">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" name="nis" placeholder="NIS" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" required>
                    </div>
                    <button type="submit" class="btn btn-custom w-100">Register</button>
                </form>
                <p class="text-center mt-3">
                    Sudah Ada Akun? <a href="{{ route('loginForm') }}" class="text-primary">Login Kesini</a>
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Sukses!',
                text: 'Pendaftaran berhasil!',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });
    </script>
</body>
</html>
