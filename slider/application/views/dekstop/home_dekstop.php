<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Slider -->
    <link href=".../../../assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href=".../../../assets/css/style.css" rel="stylesheet">
    <!-- Form -->
    <link rel="stylesheet" href=".../../../asset/css/form.css">
    <!-- Layanan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Dokter dan Berita -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Document</title>
    <style>
        html, body {
            background-image: url('.../../../asset/PORTOFOLIO.png');
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

        #slider, #form, #layanan, #dokter, #berita, #footer {
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

        /* Layanan */
        .service-card {
            position: relative;
            background: linear-gradient(to bottom, rgba(0, 170, 181, 0.05), rgba(255, 255, 255, 0.8));
            border: 2px solid #00AAB5;
            border-radius: 10px;
            padding: 20px 10px 10px;
            margin-top: 70px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .card-container {
            height: 100%;
            display: flex;
            flex-direction: column;
            padding-left: 40px;
            padding-right: 40px;
            margin-bottom: 30px;
        }

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
            z-index: 0;
        }

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
            z-index: 1;
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
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .service-description {
            color: #454545;
            flex-grow: 1;
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

        /* Dokter dan Berita */
        .carousel-item img {
            border-radius: 10px;
            object-fit: cover;
        }
        .carousel-inner {
            text-align: center;
        }
        .card-row {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 40px;
        }
        .btn-jadwal {
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
        .btn-jadwal i {
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
        .card-dokter {
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
        .card-dokter > .desc-dokter {
            display: flex;
            flex-direction: column;
            align-items: start;
            text-align: left;
        }
        .card-dokter > button {
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
        .card-berita {
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
        .card-berita > button {
            background-color: white;
            align-self: center;
            border: 1px solid rgba(0, 170, 181, 1);
            border-radius: 10px;
            width: 300px;
            text-align: center;
            color: rgba(0, 170, 181, 1);
        }
        .card-berita > img {
            border-radius: 20px;
            height: 333px !important;
            width: 100%;
            object-fit: cover;
            display: block;
        }
        #dokter {
            margin-top: 120px;
        }
        .container-berita {
            margin-top: 80px;
        }
        #text-berita, #text-dokter {
            color: rgba(0, 170, 181, 1);
        }
        .cards-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: nowrap;
            width: 100%;
        }
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
        #owl-demo {
            display: flex;
            overflow-x: scroll;
            scrollbar-width: none;
            -ms-overflow-style: none;
            position: relative;
            padding: 0 40px;
        }
        #owl-demo::-webkit-scrollbar {
            display: none;
        }
        #owl-demo .item {
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
        #news-owl-demo {
            display: flex;
            overflow-x: scroll;
            scrollbar-width: none;
            -ms-overflow-style: none;
            position: relative;
            padding: 0 40px;
        }
        #news-owl-demo::-webkit-scrollbar {
            display: none;
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
        #news {
            margin-top: 100px;
        }

        /* Footer */
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
        .copyright {
            font-size: 12px;
            margin-top: 0;
        }
        .text-md-end {
            text-align: right;
        }
        @media (max-width: 768px) {
            .text-md-end {
                text-align: center;
                margin-top: 20px;
            }
            .footer-section {
                text-align: center;
            }
        }

        /* Modal Styles */
        .success-modal-content {
            border-radius: 10px;
            border: none;
            overflow: hidden;
        }
        .success-header {
            background-color: #f44336;
            color: white;
            padding: 15px 20px;
            position: relative;
            text-align: center;
        }
        .success-header h2 {
            margin: 0;
            font-size: 28px;
            font-weight: 500;
        }
        .success-header .successbtn-close {
            position: absolute;
            right: 20px;
            top: 20px;
            color: white;
            background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
            opacity: 1;
        }
        .success-body {
            padding: 30px;
            text-align: center;
        }
        .success-body p {
            color: #333;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        .successbtn-kembali {
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 40px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
        }
        .successbtn-kembali:hover {
            background-color: #d32f2f;
        }
        .success-header.success {
            background-color: #2ECC71;
        }
        .successbtn-kembali.success {
            background-color: #2ECC71;
        }
        .successbtn-kembali.success:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>
    <div id="container">
        <section id="header" class="w-100 bg-white position-sticky top-0 d-flex align-items-center" style="height: 80px; padding-left: 50px; padding-right: 50px; z-index: 30;">
            <div class="d-flex align-items-center">
                <img id="logomata" src=".../../../asset/image_2.png">
                <img src=".../../../asset/image_4.png">
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
                    <li class="bg-dark-30 bg-dark">
                        <!-- <div class="titan-caption">
                            <div class="caption-content">
                                <div class="font-alt mb-30 titan-title-size-1">Hello & welcome</div>
                                <div class="font-alt mb-40 titan-title-size-4">We are Titan</div>
                                <a class="section-scroll btn btn-border-w btn-round" href="#form">Booking</a>
                            </div>
                        </div> -->
                        <img src=".../../../assets/images/slider-1.png" alt="" style="height: 100%; width:100%">
                    </li>
                    <li class="bg-dark-30 bg-dark">
                        <!-- <div class="titan-caption">
                            <div class="caption-content">
                                <div class="font-alt mb-30 titan-title-size-2">Titan is creative multipurpose html template for<br />web developers who change the world</div>
                                <a class="btn btn-border-w btn-round" href="#form">Booking</a>
                            </div>
                        </div> -->
                        <img src=".../../../assets/images/20220825_-_tv_datang_sesuai_jadwal_fix.png" alt="" style="height: 100%; width:100%">
                    </li>
                    <li class="bg-dark-30 bg-dark">
                        <!-- <div class="titan-caption">
                            <div class="caption-content">
                                <div class="font-alt mb-30 titan-title-size-1">We build brands that build business</div>
                                <div class="font-alt mb-40 titan-title-size-3">We are Amazing</div>
                                <a class="section-scroll btn btn-border-w btn-round" href="#form">Booking</a>
                            </div>
                        </div> -->
                        <img src=".../../../assets/images/slider-1.png" alt="" style="height: 100%; width:100%">
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
                        <a id="bpjs" class="nav-link text-white" onclick="showBPJSForm()">BPJS</a>
                    </li>
                </ul>
            </div>

            <div class="container px-3">
                <!-- Form BPJS -->
                <div id="bpjsForm" class="card1 card-custom p-4">
                    <h5 class="text-white">Pesan Jadwal Pemeriksaan - BPJS</h5>
                    <form id="bpjsForm" class="needs-validation" novalidate onsubmit="return validateForm(event)">
                        <div class="mb-2">
                            <label for="nik_bpjs" class="form-label">NIK</label>
                            <small class="form-example">Eg. (3576014403910003)</small>
                            <input type="text" id="nik_bpjs" class="form-control rounded-2" required>
                            <div class="invalid-feedback">Masukkan NIK 16 digit.</div>
                        </div>
                        <div class="mb-2">
                            <label for="rujukan_bpjs" class="form-label">Nomor Surat Rujukan / Kontrol</label>
                            <small class="form-example">Eg. (021750052025K0002867)</small>
                            <input type="text" id="rujukan_bpjs" class="form-control rounded-2" required>
                            <div class="invalid-feedback">Masukkan Nomor Rujukan 20-25 karakter alfanumerik.</div>
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
                                <option value="">Pilih sesi</option>
                                <option value="Pagi">Pagi</option>
                                <option value="Siang">Siang</option>
                                <option value="Sore">Sore</option>
                            </select>
                        </div>
                        <small class="text-white d-block mt-2">*Batas maksimum pemesanan jadwal 3 bulan ke depan</small>
                        <small class="text-white d-block">*Pilihan tanggal akan berwarna merah jika kuota penuh</small>
                        <button type="button" class="btn1 btn-custom w-100 mt-3" onclick="submitBooking('bpjs')">Kirim</button>
                    </div>            
                </div>

                <!-- Form Privat -->
                <div id="privatForm" class="card1 card-custom-privat p-4 d-none">
                    <h5 class="text-white">Pesan Jadwal Pemeriksaan - Privat</h5>
                    <form id="privatForm" class="needs-validation" novalidate onsubmit="return validateForm(event)">
                        <div class="mb-2">
                            <label for="nik_privat" class="form-label">NIK</label>
                            <small class="form-example">Eg. (3576014403910003)</small>
                            <input type="text" id="nik_privat" class="form-control rounded-2" required>
                            <div class="invalid-feedback">Masukkan NIK 16 digit.</div>
                        </div>
                        <div class="mb-2">
                            <label for="rujukan_privat" class="form-label">Nomor Surat Rujukan / Kontrol</label>
                            <small class="form-example">Eg. (021750052025K0002867)</small>
                            <input type="text" id="rujukan_privat" class="form-control rounded-2" required>
                            <div class="invalid-feedback">Masukkan Nomor Rujukan 20-25 karakter alfanumerik.</div>
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
                                <option value="">Pilih sesi</option>
                                <option value="Pagi">Pagi</option>
                                <option value="Siang">Siang</option>
                                <option value="Sore">Sore</option>
                            </select>
                        </div>
                        <small class="text-white d-block mt-2">*Batas maksimum pemesanan jadwal 3 bulan ke depan</small>
                        <small class="text-white d-block">*Pilihan tanggal akan berwarna merah jika kuota penuh</small>
                        <button type="button" class="btn1 btn-custom-privat w-100 mt-3" onclick="submitBooking('privat')">Kirim</button>
                    </div>            
                </div>
            </div>

            <!-- Warning Modal -->
            <div class="modal fade" id="warningModal" tabindex="-1" aria-labelledby="warningModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content success-modal-content">
                        <div class="success-header">
                            <button type="button" class="successbtn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h2>Warning!</h2>
                        </div>
                        <div class="success-body">
                            <p>
                                Anda telah melewati batas pengisian formulir, hubungi admin KMDS untuk booking lebih lanjut.
                            </p>
                            <button class="successbtn-kembali" 
                                    id="hubungiAdminBtn" 
                                    data-bs-dismiss="modal"
                                    onclick="window.open('https://api.whatsapp.com/send?phone=62082328834899&text=HaloKMDS', '_blank')">
                                Hubungi Admin
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Success Modal -->
            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content success-modal-content">
                        <div class="success-header success">
                            <button type="button" class="successbtn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h2>Success</h2>
                        </div>
                        <div class="success-body">
                            <p>
                                Pemesanan jadwal pemeriksaan telah berhasil, silahkan catat kode berikut sebagai bukti anda telah mendaftar :
                            </p>
                            <div class="successbooking-code">
                                <h3>BOOKING CODE: <span id="generatedCode"></span></h3>
                            </div>
                            <div class="successbooking-date">
                                <p id="appointmentDateTime"></p>
                            </div>
                            <p class="successbooking-instruction">
                                Screenshot kode booking, dan tunjukkan ke bagian pelayanan untuk melanjutkan pendaftaran
                            </p>
                            <button class="successbtn-kembali success" data-bs-dismiss="modal">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="layanan" style="padding-top: 100px;">
            <div class="section-title-container">
                <h2 class="text-center text-secondary mt-5">Layanan Kami</h2>
            </div>
            <div class="container py-5">
                <div class="row">
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
                    <button id="prevDoctor" class="custom-carousel-nav custom-carousel-prev owl-nav-btn">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button id="nextDoctor" class="custom-carousel-nav custom-carousel-next owl-nav-btn">
                        <i class="fas fa-chevron-right"></i>
                    </button>
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
                                <button class="btn btn-custom">Baca Selengkapnya</button>
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
                                <button class="btn btn-custom">Baca Selengkapnya</button>
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
                                <button class="btn btn-custom">Baca Selengkapnya</button>
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
                                <button class="btn btn-custom">Baca Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                    <button id="prevNews" class="custom-carousel-nav custom-carousel-prev owl-nav-btn">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button id="nextNews" class="custom-carousel-nav custom-carousel-next owl-nav-btn">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    <ul class="owl-indicators news-indicators">
                        <li class="active" data-index="0"></li>
                        <li data-index="1"></li>
                    </ul>
                </div>
            </div>
        </section>

        <footer id="footer" class="footer-section">
            <div class="container">
                <div class="row align-items-start" style="padding-top: 5px;">
                    <div class="col-md-4 mb-4">
                        <h3 class="footer-title">Klinik Mata dr. Sjamsu</h3>
                        <!-- <p class="footer-text">
                            Kami adalah tim dokter mata yang profesional dan berkompetensi tinggi. Kami peduli atas kesehatan mata anda.
                        </p> -->
                        <!-- <p class="footer-text">
                            Dengan menggunakan alat-alat operasi modern beserta kelengkapan penunjang lain yang canggih dan mutakhir, kami siap menjaga kesehatan mata anda.
                        </p> -->
                    </div>
                    <div class="col-md-4 mb-4">
                        <!-- <h3 class="footer-title">Social Media</h3> -->
                        <div class="d-flex">
                            <button class="social-btn follow-btn">
                                <i class="fab fa-facebook-f me-1"></i> Follow Page
                            </button>
                            <button class="social-btn follow-btn">
                                <i class="fab fa-instagram me-1"></i> Follow Page
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 text-md-end">
                        <p class="copyright">Copyright © 2025 CV SB</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src=".../../../assets/lib/jquery/dist/jquery.js"></script>
    <script src=".../../../assets/lib/wow/dist/wow.js"></script>
    <script type="text/javascript" src=".../../../assets/lib/flexslider/jquery.flexslider.js"></script>
    <script type="text/javascript" src=".../../../assets/js/main.js"></script>

    <!-- Form JavaScript -->
    <script>
        // Counter untuk batas klik
        let clickCount = 0;

        // Fungsi untuk menampilkan form Privat
        function showPrivatForm() {
            document.getElementById('bpjsForm').classList.add('d-none');
            document.getElementById('privatForm').classList.remove('d-none');
            document.getElementById('privat').classList.add('active');
            document.getElementById('bpjs').classList.remove('active');
            clickCount = 0; // Reset click count
            document.getElementById('bpjsForm').reset();
            document.getElementById('privatForm').reset();
            document.getElementById('extraForm').classList.add('d-none');
            document.getElementById('extraFormPrivat').classList.add('d-none');
        }

        // Fungsi untuk menampilkan form BPJS
        function showBPJSForm() {
            document.getElementById('privatForm').classList.add('d-none');
            document.getElementById('bpjsForm').classList.remove('d-none');
            document.getElementById('bpjs').classList.add('active');
            document.getElementById('privat').classList.remove('active');
            clickCount = 0; // Reset click count
            document.getElementById('bpjsForm').reset();
            document.getElementById('privatForm').reset();
            document.getElementById('extraForm').classList.add('d-none');
            document.getElementById('extraFormPrivat').classList.add('d-none');
        }

        // Fungsi untuk validasi input NIK dan Nomor Rujukan
        function validateInputs(nikInput, rujukanInput, nikError, rujukanError) {
            let isValid = true;

            // Validasi NIK (harus 16 digit)
            if (!nikInput.value.trim()) {
                nikError.textContent = 'NIK tidak boleh kosong';
                nikError.style.display = 'block';
                isValid = false;
            } else if (!/^\d{16}$/.test(nikInput.value.trim())) {
                nikError.textContent = 'NIK harus berisi 16 angka';
                nikError.style.display = 'block';
                isValid = false;
            } else {
                nikError.style.display = 'none';
            }

            // Validasi Nomor Rujukan (20-25 karakter alfanumerik)
            if (!rujukanInput.value.trim()) {
                rujukanError.textContent = 'Nomor Surat Rujukan tidak boleh kosong';
                rujukanError.style.display = 'block';
                isValid = false;
            } else if (!/^[A-Z0-9]{20,25}$/.test(rujukanInput.value.trim())) {
                rujukanError.textContent = 'Nomor Surat Rujukan harus berisi 20-25 karakter alfanumerik';
                rujukanError.style.display = 'block';
                isValid = false;
            } else {
                rujukanError.style.display = 'none';
            }

            return isValid;
        }

        // Fungsi validasi form
        function validateForm(event) {
            event.preventDefault(); // Hindari submit default
            let form = event.target;

            // Ambil elemen input dan error message
            let nikInput, rujukanInput, nikError, rujukanError, extraForm;
            if (form.id === "bpjsForm") {
                nikInput = document.getElementById('nik_bpjs');
                rujukanInput = document.getElementById('rujukan_bpjs');
                nikError = form.querySelector('.invalid-feedback');
                rujukanError = form.querySelectorAll('.invalid-feedback')[1];
                extraForm = document.getElementById('extraForm');
            } else if (form.id === "privatForm") {
                nikInput = document.getElementById('nik_privat');
                rujukanInput = document.getElementById('rujukan_privat');
                nikError = form.querySelector('.invalid-feedback');
                rujukanError = form.querySelectorAll('.invalid-feedback')[1];
                extraForm = document.getElementById('extraFormPrivat');
            }

            // Validasi input
            if (!validateInputs(nikInput, rujukanInput, nikError, rujukanError)) {
                clickCount++;
                if (clickCount >= 3) {
                    showWarningModal();
                    clickCount = 0; // Reset setelah modal
                    form.reset();
                    return false;
                }
                form.classList.add('was-validated');
                return false;
            }

            // Jika valid, reset click count dan tampilkan form tambahan
            clickCount = 0;
            extraForm.classList.remove('d-none');
            // Set batas tanggal (3 bulan ke depan)
            const today = new Date().toISOString().split('T')[0];
            const maxDate = new Date();
            maxDate.setMonth(maxDate.getMonth() + 3);
            const maxDateStr = maxDate.toISOString().split('T')[0];
            if (form.id === "bpjsForm") {
                document.getElementById('tanggal').min = today;
                document.getElementById('tanggal').max = maxDateStr;
            } else {
                document.getElementById('tanggalPrivat').min = today;
                document.getElementById('tanggalPrivat').max = maxDateStr;
            }

            return false;
        }

        // Fungsi untuk menampilkan warning modal
        function showWarningModal() {
            try {
                const warningModal = new bootstrap.Modal(document.getElementById('warningModal'));
                warningModal.show();
            } catch (e) {
                console.error('Error showing warning modal:', e);
                alert('Error: Tidak dapat menampilkan warning modal. Pastikan Bootstrap JS dimuat.');
            }
        }

        // Fungsi untuk generate kode booking
        function generateBookingCode() {
            const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            const numbers = "0123456789";
            let code = "";
            code += letters.charAt(Math.floor(Math.random() * letters.length));
            code += numbers.charAt(Math.floor(Math.random() * numbers.length));
            code += letters.charAt(Math.floor(Math.random() * letters.length));
            code += numbers.charAt(Math.floor(Math.random() * numbers.length));
            return code;
        }

        // Fungsi untuk format tanggal
        function formatAppointmentDate(date, session) {
            const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            const dayName = days[date.getDay()];
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const day = String(date.getDate()).padStart(2, '0');
            const year = date.getFullYear();
            let time = "";
            switch (session) {
                case "Pagi":
                    time = "08.00";
                    break;
                case "Siang":
                    time = "13.00";
                    break;
                case "Sore":
                    time = "19.00";
                    break;
                default:
                    time = "08.00";
            }
            return `${dayName}, ${month}/${day}/${year}, Pukul : ${time}`;
        }

        // Fungsi untuk menangani submit booking
        function submitBooking(type) {
            let sesiSelect, appointmentDate, form, extraForm;
            if (type === 'bpjs') {
                sesiSelect = document.getElementById('sesi');
                appointmentDate = document.getElementById('tanggal');
                form = document.getElementById('bpjsForm');
                extraForm = document.getElementById('extraForm');
            } else {
                sesiSelect = document.getElementById('sesiPrivat');
                appointmentDate = document.getElementById('tanggalPrivat');
                form = document.getElementById('privatForm');
                extraForm = document.getElementById('extraFormPrivat');
            }

            if (!sesiSelect.value) {
                alert('Silakan pilih sesi terlebih dahulu');
                return;
            }

            if (!appointmentDate.value) {
                alert('Silakan pilih tanggal terlebih dahulu');
                return;
            }

            // Generate kode booking
            const bookingCode = generateBookingCode();
            const selectedDate = new Date(appointmentDate.value);
            const formattedDateTime = formatAppointmentDate(selectedDate, sesiSelect.value);

            // Tampilkan success modal
            try {
                document.getElementById('generatedCode').textContent = bookingCode;
                document.getElementById('appointmentDateTime').textContent = formattedDateTime;
                const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
            } catch (e) {
                console.error('Error showing success modal:', e);
                alert('Error: Tidak dapat menampilkan success modal. Pastikan Bootstrap JS dimuat.');
            }

            // Reset form dan click count
            clickCount = 0;
            form.reset();
            extraForm.classList.add('d-none');
        }

        // Handle modal backdrop cleanup
        document.getElementById('successModal').addEventListener('hidden.bs.modal', function () {
            document.body.classList.remove('modal-open');
            const modalBackdrops = document.getElementsByClassName('modal-backdrop');
            while (modalBackdrops.length > 0) {
                modalBackdrops[0].parentNode.removeChild(modalBackdrops[0]);
            }
        });

        document.getElementById('warningModal').addEventListener('hidden.bs.modal', function () {
            document.body.classList.remove('modal-open');
            const modalBackdrops = document.getElementsByClassName('modal-backdrop');
            while (modalBackdrops.length > 0) {
                modalBackdrops[0].parentNode.removeChild(modalBackdrops[0]);
            }
        });
    </script>

    <!-- Dokter dan Berita JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Doctor carousel functionality
            const owlContainer = document.getElementById('owl-demo');
            const prevDoctorButton = document.getElementById('prevDoctor');
            const nextDoctorButton = document.getElementById('nextDoctor');
            const doctorIndicators = document.querySelectorAll('.owl-indicators li');
            
            if (owlContainer && prevDoctorButton && nextDoctorButton) {
                const doctorCardWidth = document.querySelector('.card-dokter').offsetWidth + 20;
                const visibleDoctorCards = Math.floor(owlContainer.offsetWidth / doctorCardWidth);
                const totalDoctorCards = document.querySelectorAll('#owl-demo .item').length;
                const maxDoctorScrollGroups = Math.ceil(totalDoctorCards / visibleDoctorCards);
                
                let currentDoctorGroup = 0;
                
                function updateDoctorIndicators(groupIndex) {
                    doctorIndicators.forEach((indicator, index) => {
                        if(index === groupIndex) {
                            indicator.classList.add('active');
                        } else {
                            indicator.classList.remove('active');
                        }
                    });
                }
                
                doctorIndicators.forEach((indicator, index) => {
                    indicator.addEventListener('click', function() {
                        const scrollTo = index * visibleDoctorCards * doctorCardWidth;
                        owlContainer.scrollTo({
                            left: scrollTo,
                            behavior: 'smooth'
                        });
                        currentDoctorGroup = index;
                        updateDoctorIndicators(currentDoctorGroup);
                    });
                });
                
                prevDoctorButton.addEventListener('click', function() {
                    if(currentDoctorGroup > 0) {
                        currentDoctorGroup--;
                        owlContainer.scrollTo({
                            left: currentDoctorGroup * visibleDoctorCards * doctorCardWidth,
                            behavior: 'smooth'
                        });
                        updateDoctorIndicators(currentDoctorGroup);
                    }
                });
                
                nextDoctorButton.addEventListener('click', function() {
                    if(currentDoctorGroup < maxDoctorScrollGroups - 1) {
                        currentDoctorGroup++;
                        owlContainer.scrollTo({
                            left: currentDoctorGroup * visibleDoctorCards * doctorCardWidth,
                            behavior: 'smooth'
                        });
                        updateDoctorIndicators(currentDoctorGroup);
                    }
                });
                
                owlContainer.addEventListener('scroll', function() {
                    const scrollPosition = owlContainer.scrollLeft;
                    const groupIndex = Math.round(scrollPosition / (visibleDoctorCards * doctorCardWidth));
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
                const cardWidth = newsCard ? newsCard.offsetWidth + 40 : 400;
                const visibleCards = Math.floor(newsContainer.offsetWidth / cardWidth);
                const totalCards = document.querySelectorAll('#news-owl-demo .item').length;
                const maxScrollGroups = Math.ceil(totalCards / visibleCards);
                
                let currentNewsGroup = 0;
                
                function updateNewsIndicators(groupIndex) {
                    newsIndicators.forEach((indicator, index) => {
                        if(index === groupIndex) {
                            indicator.classList.add('active');
                        } else {
                            indicator.classList.remove('active');
                        }
                    });
                }
                
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

        // Scroll to header on logo click
        document.getElementById('logomata').addEventListener('click', function (event) {
            event.preventDefault();
            document.getElementById('header').scrollIntoView({ behavior: 'smooth' });
        });

        // Redirect to mobile version
        $(document).ready(() => {
            detectScreen();
            $(window).on('resize', detectScreen);
        });

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