<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- slider -->
      <!-- Default stylesheets-->
    <!-- <link href=".../../../assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Template specific stylesheets-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> -->
    <!-- <link href=".../../../assets/lib/animate.css/animate.css" rel="stylesheet"> -->
    <!-- <link href=".../../../assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- <link href=".../../../assets/lib/et-line-font/et-line-font.css" rel="stylesheet"> -->
    <link href=".../../../assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <!-- <link href=".../../../assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet"> -->
    <!-- <link href=".../../../assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet"> -->
    <!-- <link href=".../../../assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet"> -->
    <!-- <link href=".../../../assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet"> -->
    <!-- Main stylesheet and color file-->
    <link href=".../../../assets/css/style.css" rel="stylesheet">
    <!-- <link href=".../../../assets/css/dekstopslider.css" rel="stylesheet">
    <link href=".../../../asset/css/forrm.css" rel="stylesheet"> -->
    <!-- <link id="color-scheme" href=".../../../assets/css/colors/default.css" rel="stylesheet"> -->

    <!-- form -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> -->
    <link rel="stylesheet" href="<?= base_url('asset/css/form.css') ?>">

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

        .service-card {
            position: relative;
            background: linear-gradient(to bottom, rgba(0, 170, 181, 0.05), rgba(255, 255, 255, 0.8));
            border: 2px solid #00AAB5;
            border-radius: 10px;
            padding: 20px 10px 10px;
            margin-top: 70px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: 100%; /* Memastikan tinggi yang sama */
        }

        /* Container untuk mengatur ukuran yang sama */
        .card-container {
            border: 1px solid black;
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
            padding-left: 40px;
            padding-right: 40px;
            margin-bottom: 30px;
        }

        /* Garis lengkung di bawah icon */
        .icon-container {
            position: absolute;
            top: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 50px;
            border: 2px solid #00AAB5;
            border-top: none;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            background-color: white;
            z-index: 0; /* Pastikan garis ada di bawah */
        }

        /* Background bulat icon */
        .service-icon {
            position: absolute;
            top: -40px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 80px;
            background-color: #00AAB5;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 32px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1; /* Pastikan icon berada di atas garis */
        }

        .service-icon i {
            font-size: 32px;
        }
        
        .service-title {
            color: #00AAB5;
            font-weight: bold;
            font-size: 22px;
            margin-top: 30px;
            margin-bottom: 10px;
            height: 60px; /* Tinggi tetap untuk judul */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .service-description {
            color: #454545;
            flex-grow: 1; /* Mengisi ruang yang tersisa */
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .section-title-container {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        @media (max-width: 768px) {
            .service-card {
                margin-top: 30px;
                padding-top: 30px;
            }
            .card-container {
                padding-left: 10px;
                padding-right: 10px;
            }
            .service-title {
                height: 40px;
            }
        }

        .main-container {
            scroll-snap-type: y mandatory;
            overflow-y: scroll;
            height: 100vh;
        }
        .section-1 {
            scroll-snap-align: start;
        }
        .section-2 {
            scroll-snap-align: start;
        }
        .section-3 {
            scroll-snap-align: start;
        }

    </style>
</head>
<body id="header">
    <div class="main-container">
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
        <section class="home-section home-fade home-full-height section-1" id="home">
                <div class="hero-slider">
                    <ul class="slides">
                        <li class="bg-dark-30 bg-dark" style="background-image:url(assets/images/work-7.jpg);">
                            <div class="titan-caption">
                                <div class="caption-content">
                                    <div class="font-alt mb-30 titan-title-size-1">Hello & welcome</div>
                                    <div class="font-alt mb-40 titan-title-size-4">We are Titan</div><a
                                        class="section-scroll btn btn-border-w btn-round" href="#about">Booking</a>
                                </div>
                            </div>
                        </li>
                        <li class="bg-dark-30 bg-dark" style="background-image:url(assets/images/slide-1.png);">
                            <div class="titan-caption">
                                <div class="caption-content">
                                    <div class="font-alt mb-30 titan-title-size-2">Titan is creative multipurpose html
                                        template for<br />web developers who change the world
                                    </div><a class="btn btn-border-w btn-round" href="about">Booking</a>
                                </div>
                            </div>
                        </li>
                        <li class="bg-dark-30 bg-dark" style="background-image:url(assets/images/slide-2.png);">
                            <div class="titan-caption">
                                <div class="caption-content">
                                    <div class="font-alt mb-30 titan-title-size-1">We build brands that build business</div>
                                    <div class="font-alt mb-40 titan-title-size-3">We are Amazing</div><a
                                        class="section-scroll btn btn-border-w btn-round" href="#about">Booking</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
        </section>
        <section class="section-2">
            <div class="container mt-5">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a id="privat" class="nav-link active text-white" onclick="showPrivatForm()">Privat</a>
                    </li>
                    <li class="nav-item">
                        <a id="bpjs" class="nav-link active text-white" onclick="showBPJSForm()">BPJS</a>
                    </li>
                </ul>
            </div>
        
            <div class="container px-3">
                <!-- Form BPJS -->
                <div id="bpjsForm" class="card1 card-custom p-4">
                    <h5 class="text-white">Pesan Jadwal Pemeriksaan - BPJS</h5>
                        <form id="bpjsForm" class="needs-validation" novalidate onsubmit="return validateForm(event)">
                        <div class="mb-2">
                            <label for="nik" class="form-label">NIK</label>
                            <small class="form-example">Eg. (3576014403910003)</small>
                            <input type="text" id="nik" class="form-control rounded-2" pattern="\d{16}" required>
                            <div class="invalid-feedback">Masukkan NIK 16 digit.</div>
                        </div>
        
                        <div class="mb-2">
                            <label for="rujukan" class="form-label">Nomor Surat Rujukan / Kontrol</label>
                            <small class="form-example">Eg. (021750052025K0002867)</small>
                            <input type="text" id="rujukan" class="form-control rounded-2" pattern="[A-Z0-9]{20,25}" required>
                            <div class="invalid-feedback">Masukkan Nomor Rujukan yang valid.</div>
                        </div>
        
                        <button type="submit" class="btn1 btn-custom w-50 mt-3">Cek</button>
                    </form>
        
                        <div id="extraForm" class="d-none mt-3">
                        <div class="p-3 bg-light border rounded text-dark">
                            <p><strong>Nama :</strong> John Doe</p>
                            <p><strong>NIK :</strong> 3576014403910003</p>
                            <p><strong>No. HP :</strong> 09754282839</p>
                        </div>
                        <div class="mt-2">
                            <label for="tanggal" class="form-label text-white">Pilih Tanggal</label>
                            <input type="date" id="tanggal" class="form-control rounded-2">
                        </div>
                        <div class="mt-2">
                            <label for="sesi" class="form-label text-white">Pilih Sesi</label>
                            <select id="sesi" class="form-select">
                                <option>Pagi</option>
                                <option>Siang</option>
                                <option>Sore</option>
                            </select>
                        </div>
                        <small class="text-white d-block mt-2">*Batas maksimum pemesanan jadwal 3 bulan ke depan</small>
                        <small class="text-white d-block">*Pilihan tanggal akan berwarna merah jika kuota penuh</small>
                        <button type="submit" class="btn1 btn-custom w-100 mt-3">Kirim</button>
                    </div>            
                </div>
        
                <!-- Form Privat -->
                <div id="privatForm" class="card1 card-custom-privat p-4 d-none">
                    <h5 class="text-white">Pesan Jadwal Pemeriksaan - Privat</h5>
                    <form id="privatForm" class="needs-validation" novalidate onsubmit="return validateForm(event)">
                        <div class="mb-2">
                            <label for="nik" class="form-label">NIK</label>
                            <small class="form-example">Eg. (3576014403910003)</small>
                            <input type="text" id="nik" class="form-control rounded-2" pattern="\d{16}" required>
                            <div class="invalid-feedback">Masukkan NIK 16 digit.</div>
                        </div>
        
                        <div class="mb-2">
                            <label for="rujukan" class="form-label">Nomor Surat Rujukan / Kontrol</label>
                            <small class="form-example">Eg. (021750052025K0002867)</small>
                            <input type="text" id="rujukan" class="form-control rounded-2" pattern="[A-Z0-9]{20,25}" required>
                            <div class="invalid-feedback">Masukkan Nomor Rujukan yang valid.</div>
                        </div>
        
                        <button type="submit" class="btn1 btn-custom-privat w-50 mt-3">Cek</button>
                    </form>
        
                    <div id="extraFormPrivat" class="d-none mt-3">
                        <div class="p-3 bg-light border rounded text-dark">
                            <p><strong>Nama :</strong> Jane Doe</p>
                            <p><strong>NIK :</strong> 3576014403910003</p>
                            <p><strong>No. HP :</strong> 081234567890</p>
                        </div>
                        <div class="mt-2">
                            <label for="tanggalPrivat" class="form-label text-white">Pilih Tanggal</label>
                            <input type="date" id="tanggalPrivat" class="form-control rounded-2">
                        </div>
                        <div class="mt-2">
                            <label for="sesiPrivat" class="form-label text-white">Pilih Sesi</label>
                            <select id="sesiPrivat" class="form-select">
                                <option>Pagi</option>
                                <option>Siang</option>
                                <option>Sore</option>
                            </select>
                        </div>
                        <small class="text-white d-block mt-2">*Batas maksimum pemesanan jadwal 3 bulan ke depan</small>
                        <small class="text-white d-block">*Pilihan tanggal akan berwarna merah jika kuota penuh</small>
                        <button type="submit" class="btn1 btn-custom-privat w-100 mt-3">Kirim</button>
                    </div>            
                </div>
            </div>
        </section>

        <section class="section-3">
            <div class="section-title-container">
                <h2 class="text-center text-secondary mt-5">Layanan Kami</h2>
            </div>
            <div class="row py-5" style="border: 1px solid red;">
                <div class="row">
                    <!-- Service Card 1: Skrining & Check Up -->
                    <div class="col-md-6 col-sm-6">
                        <div class="card-container">
                            <div class="service-card">
                                <div class="icon-container"></div>
                                <div class="service-icon">
                                    <i class="fas fa-clipboard-check"></i>
                                </div>
                                <h3 class="service-title">Skrining & Check Up</h3>
                                <p class="service-description">Kami turut berkontribusi dalam pencegahan gangguan kesehatan mata.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Service Card 2: Medical Check Up -->
                    <div class="col-md-6 col-sm-6">
                        <div class="card-container">
                            <div class="service-card">
                                <div class="icon-container"></div>
                                <div class="service-icon">
                                    <i class="fas fa-stethoscope"></i>
                                </div>
                                <h3 class="service-title">Medical Check Up</h3>
                                <p class="service-description">Pemeriksaan kesehatan menyeluruh untuk mendeteksi masalah kesehatan.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Service Card 3: Konsultasi Dokter -->
                    <div class="col-md-6 col-sm-6">
                        <div class="card-container">
                            <div class="service-card">
                                <div class="icon-container"></div>
                                <div class="service-icon">
                                    <i class="fas fa-user-md"></i>
                                </div>
                                <h3 class="service-title">Konsultasi Dokter</h3>
                                <p class="service-description">Konsultasi langsung dengan dokter spesialis untuk penanganan optimal.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Service Card 4: Perawatan Mata -->
                    <div class="col-md-6 col-sm-6">
                        <div class="card-container">
                            <div class="service-card">
                                <div class="icon-container"></div>
                                <div class="service-icon">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <h3 class="service-title">Perawatan Mata</h3>
                                <p class="service-description">Perawatan khusus untuk menjaga kesehatan mata Anda.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Service Card 5: Laboratorium -->
                    <div class="col-md-6 col-sm-6">
                        <div class="card-container">
                            <div class="service-card">
                                <div class="icon-container"></div>
                                <div class="service-icon">
                                    <i class="fas fa-flask"></i>
                                </div>
                                <h3 class="service-title">Laboratorium</h3>
                                <p class="service-description">Layanan pemeriksaan laboratorium dengan hasil yang akurat.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Service Card 6: Farmasi -->
                    <div class="col-md-6 col-sm-6">
                        <div class="card-container">
                            <div class="service-card">
                                <div class="icon-container"></div>
                                <div class="service-icon">
                                    <i class="fas fa-pills"></i>
                                </div>
                                <h3 class="service-title">Farmasi</h3>
                                <p class="service-description">Layanan obat-obatan dan farmasi untuk kebutuhan pengobatan Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

    <script src=".../../../assets/lib/jquery/dist/jquery.js"></script>
    <!-- <script src=".../../../assets/lib/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <script src=".../../../assets/lib/wow/dist/wow.js"></script>
    <!-- <script src=".../../../assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script> -->
    <!-- <script src=".../../../assets/lib/isotope/dist/isotope.pkgd.js"></script> -->
    <!-- <script src=".../../../assets/lib/imagesloaded/imagesloaded.pkgd.js"></script> -->
    <script src=".../../../assets/lib/flexslider/jquery.flexslider.js"></script>
    <!-- <script src=".../../../assets/lib/owl.carousel/dist/owl.carousel.min.js"></script> -->
    <!-- <script src=".../../../assets/lib/smoothscroll.js"></script> -->
    <!-- <script src=".../../../assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script> -->
    <!-- <script src=".../../../assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script> -->
    <!-- <script src=".../../../assets/js/plugins.js"></script> -->
    <script src=".../../../assets/js/main.js"></script>
</body>
</html>