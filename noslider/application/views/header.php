<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Mata</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #ffffff;
        }
        
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 30px;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 2.5rem;
        }
        
        nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 17px;
            font-weight: 500;
        }

        nav ul li a:hover {
            color: #16b9c8;
        }
        
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2rem 5%;
            min-height: 80vh;
            position: relative;
        }
        
        .hero-content {
            max-width: 500px;
        }
        
        .hero-content h1 {
            color: #333;
            font-size: 32px;
            text-transform: uppercase;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 20px;
        }
        
        .hero-content p {
            color: #666;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        
        .booking-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #16b9c8;
            color: white;
            padding: 12px 24px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            border: none;
            cursor: pointer;
            width: 150px;
        }
        
        .booking-btn img {
            margin-right: 8px;
            width: 16px;
        }

        .hero-image {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .hero-image img {
            width: 700px;
            height: 700px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="asset/logo.png" alt="Logo Klinik Mata dr Sjarsu">
            
        </div>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Pelayanan</a></li>
                <li><a href="#">Dokter</a></li>
                <li><a href="#">Jadwal Dokter</a></li>
                <li><a href="#">Berita Terbaru</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="hero">
        <div class="hero-content">
            <h1>Fokus Utama Untuk Kesehatan Mata Anda</h1>
            <p>Jadwalkan waktu anda untuk periksa maupun konsultasi pada klinik kami, dengan klik booking dibawah ini</p>
            <button class="booking-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
                 Booking
            </button>
        </div>
        
        <div class="hero-image">
            <!-- Menggunakan satu gambar untuk seluruh konten kanan -->
            <img src="asset/hero.png" alt="Dokter dengan keterangan klinik" style="max-width: 500px; height: auto;">
        </div>
    </main>
</body>
</html>