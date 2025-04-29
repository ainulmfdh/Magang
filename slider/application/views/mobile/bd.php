<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter & Berita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
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
    </style>
</head>
<body>
<div id="dokter" class="container text-center">
    <h2 class="fw-bold">Tim Dokter Kami</h2>
    <div id="doctorCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card-dokter">
                    <img src="asset/dokter.png" class="d-block w-100" alt="Dokter 1">
                    <div class="desc-dokter">
                        <h5 id="text-dokter" class="mt-2 fw-bold">dr. Ria Sandy Deneska, Sp.M(K)</h5>
                        <p>Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                    </div>
                    <button class="btn-jadwal"><i class="fa-solid fa-book-open-reader"></i> Detail</button>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card-dokter">
                    <img src="<?= base_url ('asset/dokter2.png');?>" alt="Dokter 2">
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

<div class="container-berita text-center">
    <h2 class="fw-bold">Berita Terbaru</h2>
    <div id="beritaCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="card-berita">
				<img src="asset/berita.png" class="d-block w-100" alt="Berita 1">
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
					<img src="asset/berita.png" class="d-block w-100" alt="Berita 2">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
