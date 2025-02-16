<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLONE</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gotham:wght@400;500;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Gotham', sans-serif;
        }

        :root {
            --spotify-green: #1DB954;
            --spotify-black: #191414;
            --spotify-white: #FFFFFF;
            --spotify-grey: #282828;
        }

        body {
            background-color: var(--spotify-black);
            color: var(--spotify-white);
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-container {
            display: flex;
            flex: 1;
            overflow: hidden;
        }

        .sidebar {
            width: 240px;
            background-color: var(--spotify-black);
            padding: 24px 12px;
            display: flex;
            flex-direction: column;
        }

        .logo {
            padding: 0 12px;
            margin-bottom: 24px;
        }

        .logo img {
            width: 130px;
        }

        .nav-links {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .nav-links a {
            color: #b3b3b3;
            text-decoration: none;
            padding: 12px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            gap: 16px;
            font-weight: 500;
            transition: color 0.2s;
        }

        .nav-links a:hover {
            color: var(--spotify-white);
        }

        .nav-links a.active {
            background-color: var(--spotify-grey);
            color: var(--spotify-white);
        }

        .main-content {
            flex: 1;
            background: linear-gradient(to bottom, #535353, var(--spotify-black));
            padding: 24px;
            overflow-y: auto;
        }

        .playlists-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 24px;
            margin-top: 24px;
        }

        .playlist-card {
            background-color: var(--spotify-grey);
            padding: 16px;
            border-radius: 8px;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .playlist-card:hover {
            background-color: #3E3E3E;
        }

        .playlist-card img {
            width: 100%;
            aspect-ratio: 1;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 16px;
        }

        .playlist-card h3 {
            font-size: 16px;
            margin-bottom: 8px;
        }

        .playlist-card p {
            color: #b3b3b3;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <aside class="sidebar">
            <div class="logo">
                <img src="https://www.favorit.it/wp-content/uploads/2019/01/Logo-Favorit-PNG.png" alt="Logo Favorit">
            </div>
            <nav class="nav-links">
                <a href="{{ route('dashboard.index') }}" class="active">Kembali</a>
            </nav>
        </aside>
        <main class="main-content">
            <h1>Favorit</h1>
            <div class="playlists-grid">
                <div class="playlist-card">
                    <img src="https://image-cdn-ak.spotifycdn.com/image/ab67706c0000da84849cff93133f27d8c1141da3" alt="Playlist">
                    <h3>BUKU 1</h3>
                    <p>Tu mix semanal de música nueva</p>
                </div>
                <div class="playlist-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDtX_eVaWBk3AA5i1oUoH9H29IFP7XXuBX8g&s" alt="Playlist">
                    <h3>BUKU 2</h3>
                    <p>Artista 1, Artista 2 y más</p>
                </div>
                <div class="playlist-card">
                    <img src="https://i.scdn.co/image/ab67706f0000000275400322be4ca506707d63e1" alt="Playlist">
                    <h3>BUKU 3</h3>
                    <p>Lo más escuchado en España</p>
                </div>
                <div class="playlist-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5iqCqpandwMvpDplQ02MBJRg6IdU5D54Ocw&s" alt="Playlist">
                    <h3>BUKU 4</h3>
                    <p>Los temas más hot del mundo</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
