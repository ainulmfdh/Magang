<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter Page</title>
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
        }
        
        .carousel-indicators .active {
            background-color: rgba(0, 170, 181, 1) !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php $this->load->view('mobile/header') ?>

        <div id="container-heading">
            <h4 class="heading">Dokter</h4>
            <div class="line-heading"></div>
            <p class="desc-heading">Berikut adalah daftar dokter yang praktik di Klinik Mata dr. Sjamsu, sebuah klinik mata terkemuka di Surabaya yang dikenal dengan pelayanan profesional dan teknologi canggih untuk perawatan kesehatan mata. Klinik ini menawarkan berbagai layanan, termasuk konsultasi, pemeriksaan dasar, serta perawatan khusus untuk kondisi seperti katarak, glaukoma, gangguan retina, dan masalah mata pada anak</p>
        </div>
    
        <div id="dokter" class="container text-center">
                    <h2 class="fw-bold">Tim Dokter Kami</h2>
                    <div id="doctorCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card-dokter">
                                    <img src=".../../../../asset/dokter.png" class="d-block w-100" alt="Dokter 1">
                                    <div class="desc-dokter">
                                        <h5 id="text-dokter" class="mt-2 fw-bold">dr. Ria Sandy Deneska, Sp.M(K)</h5>
                                        <p>Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                                    </div>
                                    <button class="btn-jadwal"><i class="fa-solid fa-book-open-reader"></i> Detail</button>
                                </div>
                            </div>
                            <?php foreach($data_dokter as $dokter): ?>
                                <div class="carousel-item">
                                    <div class="card-dokter">
                                        <img src="<?php echo base_url('../asset/' . $dokter->doctor_photo_open); ?>" alt="Dokter">
                                        <div class="desc-dokter">
                                            <h5 id="text-dokter" class="mt-2 fw-bold"><?php echo $dokter->doctor_name; ?></h5>
                                            <p><?php echo $dokter->doctor_id_position; ?></p>
                                        </div>
                                        <button class="btn-jadwal"><i class="fa-solid fa-book-open-reader"></i> Detail</button>
                                    </div>
                                </div>
                            <?php endforeach ?>
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
        </div>
    
    <script>
        new bootstrap.Carousel(document.querySelector('#doctorCarousel'), {
            interval: 3000, wrap: true
        });
    </script>
</body>
</html>