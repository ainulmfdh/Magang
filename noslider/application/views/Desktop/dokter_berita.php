<?php
// application/views/dokter_berita_view.php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Mata Dr. Sjamsu</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .section-title {
            text-align: center;
            margin: 30px 0;
            color: #555;
            font-weight: 600;
        }
        .doctor-card {
            background-color: #a9e7e7;
            border-radius: 20px;
            overflow: hidden;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            position: relative;
			/* height: 400px; */
        }
        .doctor-card img {
            width: 100%;
            height: 400px;
        }
        .doctor-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 15px;
            text-align: center;
            background: rgba(255, 255, 255, 0.2); 
  			backdrop-filter: blur(10px); 
        }
        .doctor-name {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
        }
        .doctor-specialty {
            font-size: 14px;
            font-weight: 300;
        }
		/* berita Styling */
        .berita-section {
            background-color: #ECFFFC;
            width: 100%;
            margin-top: 100px;
            padding: 3px 10px;
        }
        .news-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            height: 100%;
        }
        
        .news-card img {
            width: 100%;
            height: auto;
        }
        .news-info {
            padding: 15px;
            display: flex;
            flex-direction: column;
        }
        
        .news-title {
            font-size: 14px;
            font-weight: 700;
            color: rgba(0, 170, 181, 1);
            margin-bottom: 10px;
        }
        
        .news-summary {
            font-size: 12px;
            color: #666;
            margin-bottom: 15px;
        }
        .btn-detail {
            background-color: rgba(0, 170, 181, 1);
            color: white;
            border-radius: 20px;
            font-size: 12px;
            padding: 5px 15px;
            align-self: flex-end;
            text-decoration: none;
            display: inline-block;
        }
        
        /* Custom Carousel Styling */
        .doctor-carousel-container {
            position: relative;
        }
        
        .carousel-control-prev,
        .carousel-control-next {
            width: 40px;
            height: 40px;
            background-color: rgba(0, 170, 181, 1);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 1;
        }
        
        .carousel-control-prev {
            left: -50px;
        }
        
        .carousel-control-next {
            right: -50px;
        }
        
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 20px;
            height: 20px;
        }
        /* berita Styling */
        .read-more-btn {
            display: block;
            width: 200px;
            margin: 20px auto;
            text-align: center;
            padding: 8px 20px;
            border: 1px solid rgba(0, 170, 181, 1);
            border-radius: 30px;
            color: rgba(0, 170, 181, 1);
            background-color: transparent;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .read-more-btn:hover {
            background-color: rgba(0, 170, 181, 1);
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Dokter Section -->
        <h2 class="section-title">Dokter</h2>
        <div class="doctor-carousel-container">
            <div id="doctorCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel Content -->
                <div class="carousel-inner">
                    <!-- First Slide -->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="doctor-card">
                                    <img src="<?= base_url('asset/images/dokter.png'); ?>" alt="Doctor" class="img-fluid">
                                    <div class="doctor-info">
                                        <h3 class="doctor-name">dr. Ria Sandy Deneska, Sp.M(K)</h3>
                                        <p class="doctor-specialty">Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="doctor-card">
                                    <img src="<?= base_url('asset/images/caesari.jpg'); ?>" alt="Doctor" class="img-fluid">
                                    <div class="doctor-info">
                                        <h3 class="doctor-name">dr. Ria Sandy Deneska, Sp.M(K)</h3>
                                        <p class="doctor-specialty">Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="doctor-card">
                                    <img src="<?= base_url('asset/images/fitrika.jpg'); ?>" alt="Doctor" class="img-fluid">
                                    <div class="doctor-info">
                                        <h3 class="doctor-name">dr. Ria Sandy Deneska, Sp.M(K)</h3>
                                        <p class="doctor-specialty">Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Second Slide -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="doctor-card">
                                    <img src="<?= base_url('asset/images/dr_valeri.jpg'); ?>" alt="Doctor" class="img-fluid">
                                    <div class="doctor-info">
                                        <h3 class="doctor-name">dr. Ria Sandy Deneska, Sp.M(K)</h3>
                                        <p class="doctor-specialty">Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="doctor-card">
                                    <img src="<?= base_url('asset/images/sjamsu.jpg'); ?>" alt="Doctor" class="img-fluid">
                                    <div class="doctor-info">
                                        <h3 class="doctor-name">dr. Ria Sandy Deneska, Sp.M(K)</h3>
                                        <p class="doctor-specialty">Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="doctor-card">
                                    <img src="<?= base_url('asset/images/vinca.jpg'); ?>" alt="Doctor" class="img-fluid">
                                    <div class="doctor-info">
                                        <h3 class="doctor-name">dr. Ria Sandy Deneska, Sp.M(K)</h3>
                                        <p class="doctor-specialty">Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls (Side Arrows) -->
                <button class="carousel-control-prev" type="button" data-bs-target="#doctorCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#doctorCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Berita Section -->
    <section class="berita-section" style="background-color: #ECFFFC;">
    <div class="container">
        <h2 class="section-title">Berita</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="news-card">
                    <img src="<?= base_url('asset/images/berita.png'); ?>" alt="News" class="img-fluid">
                    <div class="news-info">
                        <h3 class="news-title">BAKTI SOSIAL OPERASI KATARAK KLINIK MATA DR. SJAMSU</h3>
                        <p class="news-summary">Klinik Mata Dr.Sjamsu menyelenggarakan kegiatan bakti sosial berupa Operasi Katarak Gratis bekerja sama dengan Blink Indonesia yang merupakan bentuk nyata komitmen untuk melayani masyarakat luas.</p>
                        <a class="btn-detail">11 Apr 2025</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="news-card">
                    <img src="<?= base_url('asset/images/berita.png'); ?>" alt="News" class="img-fluid">
                    <div class="news-info">
                        <h3 class="news-title">BAKTI SOSIAL OPERASI KATARAK KLINIK MATA DR. SJAMSU</h3>
                        <p class="news-summary">Klinik Mata Dr.Sjamsu menyelenggarakan kegiatan bakti sosial berupa Operasi Katarak Gratis bekerja sama dengan Blink Indonesia yang merupakan bentuk nyata komitmen untuk melayani masyarakat luas.</p>
                        <a class="btn-detail">11 Apr 2025</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="news-card">
                    <img src="<?= base_url('asset/images/berita.png'); ?>" alt="News" class="img-fluid">
                    <div class="news-info">
                        <h3 class="news-title">BAKTI SOSIAL OPERASI KATARAK KLINIK MATA DR. SJAMSU</h3>
                        <p class="news-summary">Klinik Mata Dr.Sjamsu menyelenggarakan kegiatan bakti sosial berupa Operasi Katarak Gratis bekerja sama dengan Blink Indonesia yang merupakan bentuk nyata komitmen untuk melayani masyarakat luas.</p>
                        <a class="btn-detail">11 Apr 2025</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Read More Button -->
        <!-- <a href="#" class="read-more-btn">Read More</a> -->
    </div>
    </section>
    

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
        // Initialize carousel
        document.addEventListener('DOMContentLoaded', function() {
            var doctorCarousel = new bootstrap.Carousel(document.getElementById('doctorCarousel'), {
                interval: 5000,
                wrap: true
            });
        });
    </script>
</body>
</html>
