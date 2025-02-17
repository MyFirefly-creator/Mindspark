<div class="sidebar">
    <div class="text-center mb-4">
        <img src="{{ Auth::user()->foto_profil ? asset('profil/' . Auth::user()->foto_profil) : asset('profil/avatar.png') }}"
            class="rounded-circle"
            style="width: 60px; height: 60px; object-fit: cover; margin: auto;">
        <p class="fw-bold mt-2">
            {{ Auth::check() ? Auth::user()->nama : 'Guest' }}
        </p>
    </div>

    <nav>
        <ul class="list-unstyled">
            <li><a href="#"><span class="material-symbols-outlined">home</span> Beranda</a></li>

            @if (Auth::check())
                <!-- Dropdown Kategori -->
                <li class="dropdown">
                    <a href="#" onclick="toggleDropdown(event, 'kategoriDropdown')">
                        <span class="material-symbols-outlined">category</span> Kategori
                        <span class="material-symbols-outlined dropdown-icon">expand_more</span>
                    </a>
                    <ul id="kategoriDropdown" class="dropdown-content">
                        <li><a href="#">Kategori 1</a></li>
                        <li><a href="#">Kategori 2</a></li>
                        <li><a href="#">Kategori 3</a></li>
                        <li><a href="#">Kategori 4</a></li>
                    </ul>
                </li>

                <li><a href="{{ route('dashboard.index') }}"><span class="material-symbols-outlined">dashboard</span> Dashboard</a></li>
                <li><a href="#"><span class="material-symbols-outlined">settings</span> Settings</a></li>
                <li><a href="{{ route('favorit.index') }}"><span class="material-symbols-outlined">favorite</span> Favorit</a></li>

                @if(Auth::user()->role === 'admin')
                    <li><a class="text-danger" href="{{ route('ban.index') }}">Admin</a></li>
                @endif

                <li><a href="{{ route('logout') }}" class="text-danger">Logout</a></li>
            @else
                <li class="mt-3 text-center">
                    <a href="{{ route('loginForm') }}" class="btn btn-outline-primary me-2">Login</a>
                    <a href="{{ route('registerForm') }}" class="btn btn-primary">Register</a>
                </li>
            @endif
        </ul>
    </nav>
</div>

<!-- Tambahkan CSS -->
<style>
    .dropdown {
        position: relative;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        left: 0;
        background: white;
        list-style: none;
        padding: 5px 0;
        margin-top: 5px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        width: 150px;
    }

    .dropdown-content li {
        padding: 10px;
        transition: 0.3s;
    }

    .dropdown-content li a {
        text-decoration: none;
        color: #333;
        display: block;
    }

    .dropdown-content li:hover {
        background: #f0f0f0;
    }

    .dropdown-icon {
        float: right;
        transition: transform 0.3s;
    }

    .dropdown.open .dropdown-icon {
        transform: rotate(180deg);
    }
</style>

<!-- Tambahkan JavaScript -->
<script>
    function toggleDropdown(event, id) {
        event.preventDefault();
        let dropdown = document.getElementById(id);
        let parent = dropdown.parentElement;

        if (dropdown.style.display === "block") {
            dropdown.style.display = "none";
            parent.classList.remove("open");
        } else {
            dropdown.style.display = "block";
            parent.classList.add("open");
        }
    }
</script>
