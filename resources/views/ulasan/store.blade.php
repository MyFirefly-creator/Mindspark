<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            loadSavedBooks();
        });

        function addReview() {
            var name = document.getElementById("name").value;
            var rating = document.getElementById("rating").value;
            var comment = document.getElementById("comment").value;
            
            if (name && rating && comment) {
                var reviewContainer = document.getElementById("reviews");
                var newReview = document.createElement("div");
                newReview.classList.add("border-bottom", "py-3");
                newReview.innerHTML = `<h5>${name}</h5><div class="text-warning">${'★'.repeat(rating)}${'☆'.repeat(5 - rating)}</div><p>${comment}</p>`;
                reviewContainer.appendChild(newReview);
                
                document.getElementById("name").value = "";
                document.getElementById("rating").value = "";
                document.getElementById("comment").value = "";
            } else {
                alert("Harap isi semua kolom ulasan.");
            }
        }

        function saveBook() {
            var bookTitle = document.getElementById("bookTitle").value;
            if (bookTitle) {
                fetch('/save-book', {
                    method: 'POST',
                    headers: { 
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ title: bookTitle })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        var savedBooks = document.getElementById("savedBooks");
                        var newBook = document.createElement("li");
                        newBook.classList.add("list-group-item");
                        newBook.innerHTML = bookTitle;
                        savedBooks.appendChild(newBook);
                        document.getElementById("bookTitle").value = "";
                    } else {
                        alert("Gagal menyimpan buku.");
                    }
                });
            } else {
                alert("Masukkan judul buku yang ingin disimpan.");
            }
        }

        function loadSavedBooks() {
            fetch('/get-books')
            .then(response => response.json())
            .then(data => {
                var savedBooks = document.getElementById("savedBooks");
                savedBooks.innerHTML = "";
                data.books.forEach(book => {
                    var newBook = document.createElement("li");
                    newBook.classList.add("list-group-item");
                    newBook.innerHTML = book;
                    savedBooks.appendChild(newBook);
                });
            });
        }
    </script>
</head>
<body class="bg-light">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="mb-4">Ulasan Buku</h2>
            <div id="reviews" class="mb-4">
                <div class="border-bottom py-3">
                    <h5>Agus Pratama</h5>
                    <div class="text-warning">★★★★★</div>
                    <p>Buku ini sangat inspiratif, penuh dengan wawasan yang mendalam dan gaya bahasa yang menarik.</p>
                </div>
            </div>
            <h4>Tambahkan Ulasan</h4>
            <div class="mb-3">
                <input type="text" id="name" class="form-control" placeholder="Nama" required>
            </div>
            <div class="mb-3">
                <select id="rating" class="form-select" required>
                    <option value="">Pilih Rating</option>
                    <option value="5">★★★★★</option>
                    <option value="4">★★★★☆</option>
                    <option value="3">★★★☆☆</option>
                    <option value="2">★★☆☆☆</option>
                    <option value="1">★☆☆☆☆</option>
                </select>
            </div>
            <div class="mb-3">
                <textarea id="comment" class="form-control" placeholder="Tulis ulasan Anda" required></textarea>
            </div>
            <button class="btn btn-success mb-4" onclick="addReview()">Kirim Ulasan</button>

            <h4>Daftar Buku yang Akan Dibaca</h4>
            <div class="mb-3">
                <input type="text" id="bookTitle" class="form-control" placeholder="Masukkan judul buku">
            </div>
            <button class="btn btn-primary mb-3" onclick="saveBook()">Simpan Buku</button>
            <ul id="savedBooks" class="list-group"></ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
