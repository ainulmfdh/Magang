<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            min-height: 100vh;
        }
        
        #hamburger-menu {
            width: 70vw;
            height: 100vh;
            background-color: #00AAB5;
            position: fixed;
            top: 0;
            right: -1000px;
            padding-left: 40px;
            color: white;
            z-index: 99;
            transition: all 0.3s linear;
        }
        .menu-border {
            border-bottom: 1px solid white;
            padding-bottom: 20px;
        }
    </style>
</head>
<body id="header">
    <div class="w-100 bg-white position-fixed" style="height: 80px; z-index: 30;">
        <a href="<?php echo base_url('Mobile') ?>">
            <div class="d-flex align-items-center h-100">
                <img id="logomata" class="position-fixed" style="top: 25px; left: 20px; width: 57px; height: 29px;" src="<?= base_url('asset/image_2.png');?>">
                <img style="margin-left: 85px;" src="<?= base_url('asset/image_4.png');?>">
            </div>
        </a>
        <div id="hamburger-menu-toggle" class="position-fixed" style="top: 28px; right: 20px; padding-right: 20px;">
            <img src="<?= base_url('asset/material-symbols_menu.png');?>">   
        </div>
    </div>
    
    <div id="hamburger-menu">
        <div class="d-flex justify-content-end align-items-center mt-4 pe-4">
            <i id="close-hamburger-menu" class="fa-solid fa-x"></i>
        </div>
        <div class="d-flex flex-column gap-4 mt-5 px-2 pe-4">
            <a href="<?php echo base_url('Mobile') ?>" style="text-decoration: none; color: white;"><p class="menu-border">Beranda</p></a>
            <a href="<?php echo base_url('Mobile/layanan') ?>" style="text-decoration: none; color: white;"><p class="menu-border">Layanan</p></a>
            <a href="<?php echo base_url('Mobile/dokter_page') ?>" style="text-decoration: none; color: white;"><p class="menu-border">Dokter</p></a>
            <a href="<?php echo base_url('Mobile/jadwal_dokter') ?>" style="text-decoration: none; color: white;"><p class="menu-border">Jadwal Dokter</p></a>
            <a href="<?php echo base_url('News') ?>" style="text-decoration: none; color: white;"><p class="menu-border">Berita</p></a>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('logomata').addEventListener('click', function (event) {
            event.preventDefault(); // Mencegah perilaku default (jika tombol dalam form)
            document.getElementById('header').scrollIntoView({ behavior: 'smooth' });
        });

        const hamburgerMenuToggle = document.getElementById('hamburger-menu-toggle');
        const hamburgerMenu = document.getElementById('hamburger-menu');
        const closeHamburgerMenu = document.getElementById('close-hamburger-menu');
        let hamburgerMenuIsOpen = false;

        hamburgerMenuToggle.addEventListener('click', () => {
            hamburgerMenuIsOpen = !hamburgerMenuIsOpen;
            if (hamburgerMenuIsOpen) {
                hamburgerMenu.style.right = '0';
            } else {
                hamburgerMenu.style.right = '-1000px';
            }
        });

        closeHamburgerMenu.addEventListener('click', () => {
            hamburgerMenuIsOpen = false;
            hamburgerMenu.style.right = '-1000px';
        });

        document.addEventListener('click', (event) => {
            if (hamburgerMenuIsOpen && !hamburgerMenu.contains(event.target) && !hamburgerMenuToggle.contains(event.target)) {
                hamburgerMenuIsOpen = false;
                hamburgerMenu.style.right = '-1000px';
            }
        });

        // $(document).ready(() => {
        //     detectScreen();
        //     $(window).on('resize', detectScreen);
        // })

        // function detectScreen() {
        //     var width = $(window).width();
            
        //     if (width >= 768) {
        //         window.location.href = '<?= base_url('homedekstop') ?>';
        //         console.log('mobile');
        //     } 
        // }
    </script>
</body>
</html>