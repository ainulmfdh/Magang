<?php
// header.php - Contains the hero section with booking button
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Mata</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins';
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
        
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="<?= base_url('asset/logo.png'); ?>" alt="Logo Klinik Mata dr Sjarsu">
        </div>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Pelayanan</a></li>
                <li><a href="<?= base_url('Desktop/doctor') ; ?>">Dokter</a></li>
                <li><a href="#">Jadwal Dokter</a></li>
                <li><a href="#">Berita Terbaru</a></li>
            </ul>
        </nav>
    </header>

<!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>