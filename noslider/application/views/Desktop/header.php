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
        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins';
        } */
        
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
        
        .nav ul {
            display: flex;
            list-style: none;
        }
        
        .nav ul li {
            margin-left: 2.5rem;
        }
        
        .nav ul li a {
            text-decoration: none;
            color: #2D2D2D;
            font-size: 17px;
            font-weight: 500;
        }

        .nav ul li a:hover {
            color: #16b9c8;
        }

        /* Efek garis bawah untuk menu aktif dan hover */
        .nav ul li a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 0;
            height: 2px;
            background-color: #00aaff; /* Warna garis bawah */
            transition: width 0.3s ease;
        }

        .nav ul li a:hover,
        .nav ul li.active a {
            color: #00aaff; /* Warna teks saat hover atau aktif */
        }
        
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="<?= base_url('asset/images/logo.png'); ?>" alt="Logo Klinik Mata dr Sjarsu">
        </div>
            <nav class="nav">
            <ul>
                <li class="<?= $this->uri->segment(1) == 'desktop' ? 'active' : ''; ?>">
                    <a href="<?= base_url('desktop'); ?>">Beranda</a>
                </li>
                <li class="<?= $this->uri->segment(1) == 'skrining' ? 'active' : ''; ?>">
                    <a href="<?= base_url('skrining'); ?>">Pelayanan</a>
                </li>
                <li class="<?= $this->uri->segment(1) == 'doctor' ? 'active' : ''; ?>">
                    <a href="<?= base_url('doctor'); ?>">Dokter</a>
                </li>
                <li class="<?= $this->uri->segment(1) == 'jadwaldokter' ? 'active' : ''; ?>">
                    <a href="<?= base_url('jadwaldokter'); ?>">Jadwal Dokter</a>
                </li>
                <li class="<?= $this->uri->segment(1) == 'news' ? 'active' : ''; ?>">
                    <a href="<?= base_url('news'); ?>">Berita Terbaru</a>
                </li>
            </ul>
        </nav>
    </header>

<!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
