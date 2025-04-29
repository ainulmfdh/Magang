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
        #menu-navbar {
            gap: 15px;
            justify-content: end;
            width: 100%;
        }

        #menu-navbar p {
            margin: 0;
            font-weight: 500;
        }
    </style>
</head>
<body id="header">
    <div class="w-100 bg-white position-sticky top-0 d-flex align-items-center" style="height: 80px; padding-left: 50px; padding-right: 50px; z-index: 30;">
        <div class="d-flex align-items-center">
            <img id="logomata" src="<?= base_url('asset/image_2.png');?>">
            <img src="<?= base_url('asset/image_4.png');?>">
        </div>
        <div id="menu-navbar" class="d-flex flex-row align-items-center">
            <p class="menu-border">Beranda</p>
            <p class="menu-border">Pelayanan</p>
            <p class="menu-border">Dokter</p>
            <p class="menu-border">Jadwal Dokter</p>
            <p class="menu-border">Berita Terbaru</p>
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

        $(document).ready(() => {
            detectScreen();
            $(window).on('resize', detectScreen);
        })

        function detectScreen() {
            var width = $(window).width();
            
            if (width < 768) {
                window.location.href = '<?= base_url('home_mobile') ?>';
                console.log('mobile');
            } 
        }
    </script>
</body>
</html>