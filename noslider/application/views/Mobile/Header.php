<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Mata dr. Sjamsu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f8f8;
        }
        
        .container {
            max-width: 480px;
            margin: 0 auto;
            background-color: white;
            min-height: 100vh;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            border-bottom: 1px solid #f1f1f1;
            position: relative;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }
        
        .logo-text {
            font-size: 18px;
            font-weight: 500;
            color: #505050;
        }
        
        .menu-btn {
            color: #00b0b9;
            font-size: 24px;
            cursor: pointer;
            z-index: 100;
        }
        
        .nav-menu {
            position: absolute;
            top: 60px;
            right: 0;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 220px;
            border-radius: 5px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
            z-index: 99;
        }
        
        .nav-menu.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .nav-menu ul {
            list-style: none;
        }
        
        .nav-menu li {
            border-bottom: 1px solid #f1f1f1;
        }
        
        .nav-menu li:last-child {
            border-bottom: none;
        }
        
        .nav-menu a {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            color: #333;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        
        .nav-menu a:hover {
            background-color: #f8f8f8;
            color: #00b0b9;
        }
        
        .nav-menu .menu-icon {
            margin-right: 10px;
            color: #00b0b9;
        }
        
        /* .hero {
            position: relative;
            height: 300px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        } */
        
        /* .hero-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #00b0b9;
            border-radius: 0 0 50% 50%;
            transform: scale(1.5, 1);
            top: -50px;
            z-index: 1;
        } */
        
        .doctor-image {
            position: relative;
            z-index: 2;
            height: 80%;
            bottom: -20px;
        }
        
        .stats {
            position: absolute;
            top: 70px;
            right: 20px;
            background-color: white;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            z-index: 3;
            display: flex;
            align-items: center;
        }
        
        .stats-number {
            font-size: 20px;
            font-weight: 700;
            color: #333;
        }
        
        .stats-text {
            font-size: 12px;
            color: #777;
        }
        
        .heart-icon {
            background-color: #00b0b9;
            color: white;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }
        
        .patient-icons {
            display: flex;
            margin-top: 5px;
        }
        
        .patient-icons img {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin-right: -5px;
            border: 1px solid white;
        }
        
        .booking-widget {
            position: absolute;
            bottom: 40px;
            left: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px 15px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            z-index: 3;
        }
        
        .calendar-icon {
            background-color: #6a4caf;
            color: white;
            width: 25px;
            height: 25px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 5px;
        }
        
        .booking-title {
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 2px;
        }
        
        .booking-subtitle {
            font-size: 12px;
            color: #777;
        }
        
        .content {
            padding: 20px;
        }
        
        .main-title {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            margin-bottom: 5px;
            text-transform: uppercase;
        }
        
        .description {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .booking-btn {
            background-color: #00b0b9;
            color: white;
            border: none;
            gap: 8px;
            border-radius: 5px;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .booking-btn-icon {
            margin-right: 10px;
        }
        
        .brush-stroke {
            position: absolute;
            bottom: 80px;
            left: 0;
            width: 100%;
            z-index: 1;
        }

        .logo {
            display: flex;
        }
        
        .logo img {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="asset/logo.png" alt="Logo Klinik Mata dr Sjamsu">
            </div>
            <div class="menu-btn" id="menuBtn">&#9776;</div>
            <nav class="nav-menu" id="navMenu">
                <ul>
                    <li>
                        <a href="#">
                            <span class="menu-icon">&#128100;</span>
                            Dokter
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="menu-icon">&#128240;</span>
                            Berita
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="menu-icon">&#128197;</span>
                            Jadwal Dokter
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="menu-icon">&#127973;</span>
                            Pelayanan
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        
        <div class="hero">
            <div class="hero-bg">
                <img src="asset/hero-img.png" alt="Dokter dengan keterangan klinik" style="max-width: 380px; justify-content: center;">
            </div>
                
        
        <div class="content">
            <h1 class="main-title">Fokus Utama<br>Untuk Kesehatan<br>Mata Anda</h1>
            <p class="description">Jadwalkan waktu anda untuk periksa maupun konsultasi pada klinik kami, dengan klik booking dibawah ini</p>
            <button class="booking-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
                Booking
            </button>
        </div>
    </div>
    <script>
        // Menu toggle functionality
        const menuBtn = document.getElementById('menuBtn');
        const navMenu = document.getElementById('navMenu');
        
        menuBtn.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!menuBtn.contains(event.target) && !navMenu.contains(event.target)) {
                navMenu.classList.remove('active');
            }
        });
    </script>
</body>
</html>