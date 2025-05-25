<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- slider -->
    <link href=".../../../assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href=".../../../assets/css/style.css" rel="stylesheet">

    <!-- form -->
    <link rel="stylesheet" href=".../../../asset/css/form.css">

    <!-- layanan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
    <style>
        body, html {
            min-height: 100vh;
            background-image: url('.../../../asset/PORTOFOLIO.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }
        
        #container {
            overflow-y: scroll;
            scroll-snap-type: y mandatory;
            height: 100vh;
        }

        #slider {
            scroll-snap-align: start;
        }
        #form {
            padding-top: 100px;
            scroll-snap-align: start;
        }
        #layanan {
            padding-top: 100px;
            scroll-snap-align: start;
        }
        #dokter {
            padding-top: 10px;
            scroll-snap-align: start;
        }
        #berita {
            padding-top: 10px;
            scroll-snap-align: start;
        }
        #footer {
            scroll-snap-align: start;
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
            z-index: 40;
            transition: all 0.3s linear;
        }
        .menu-border {
            border-bottom: 1px solid white;
            padding-bottom: 20px;
        }

        /* layanan */
        .service-card {
            position: relative;
            background: linear-gradient(to bottom, rgba(0, 170, 181, 0.05), rgba(255, 255, 255, 0.8));
            border: 2px solid #00AAB5;
            border-radius: 10px;
            padding: 20px 10px 10px;
            margin-top: 50px;
            text-align: center;
            margin-left: 40px;
            margin-right: 40px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
            margin-top: 30px;
            margin-bottom: 10px;
        }
        
        .service-description {
            color: #454545;
        }

        @media (max-width: 768px) {
            .service-card {
                margin-top: 30px;
                padding-top: 30px;
                max-width: 95%;
            }
            .service-title {
                font-size: 18px;
            }
            .service-description {
                font-size: 14px;
            }
        }

        /* dokter-berita */
        .carousel-item img {
            border-radius: 10px;
            object-fit: cover;
        }
        .carousel-inner {
            text-align: center;
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
            height: 474px !important;
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

        /* footer */
        .footer-section {
            background-color: #00AAB5;
            color: white;
            padding: 20px;
        }
        
        .form-control {
            margin-bottom: 15px;
            border-radius: 0;
        }
        
        .btn-submit {
            background-color: white;
            color: #00B3B3;
            border: none;
            border-radius: 0;
            padding: 8px 0;
            font-weight: 500;
            width: 100%;
        }
        
        .social-icons a {
            margin-right: 15px;
            color: white;
        }
    </style>
</head>
<body>
    <div id="container">
        <section id="header">
            <div class="w-100 bg-white position-fixed" style="height: 80px; z-index: 30;">
                <div class="d-flex align-items-center h-100">
                    <img id="logomata" class="position-fixed" style="top: 25px; left: 20px; width: 57px; height: 29px;" src=".../../../asset/image_2.png">
                    <img style="margin-left: 85px;" src=".../../../asset/image_4.png">
                </div>
                <div id="hamburger-menu-toggle" class="position-fixed" style="top: 28px; right: 20px; padding-right: 20px;">
                    <img src=".../../../asset/material-symbols_menu.png">   
                </div>
            </div>
            
            <div id="hamburger-menu">
                <div class="d-flex justify-content-end align-items-center mt-4 pe-4">
                    <i id="close-hamburger-menu" class="fa-solid fa-x"></i>
                </div>
                <div class="d-flex flex-column gap-4 mt-5 px-2 pe-4">
                    <p class="menu-border">Beranda</p>
                    <p class="menu-border">Pelayanan</p>
                    <p class="menu-border">Dokter</p>
                    <p class="menu-border">Jadwal Dokter</p>
                    <p class="menu-border">Berita Terbaru</p>
                </div>
            </div>
        </section>

        <section id="slider">
            <section class="home-section home-fade home-full-height" id="home">
                <div class="hero-slider">
                    <ul class="slides">
                        <li class="bg-dark-30 bg-dark" style="background-image:url(.../../../assets/images/work-7.jpg);">
                            <div class="titan-caption">
                                <div class="caption-content">
                                    <div class="font-alt mb-30 titan-title-size-1">Hello & welcome</div>
                                    <div class="font-alt mb-40 titan-title-size-4">We are Titan</div><a
                                        class="section-scroll btn btn-border-w btn-round" href="#about">Booking</a>
                                </div>
                            </div>
                        </li>
                        <li class="bg-dark-30 bg-dark" style="background-image:url(.../../../assets/images/slide-1.png);">
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
        </section>

        <section id="form">
            <div class="container mt-4">
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

        <section id="layanan">
            <h2 class="text-center text-secondary mt-5 col-md-4">Layanan Kami</h2>
            <div class="container py-5">
                <div class="row justify-content-center">
                    <!-- Service Card 1: Skrining & Check Up -->
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="service-card">
                            <div class="icon-container"></div>
                            <div class="service-icon">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <h3 class="service-title">Skrining & Check Up</h3>
                            <p class="service-description">Kami turut berkontribusi dalam pencegahan gangguan kesehatan mata.</p>
                        </div>
                    </div>
                    
                    <!-- Service Card 2: Medical Check Up -->
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="service-card">
                            <div class="icon-container"></div>
                            <div class="service-icon">
                                <i class="fas fa-stethoscope"></i>
                            </div>
                            <h3 class="service-title">Medical Check Up</h3>
                            <p class="service-description">Pemeriksaan kesehatan menyeluruh untuk mendeteksi masalah kesehatan.</p>
                        </div>
                    </div>
                    
                    <!-- Service Card 3: Konsultasi Dokter -->
                    <div class="col-md-4 col-sm-6 mb-4">
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
        </section>

        <section id="dokter">
            <div id="dokter" class="container text-center">
                <h2 class="fw-bold">Tim Dokter Kami</h2>
                <div id="doctorCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card-dokter">
                                <img src=".../../../asset/dokter.png" class="d-block w-100" alt="Dokter 1">
                                <div class="desc-dokter">
                                    <h5 id="text-dokter" class="mt-2 fw-bold">dr. Ria Sandy Deneska, Sp.M(K)</h5>
                                    <p>Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                                </div>
                                <button class="btn-jadwal"><i class="fa-solid fa-book-open-reader"></i> Detail</button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-dokter">
                                <img src=".../../../asset/dokter2.png" alt="Dokter 2">
                                <div class="desc-dokter">
                                    <h5 id="text-dokter" class="mt-2 fw-bold">dr. Budi Santoso, Sp.M(K)</h5>
                                    <p>Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                                </div>
                                <button class="btn-jadwal"><i class="fa-solid fa-book-open-reader"></i> Detail</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Custom carousel navigation arrows -->
                    <button class="custom-carousel-nav custom-carousel-prev" type="button" data-bs-target="#doctorCarousel" data-bs-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="custom-carousel-nav custom-carousel-next" type="button" data-bs-target="#doctorCarousel" data-bs-slide="next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    
                    <!-- Keep indicators inside carousel but position with CSS -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#doctorCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#doctorCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                </div>
            </div>
        </section>

        <section id="berita">
            <div class="container-berita text-center">
                <h2 class="fw-bold">Berita Terbaru</h2>
                <div id="beritaCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
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
                        <div class="carousel-item">
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
                    </div>
                    
                    <!-- Custom carousel navigation arrows -->
                    <button class="custom-carousel-nav custom-carousel-prev" type="button" data-bs-target="#beritaCarousel" data-bs-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="custom-carousel-nav custom-carousel-next" type="button" data-bs-target="#beritaCarousel" data-bs-slide="next">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    
                    <!-- Keep indicators inside carousel but position with CSS -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#beritaCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#beritaCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer" class="footer-section">
            <div class="container">
                <!-- Clinic Logo and Description (Left-aligned) -->
                <div class="mb-4">
                    <div class="d-flex align-items-center">
                        <img src=".../../../asset/image3.png" alt="Klinik Mata dr. Sjamsu" style="height: 30px;">
                    </div>
                    <p class="mt-4">
                        Kami adalah tim dokter mata yang professional dan berkompetensi tinggi. Kami peduli atas kesehatan mata Anda.
                    </p>
                </div>
                
                <!-- Social Media Section -->
                <div class="mb-4">
                    <h5>Ikuti Kami</h5>
                    <div class="social-icons mt-2">
                        <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                        <a href="#"><i class="fab fa-instagram-square fa-2x"></i></a>
                        <a href="#"><i class="fab fa-whatsapp-square fa-2x"></i></a>
                        <a href="#"><i class="fab fa-twitter-square fa-2x"></i></a>
                    </div>
                </div>
                
                <!-- Contact Form Section (Centered) -->
                <div>
                    <h5>Kontak Kami</h5>
                    <form action="#" method="post" class="mt-3">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="subjek" placeholder="Subjek" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="pesan" rows="4" placeholder="Pesan" required></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn-submit">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
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

        $(document).ready(() => {
            detectScreen();
            $(window).on('resize', detectScreen);
        })

        function detectScreen() {
            var width = $(window).width();
            
            if (width >= 768) {
                window.location.href = '<?= base_url('Dekstop') ?>';
                console.log('dekstop');
            } 
        }
    </script>

    <!-- slider -->
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
            document.getElementById('bpjsForm').classList.add('d-none');
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

    <!-- dokter-berita -->
    <script>
        new bootstrap.Carousel(document.querySelector('#doctorCarousel'), {
            interval: 3000, wrap: true
        });
        new bootstrap.Carousel(document.querySelector('#beritaCarousel'), {
            interval: 4000, wrap: true
        });
    </script>
</body>
</html>