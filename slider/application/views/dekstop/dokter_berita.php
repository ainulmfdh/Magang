<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter & Berita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        /* .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        } */
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
    </style>
</head>
<body>
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
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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