<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- slider -->
    <link href=".../../../assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href=".../../../assets/css/style.css" rel="stylesheet">

    <!-- form -->
    <link rel="stylesheet" href="<?= base_url('asset/css/form.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- layanan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- dokter dan berita -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <title>Document</title>
    <style>
        html, body {
            background-image: url('<?= base_url ('asset/PORTOFOLIO.png');?>');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            overflow: hidden;
		}

        #container {
            height: 100vh;
            overflow-y: scroll;
            scroll-snap-type: y mandatory;
        }

        #slider {
            scroll-snap-align: start;
        }
        #form {
            scroll-snap-align: start;
        }
        #layanan {
            scroll-snap-align: start;
        }
        #dokter {
            scroll-snap-align: start;
        }
        #berita {
            scroll-snap-align: start;
        }
        #footer {
            scroll-snap-align: start;
        }
        #slider {
            scroll-snap-align: start;
        }

        #menu-navbar {
            gap: 15px;
            justify-content: end;
            width: 100%;
        }

        #menu-navbar p {
            margin: 0;
            font-weight: 500;
        }

        /* layanan */
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
            height: 100%;
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

        /* dokter dan berita */
        .carousel-item img {
            border-radius: 10px;
            object-fit: cover;
        }
        .carousel-inner {
            text-align: center;
        }
        .card-row{
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 40px;
        }
        .btn-jadwal{
            margin-top: 20px;
            gap: 5px;
            padding: 10px 15px;
            font-weight: 500;
            color: white;
            background: rgba(0, 170, 181, 1);
            border: none;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
            display: flex;
            justify-content: flex-end;
        }
        .btn-jadwal i{
            margin-right: 5px;
        }
        .btn-custom {
            background-color: #17a2b8;
            color: white;
            border-radius: 20px;
            padding: 10px 20px;
        }
        .btn-custom:hover {
            background-color: #138496;
        }
        .card-dokter{
            backdrop-filter: blur(10px);
            display: flex;
            flex-direction: column;
            align-items: start;
            padding: 20px 30px;
            border-radius: 10px;
            width: 350px;
            height: 600px;
            margin: 0 10px;
        }
        .card-dokter > .desc-dokter{
            display: flex;
            flex-direction: column;
            align-items: start;
            text-align: left;
        }
        .card-dokter > button{
            align-self: center;
        }
        .card-dokter > img {
            border-radius: 20px;
            height: 400px !important;
            width: 100%;
            object-fit: cover;
            display: block;
        }
        .custom-carousel-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background-color: rgba(0, 170, 181, 1);
            border-radius: 50%;
            border: none;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        
        .custom-carousel-prev {
            left: 10px;
        }
        
        .custom-carousel-next {
            right: 10px;
        }
        
        .custom-carousel-nav i {
            font-size: 18px;
        }
        .carousel {
            padding-bottom: 50px;
            position: relative;
            overflow: hidden;
        }
        
        .carousel-indicators {
            position: absolute !important;
            bottom: 0 !important;
            margin-bottom: 0 !important;
            z-index: 5;
        }
        
        .carousel-indicators button {
            width: 10px !important;
            height: 10px !important;
            border-radius: 50% !important;
            background-color: #ccc !important;
            margin: 0px 5px !important;
        }
        
        .carousel-indicators .active {
            background-color: rgba(0, 170, 181, 1) !important;
        }
        .card-berita{
            backdrop-filter: blur(25px);
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin: 20px;
            align-items: start;
            padding: 20px 30px;
            border-radius: 10px;
            text-align: left;
        }
        .card-berita > button{
            background-color: white;
            align-self: center;
            border: 1px solid rgba(0, 170, 181, 1);
            border-radius: 10px;
            width: 300px;
            text-align: center;
            color: rgba(0, 170, 181, 1);
        }
        .card-berita > img{
            border-radius: 20px;
            height: 333px !important;
            width: 100%;
            object-fit: cover;
            display: block;
        }
        #dokter{
            margin-top: 120px;
        }
        .container-berita{
            margin-top: 80px;
        }
        #text-berita{
            color: rgba(0, 170, 181, 1);
        }
        #text-dokter{
            color: rgba(0, 170, 181, 1);
        }
        /* Make sure cards stay side by side */
        .cards-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: nowrap;
            width: 100%;
        }
        
        /* For doctor carousel specific */
        #doctorCarousel .carousel-item.active {
            display: flex;
            justify-content: center;
        }
        
        @media (max-width: 1200px) {
            .card-dokter {
                width: 300px;
                padding: 15px 20px;
            }
        }
        
        @media (max-width: 992px) {
            .card-dokter {
                width: 280px;
            }
        }
		#owl-demo{
			display: flex;
			overflow-x: scroll;
			scrollbar-width: none; /* Firefox */
			-ms-overflow-style: none; /* IE & Edge */
            position: relative;
            padding: 0 40px;
		}
		#owl-demo::-webkit-scrollbar {
            display: none; /* Chrome, Safari, Opera */
        }
		#owl-demo .item{
		    padding: 30px 0px;
		    margin: 10px;
		    -webkit-border-radius: 3px;
		    -moz-border-radius: 3px;
		    border-radius: 3px;
		    text-align: center;
		}
        .owl-controls {
            position: relative;
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .owl-nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 20;
        }
        #prevDoctor {
            left: 0;
        }
        #nextDoctor {
            right: 0;
        }
        .owl-container {
            position: relative;
            width: 100%;
            padding: 0 20px;
            margin-top: 40px;
        }
        .owl-indicators {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            padding: 0;
            list-style: none;
        }
        .owl-indicators li {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #ccc;
            margin: 0 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .owl-indicators li.active {
            background-color: rgba(0, 170, 181, 1);
        }
        
        /* News Owl Carousel Styles */
        #news-owl-demo {
            display: flex;
            overflow-x: scroll;
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none; /* IE & Edge */
            position: relative;
            padding: 0 40px;
        }
        #news-owl-demo::-webkit-scrollbar {
            display: none; /* Chrome, Safari, Opera */
        }
        #news-owl-demo .item {
            padding: 30px 0px;
            margin: 10px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            text-align: center;
        }
        #prevNews {
            left: 0;
        }
        #nextNews {
            right: 0;
        }
        .news-indicators li.active {
            background-color: rgba(0, 170, 181, 1);
        }
		#news{
			margin-top: 100px;
		}

        /* footer */
        .footer-section {
            background-color: #00AAB5;
            color: white;
            padding: 40px 0;
        }
        
        .footer-title {
            font-size: 20px;
            margin-bottom: 20px;
        }
        
        .footer-text {
            font-size: 14px;
            line-height: 1.6;
        }
        
        .social-media-container {
            background-color: white;
            padding: 20px;
            border-radius: 4px;
            color: #333;
            margin-bottom: 20px;
        }
        
        .social-media-logo {
            width: 40px;
            height: 40px;
        }
        
        .social-media-title {
            color: #337ab7;
            font-size: 18px;
            margin-bottom: 5px;
        }
        
        .social-media-followers {
            font-size: 14px;
            color: #555;
        }
        
        .social-btn {
            padding: 8px 12px;
            border-radius: 4px;
            margin-right: 5px;
            font-size: 14px;
        }
        
        .follow-btn {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            color: #333;
        }
        
        .contact-form .form-control {
            margin-bottom: 15px;
            border-radius: 4px;
        }
        
        .contact-form textarea {
            resize: none;
            height: 120px;
        }
        
        .input-group {
            margin-bottom: 15px;
            width: 100%;
        }
        
        .input-group-text {
            color: #00AAB5; /* Updated to match Send button color */
        }
        
        .btn-send {
            background-color: #FFFFFF;
            color: #00AAB5;
            border: none;
            padding: 8px 20px;
            border-radius: 4px;
            width: 100%;
            text-align: center;
        }
        
        .whatsapp-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
        }
        
        .copyright {
            font-size: 12px;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <div id="container">
        <section id="header" class="w-100 bg-white position-sticky top-0 d-flex align-items-center" style="height: 80px; padding-left: 50px; padding-right: 50px; z-index: 30;">
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
        </section>

        <section id="slider" class="home-section home-fade home-full-height">
            <div class="hero-slider">
                <ul class="slides">
                    <li class="bg-dark-30 bg-dark" style="background-image:url(.../../../assets/images/slider-1.png);">
                        <div class="titan-caption">
                            <div class="caption-content">
                                <div class="font-alt mb-30 titan-title-size-1">Hello & welcome</div>
                                <div class="font-alt mb-40 titan-title-size-4">We are Titan</div>
                                <a class="section-scroll btn btn-border-w btn-round" href="#about">Booking</a>
                            </div>
                        </div>
                    </li>
                    <li class="bg-dark-30 bg-dark" style="background-image:url(.../../../assets/images/20220825_-_tv_datang_sesuai_jadwal_fix.png);">
                        <div class="titan-caption">
                            <div class="caption-content">
                                <div class="font-alt mb-30 titan-title-size-2">Titan is creative multipurpose html
                                    template for<br />web developers who change the world
                                </div><a class="btn btn-border-w btn-round" href="about">Booking</a>
                            </div>
                        </div>
                    </li>
                    <li class="bg-dark-30 bg-dark" style="background-image:url(.../../../assets/images/slider-1.png);">
                        <div class="titan-caption">
                            <div class="caption-content">
                                <div class="font-alt mb-30 titan-title-size-1">We build brands that build business</div>
                                <div class="font-alt mb-40 titan-title-size-3">We are Amazing</div>
                                <a class="section-scroll btn btn-border-w btn-round" href="#about">Booking</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section id="form" style="padding-top: 100px;">
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
        </section>

        <section id="layanan" style="padding-top: 100px;">
                <div class="section-title-container">
                    <h2 class="text-center text-secondary mt-5">Layanan Kami</h2>
                </div>
                <div class="container py-5">
                    <div class="row">
                        <!-- Service Card 1: Skrining & Check Up -->
                        <div class="col-md-4 col-sm-6">
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
                        <div class="col-md-4 col-sm-6">
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
                        <div class="col-md-4 col-sm-6">
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
                        <div class="col-md-4 col-sm-6">
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
                        <div class="col-md-4 col-sm-6">
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
                        <div class="col-md-4 col-sm-6">
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

        <section id="dokter">
                <div id="dokter" class="container text-center">	
                    <h2 class="fw-bold">Tim Dokter Kami</h2>
                    <div class="owl-container">
                        <div id="owl-demo" class="owl-carousel owl-theme">      
                            <div class="item">
                                <div class="card-dokter">
                                    <img src=".../../../asset/dokter.png" class="d-block w-100" alt="Dokter 1">
                                    <div class="desc-dokter">
                                        <h5 id="text-dokter" class="mt-2 fw-bold">dr. Ria Sandy Deneska, Sp.M(K)</h5>
                                        <p>Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                                    </div>
                                    <button class="btn-jadwal"><i class="fa-solid fa-book-open-reader"></i> Detail</button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-dokter">
                                    <img src=".../../../asset/dokter.png" class="d-block w-100" alt="Dokter 1">
                                    <div class="desc-dokter">
                                        <h5 id="text-dokter" class="mt-2 fw-bold">dr. Ria Sandy Deneska, Sp.M(K)</h5>
                                        <p>Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                                    </div>
                                    <button class="btn-jadwal"><i class="fa-solid fa-book-open-reader"></i> Detail</button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-dokter">
                                    <img src=".../../../asset/dokter.png" class="d-block w-100" alt="Dokter 1">
                                    <div class="desc-dokter">
                                        <h5 id="text-dokter" class="mt-2 fw-bold">dr. Ria Sandy Deneska, Sp.M(K)</h5>
                                        <p>Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                                    </div>
                                    <button class="btn-jadwal"><i class="fa-solid fa-book-open-reader"></i> Detail</button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-dokter">
                                    <img src=".../../../asset/sb-web.jpg" alt="Dokter 6">
                                    <div class="desc-dokter">
                                        <h5 id="text-dokter" class="mt-2 fw-bold">dr. Hadi Wijaya, Sp.M(K)</h5>
                                        <p>Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                                    </div>
                                    <button class="btn-jadwal"><i class="fa-solid fa-book-open-reader"></i> Detail</button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-dokter">
                                    <img src=".../../../asset/sb-web.jpg" alt="Dokter 6">
                                    <div class="desc-dokter">
                                        <h5 id="text-dokter" class="mt-2 fw-bold">dr. Hadi Wijaya, Sp.M(K)</h5>
                                        <p>Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                                    </div>
                                    <button class="btn-jadwal"><i class="fa-solid fa-book-open-reader"></i> Detail</button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-dokter">
                                    <img src=".../../../asset/sb-web.jpg" alt="Dokter 6">
                                    <div class="desc-dokter">
                                        <h5 id="text-dokter" class="mt-2 fw-bold">dr. Hadi Wijaya, Sp.M(K)</h5>
                                        <p>Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                                    </div>
                                    <button class="btn-jadwal"><i class="fa-solid fa-book-open-reader"></i> Detail</button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-dokter">
                                    <img src=".../../../asset/sb-web.jpg" alt="Dokter 6">
                                    <div class="desc-dokter">
                                        <h5 id="text-dokter" class="mt-2 fw-bold">dr. Hadi Wijaya, Sp.M(K)</h5>
                                        <p>Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                                    </div>
                                    <button class="btn-jadwal"><i class="fa-solid fa-book-open-reader"></i> Detail</button>
                                </div>
                            </div> 
                        </div>
                        <!-- Owl carousel navigation buttons -->
                        <button id="prevDoctor" class="custom-carousel-nav custom-carousel-prev owl-nav-btn">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button id="nextDoctor" class="custom-carousel-nav custom-carousel-next owl-nav-btn">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                        
                        <!-- Owl carousel indicators -->
                        <ul class="owl-indicators">
                            <li class="active" data-index="0"></li>
                            <li data-index="1"></li>
                            <li data-index="2"></li>
                        </ul>
                    </div>
                </div>
                
        </section>

        <section id="berita">
            <div id="news" class="container text-center">
                    <h2 class="fw-bold">Berita Terbaru</h2>
                    <div class="owl-container">
                        <div id="news-owl-demo" class="owl-carousel owl-theme">      
                            <div class="item">
                                <div class="card-berita">
                                    <img src=".../../../asset/berita.png" class="d-block w-100" alt="Berita 1">
                                    <div class="tanggal-berita">
                                        <i class="fa-regular fa-calendar"></i>
                                        <span>12 Oktober 2021</span>
                                    </div>
                                    <h5 id="text-berita" class="mt-2">BAKTI SOSIAL OPERASI KATARAK</h5>
                                    <p>Dalam upaya meningkatkan kualitas hidup masyarakat...</p>
                                    <button class="btn btn-custom">
                                        Baca Selengkapnya
                                    </button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-berita">
                                    <img src=".../../../asset/berita.png" class="d-block w-100" alt="Berita 2">
                                    <div class="tanggal-berita">
                                        <i class="fa-regular fa-calendar"></i>
                                        <span>12 Oktober 2021</span>
                                    </div>
                                    <h5 id="text-berita" class="mt-2">PELAYANAN KLINIK MATA</h5>
                                    <p>Program layanan kesehatan mata kini lebih mudah...</p>
                                    <button class="btn btn-custom">
                                        Baca Selengkapnya
                                    </button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-berita">
                                    <img src=".../../../asset/berita.png" class="d-block w-100" alt="Berita 3">
                                    <div class="tanggal-berita">
                                        <i class="fa-regular fa-calendar"></i>
                                        <span>20 Oktober 2021</span>
                                    </div>
                                    <h5 id="text-berita" class="mt-2">PEMERIKSAAN MATA GRATIS</h5>
                                    <p>Kami mengadakan pemeriksaan mata gratis untuk masyarakat...</p>
                                    <button class="btn btn-custom">
                                        Baca Selengkapnya
                                    </button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-berita">
                                    <img src=".../../../asset/berita.png" class="d-block w-100" alt="Berita 4">
                                    <div class="tanggal-berita">
                                        <i class="fa-regular fa-calendar"></i>
                                        <span>28 Oktober 2021</span>
                                    </div>
                                    <h5 id="text-berita" class="mt-2">SEMINAR KESEHATAN MATA</h5>
                                    <p>Ikuti seminar kesehatan mata untuk mengetahui lebih lanjut...</p>
                                    <button class="btn btn-custom">
                                        Baca Selengkapnya
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Owl carousel navigation buttons -->
                        <button id="prevNews" class="custom-carousel-nav custom-carousel-prev owl-nav-btn">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button id="nextNews" class="custom-carousel-nav custom-carousel-next owl-nav-btn">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                        
                        <!-- Owl carousel indicators -->
                        <ul class="owl-indicators news-indicators">
                            <li class="active" data-index="0"></li>
                            <li data-index="1"></li>
                        </ul>
                    </div>
                </div>
        </section>

        <footer id="footer" class="footer-section">
                <div class="container">
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-4 mb-4">
                            <h3 class="footer-title">Klinik Mata dr. Sjamsu</h3>
                            <p class="footer-text">
                                Kami adalah tim dokter mata yang profesional dan berkompetensi tinggi. Kami peduli atas kesehatan mata anda.
                            </p>
                            <p class="footer-text">
                                Dengan menggunakan alat-alat operasi modern beserta kelengkapan penunjang lain yang canggih dan mutakhir, kami siap menjaga kesehatan mata anda.
                            </p>
                        </div>
                        
                        <!-- Middle Column -->
                        <div class="col-md-4 mb-4">
                            <h3 class="footer-title">Social Media</h3>
                            <div class="social-media-container">
                                <div class="d-flex align-items-center mb-3">
                                    <div>
                                        <div class="social-media-title">Klinik Mata dr. Sjamsu</div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button class="social-btn follow-btn">
                                        <i class="fab fa-facebook-f me-1"></i> Follow Page
                                    </button>
                                    <button class="social-btn follow-btn">
                                        <i class="fab fa-instagram me-1"></i> Follow Page
                                    </button>
                                    <button class="social-btn follow-btn">
                                        <i class="fab fa-whatsapp me-1"></i> 
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Right Column -->
                        <div class="col-md-4">
                            <h3 class="footer-title">Contact Us</h3>
                            <form class="contact-form">
                                <div class="input-group">
                                    <span class="input-group-text bg-white">
                                        <i class="fas fa-user" style="color: #00AAB5;"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </div>
                                
                                <div class="input-group">
                                    <span class="input-group-text bg-white">
                                        <i class="fas fa-envelope" style="color: #00AAB5;"></i>
                                    </span>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                
                                <div class="input-group">
                                    <span class="input-group-text bg-white">
                                        <i class="fas fa-pen" style="color: #00AAB5;"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                
                                <textarea class="form-control" placeholder="Message" style="margin-bottom: 15px;"></textarea>
                                
                                <button type="submit" class="btn-send">Send</button>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Copyright -->
                    <div class="row">
                        <div class="col-12">
                            <p class="copyright">Copyright © 2025 CV SB</p>
                        </div>
                    </div>
                </div>
                
                <!-- WhatsApp Floating Button -->
                <a href="#" class="whatsapp-icon">
                    <i class="fab fa-whatsapp"></i>
                </a>
        </footer>
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

    // slider
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
    
    <!-- form -->
    <script>
        function validateForm(event) {
            event.preventDefault(); // Hindari form langsung submit

            let form = event.target; // Ambil form yang sedang di-submit
            if (!form.checkValidity()) {
                form.classList.add('was-validated'); // Tampilkan pesan error
                return false;
            }

            // Jika valid, tampilkan form tambahan berdasarkan form yang di-submit
            if (form.id === "bpjsForm") {
                document.getElementById('extraForm').classList.remove('d-none');
            } else if (form.id === "privatForm") {
                document.getElementById('extraFormPrivat').classList.remove('d-none');
            }
            return true;
        }

        function showPrivatForm() {
            document.getElementById('bpjsForm').classLbghist.add('d-none');
            document.getElementById('privatForm').classList.remove('d-none');
            document.getElementById('privat').classList.add('active');
            document.getElementById('bpjs').classList.remove('active');
        }

        function showBPJSForm() {
            document.getElementById('privatForm').classList.add('d-none');
            document.getElementById('bpjsForm').classList.remove('d-none');
            document.getElementById('bpjs').classList.add('active');
            document.getElementById('privat').classList.remove('active');
        }
    </script>

    <!-- layanan -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- dokter dan berita -->
    <script>
        // Single document ready function for all carousel functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Doctor carousel functionality
            const owlContainer = document.getElementById('owl-demo');
            const prevDoctorButton = document.getElementById('prevDoctor');
            const nextDoctorButton = document.getElementById('nextDoctor');
            const doctorIndicators = document.querySelectorAll('.owl-indicators li');
            
            if (owlContainer && prevDoctorButton && nextDoctorButton) {
                const doctorCardWith = document.querySelector('.card-dokter').offsetWidth + 20; // width + margin
                const visibleDoctorCards = Math.floor(owlContainer.offsetWidth / doctorCardWith);
                const totalDoctorCards = document.querySelectorAll('#owl-demo .item').length;
                const maxDoctorScrollGroups = Math.ceil(totalDoctorCards / visibleDoctorCards);
                
                let currentDoctorGroup = 0;
                
                // Update doctor indicators
                function updateDoctorIndicators(groupIndex) {
                    doctorIndicators.forEach((indicator, index) => {
                        if(index === groupIndex) {
                            indicator.classList.add('active');
                        } else {
                            indicator.classList.remove('active');
                        }
                    });
                }
                
                // Scroll when doctor indicators are clicked
                doctorIndicators.forEach((indicator, index) => {
                    indicator.addEventListener('click', function() {
                        const scrollTo = index * visibleDoctorCards * doctorCardWith;
                        owlContainer.scrollTo({
                            left: scrollTo,
                            behavior: 'smooth'
                        });
                        currentDoctorGroup = index;
                        updateDoctorIndicators(currentDoctorGroup);
                    });
                });
                
                // Previous button for doctor carousel
                prevDoctorButton.addEventListener('click', function() {
                    if(currentDoctorGroup > 0) {
                        currentDoctorGroup--;
                        owlContainer.scrollTo({
                            left: currentDoctorGroup * visibleDoctorCards * doctorCardWith,
                            behavior: 'smooth'
                        });
                        updateDoctorIndicators(currentDoctorGroup);
                    }
                });
                
                // Next button for doctor carousel
                nextDoctorButton.addEventListener('click', function() {
                    if(currentDoctorGroup < maxDoctorScrollGroups - 1) {
                        currentDoctorGroup++;
                        owlContainer.scrollTo({
                            left: currentDoctorGroup * visibleDoctorCards * doctorCardWith,
                            behavior: 'smooth'
                        });
                        updateDoctorIndicators(currentDoctorGroup);
                    }
                });
                
                // Monitor scroll position for doctor carousel
                owlContainer.addEventListener('scroll', function() {
                    const scrollPosition = owlContainer.scrollLeft;
                    const groupIndex = Math.round(scrollPosition / (visibleDoctorCards * doctorCardWith));
                    if(groupIndex !== currentDoctorGroup) {
                        currentDoctorGroup = groupIndex;
                        updateDoctorIndicators(currentDoctorGroup);
                    }
                });
            }
            
            // News carousel functionality
            const newsContainer = document.getElementById('news-owl-demo');
            const prevNewsButton = document.getElementById('prevNews');
            const nextNewsButton = document.getElementById('nextNews');
            const newsIndicators = document.querySelectorAll('.news-indicators li');
            
            if (newsContainer && prevNewsButton && nextNewsButton) {
                const newsCard = document.querySelector('#news-owl-demo .card-berita');
                const cardWidth = newsCard ? newsCard.offsetWidth + 40 : 400; // width + margins
                const visibleCards = Math.floor(newsContainer.offsetWidth / cardWidth);
                const totalCards = document.querySelectorAll('#news-owl-demo .item').length;
                const maxScrollGroups = Math.ceil(totalCards / visibleCards);
                
                let currentNewsGroup = 0;
                
                // Update news indicators
                function updateNewsIndicators(groupIndex) {
                    newsIndicators.forEach((indicator, index) => {
                        if(index === groupIndex) {
                            indicator.classList.add('active');
                        } else {
                            indicator.classList.remove('active');
                        }
                    });
                }
                
                // Scroll when news indicators are clicked
                newsIndicators.forEach((indicator, index) => {
                    indicator.addEventListener('click', function() {
                        const scrollTo = index * visibleCards * cardWidth;
                        newsContainer.scrollTo({
                            left: scrollTo,
                            behavior: 'smooth'
                        });
                        currentNewsGroup = index;
                        updateNewsIndicators(currentNewsGroup);
                    });
                });
                
                // Previous button for news carousel
                prevNewsButton.addEventListener('click', function() {
                    if(currentNewsGroup > 0) {
                        currentNewsGroup--;
                        newsContainer.scrollTo({
                            left: currentNewsGroup * visibleCards * cardWidth,
                            behavior: 'smooth'
                        });
                        updateNewsIndicators(currentNewsGroup);
                    }
                });
                
                // Next button for news carousel
                nextNewsButton.addEventListener('click', function() {
                    if(currentNewsGroup < maxScrollGroups - 1) {
                        currentNewsGroup++;
                        newsContainer.scrollTo({
                            left: currentNewsGroup * visibleCards * cardWidth,
                            behavior: 'smooth'
                        });
                        updateNewsIndicators(currentNewsGroup);
                    }
                });
                
                // Monitor scroll position for news carousel
                newsContainer.addEventListener('scroll', function() {
                    const scrollPosition = newsContainer.scrollLeft;
                    const groupIndex = Math.round(scrollPosition / (visibleCards * cardWidth));
                    if(groupIndex !== currentNewsGroup) {
                        currentNewsGroup = groupIndex;
                        updateNewsIndicators(currentNewsGroup);
                    }
                });
            }
        });
    </script>
</body>
</html>