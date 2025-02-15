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
                <li><a href="{{ route('kategori.index') }}"><span class="material-symbols-outlined">category</span> Kategori</a></li>
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
