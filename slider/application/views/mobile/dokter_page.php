<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        #container-heading {
            padding: 100px 25px 90px;
        }
        .heading {
            color: #00AAB5;
            font-size: 35px;
        }
        .line-heading {
            background-color: #00AAB5;
            height: 6px;
            width: 200px;
            border-radius: 8px;
            display: inline-block;
            margin-top: 20px;
        }
        .desc-heading {
            margin-top: 10px;
            font-size: 16px;
            text-align: justify;
        }
        #dokter {
            padding-bottom: 30px;
        }
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
            opacity: 0.7;
            transition: all 0.3s ease;
        }
        
        .carousel-indicators .active {
            background-color: rgba(0, 170, 181, 1) !important;
            opacity: 1;
        }

        /* Style untuk indikator terbatas */
        .limited-indicators {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .limited-indicators button {
            display: none;
        }

        .limited-indicators button.visible {
            display: block !important;
        }

        /* Counter untuk menunjukkan posisi */
        .carousel-counter {
            position: absolute;
            bottom: -25px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 12px;
            color: #666;
            background: rgba(255, 255, 255, 0.9);
            padding: 5px 10px;
            border-radius: 15px;
            z-index: 6;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php $this->load->view('mobile/header') ?>

        <div id="container-heading">
            <h4 class="heading">Dokter</h4>
            <div class="line-heading"></div>
            <p class="desc-heading">Berikut adalah daftar dokter yang praktik di Klinik Mata dr. Sjamsu, sebuah klinik mata terkemuka di Surabaya yang dikenal dengan pelayanan profesional dan teknologi canggih untuk perawatan kesehatan mata.</p>
        </div>
    
        <div id="dokter" class="container text-center">
            <h2 class="fw-bold">Tim Dokter Kami</h2>
            <div id="doctorCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach($data_dokter as $index => $dokter): ?>
                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                            <div class="card-dokter">
                                <a href="<?php echo site_url('Mobile/detail_dokter/' . $dokter->doctor_id); ?>">
                                    <img src="<?php echo base_url('asset/' . $dokter->doctor_photo_open); ?>" class="d-block w-100" alt="Dokter">
                                </a>
                                <div class="desc-dokter">
                                    <h5 class="mt-2 fw-bold"><?php echo $dokter->doctor_name; ?></h5>
                                    <p><?php echo $dokter->doctor_id_position; ?></p>
                                </div>
                                <a href="<?php echo site_url('Mobile/detail_dokter/' . $dokter->doctor_id); ?>" style="width: 100%; display: flex; justify-content: center; text-decoration: none;">
                                    <button class="btn-jadwal"><i class="fa-solid fa-book-open-reader"></i> Detail</button>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Tombol navigasi -->
                <button class="custom-carousel-nav custom-carousel-prev" type="button" data-bs-target="#doctorCarousel" data-bs-slide="prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="custom-carousel-nav custom-carousel-next" type="button" data-bs-target="#doctorCarousel" data-bs-slide="next">
                    <i class="fas fa-chevron-right"></i>
                </button>
                
                <!-- Indikator dengan maksimal 3 dot -->
                <div class="carousel-indicators limited-indicators" id="limitedIndicators">
                    <!-- Dots akan diisi dengan JavaScript -->
                </div>

                <!-- Counter untuk menunjukkan posisi -->
                <div class="carousel-counter" id="carouselCounter">
                    1 / <?php echo count($data_dokter); ?>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view("mobile/footer"); ?>
    
    <!-- Bootstrap dan Font Awesome -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('#doctorCarousel');
            const carouselItems = document.querySelectorAll('#doctorCarousel .carousel-item');
            const indicatorsContainer = document.getElementById('limitedIndicators');
            const counterElement = document.getElementById('carouselCounter');
            
            const totalSlides = carouselItems.length;
            const maxVisibleDots = 3;
            let currentSlide = 0;

            // Fungsi untuk membuat indikator
            function createIndicators() {
                indicatorsContainer.innerHTML = '';
                
                // Buat semua indikator tapi sembunyikan
                for (let i = 0; i < totalSlides; i++) {
                    const button = document.createElement('button');
                    button.type = 'button';
                    button.setAttribute('data-bs-target', '#doctorCarousel');
                    button.setAttribute('data-bs-slide-to', i);
                    button.setAttribute('aria-label', `Slide ${i + 1}`);
                    
                    if (i === 0) {
                        button.classList.add('active');
                        button.setAttribute('aria-current', 'true');
                    }
                    
                    indicatorsContainer.appendChild(button);
                }
                
                updateVisibleIndicators();
            }

            // Fungsi untuk update indikator yang terlihat
            function updateVisibleIndicators() {
                const indicators = indicatorsContainer.querySelectorAll('button');
                
                // Sembunyikan semua indikator
                indicators.forEach(indicator => {
                    indicator.classList.remove('visible');
                });

                if (totalSlides <= maxVisibleDots) {
                    // Jika total slide <= 3, tampilkan semua
                    indicators.forEach(indicator => {
                        indicator.classList.add('visible');
                    });
                } else {
                    // Logika untuk menampilkan maksimal 3 dot
                    let startIndex, endIndex;
                    
                    if (currentSlide === 0) {
                        // Di awal: tampilkan 3 pertama
                        startIndex = 0;
                        endIndex = 2;
                    } else if (currentSlide === totalSlides - 1) {
                        // Di akhir: tampilkan 3 terakhir
                        startIndex = totalSlides - 3;
                        endIndex = totalSlides - 1;
                    } else {
                        // Di tengah: tampilkan current dan 1 sebelum/sesudah
                        startIndex = Math.max(0, currentSlide - 1);
                        endIndex = Math.min(totalSlides - 1, currentSlide + 1);
                    }
                    
                    for (let i = startIndex; i <= endIndex; i++) {
                        indicators[i].classList.add('visible');
                    }
                }
            }

            // Fungsi untuk update counter
            function updateCounter() {
                counterElement.textContent = `${currentSlide + 1} / ${totalSlides}`;
            }

            // Event listener untuk perubahan slide
            carousel.addEventListener('slide.bs.carousel', function(event) {
                currentSlide = event.to;
                
                // Update active indicator
                const indicators = indicatorsContainer.querySelectorAll('button');
                indicators.forEach((indicator, index) => {
                    indicator.classList.toggle('active', index === currentSlide);
                    if (index === currentSlide) {
                        indicator.setAttribute('aria-current', 'true');
                    } else {
                        indicator.removeAttribute('aria-current');
                    }
                });
                
                updateVisibleIndicators();
                updateCounter();
            });

            // Inisialisasi
            createIndicators();
            updateCounter();

            // Inisialisasi Bootstrap Carousel
            new bootstrap.Carousel(carousel, {
                interval: 4000,
                wrap: true
            });
        });
    </script>
</body>
</html>