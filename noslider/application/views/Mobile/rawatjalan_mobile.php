<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rawat Jalan - Klinik Mata Dr. Sjamsu</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
			font-family: Arial, sans-serif;
            box-sizing: border-box;
        }
	body {
      background-color:rgb(255, 255, 255);
      padding-bottom: 20px;
    }
    
    /* Breadcrumb Start */
     .breadcrumb {
            background-color: #F2FBFB;
            padding: 15px 20px;
        }
        
        .breadcrumb a {
            text-decoration: none;
            color: #333;
        }
        
        .breadcrumb .active {
            color: #00b7c2;
        }
    /* Breadcrumb End */
    
    /* Main container with flexbox */
    .main-wrapper {
      display: flex;
      min-height: calc(100vh - 50px);
      gap: 20px;
      padding: 20px;
    }
    
    /* Custom styling for the services cards */
    .services-container {
      width: 350px;
      flex-shrink: 0;
      position: sticky;
      top: 10px;
      left: 20px;
      height: calc(100vh - 90px);
      overflow-y: auto;
      z-index: 10;
    }
    

        .container_desk {
            flex: 1;
            padding: 20px;
            max-width: none;
            margin-left: 30px; /* Width of sidebar + gap */
        }

        .header {
            color: #00aab5;
            padding: 20px 0;
            text-align: left;
            margin-bottom: 20px;
            border-radius: 10px;
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            text-decoration: underline;
            text-decoration-color: #00aab5;
            line-height: 1.2;
        }

        .header p {
            font-size: 18px;
			color: #333;
            opacity: 0.9;
            line-height: 1.6;
			text-align: justify;
        }

        .content-section {
            padding: 20px 0;
            margin-bottom: 30px;
        }

        .section-title {
            color: #00aab5;
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 15px;
            padding-bottom: 10px;
			text-decoration: underline;
            text-decoration-color: #00aab5;
        }

        .highlight-text {
            background: #e0f7fa;
            padding: 20px;
            border-left: 4px solid #00aab5;
            margin: 20px 0;
            font-weight: 500;
            font-size: 18px;
            line-height: 1.6;
            text-align: justify;
        }

		.highlight-text > p {
			text-align: justify;
		}
        /* Image Layout Styles - Modified for side-by-side layout */
        .content-with-image {
            display: flex;
            gap: 25px;
            align-items: stretch;
            margin-top: 20px;
        }

        .text-content {
            flex: 2;
            font-size: 18px;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            padding-right: 10px;
        }

        .text-content p {
            margin: 0;
            text-align: justify;
        }

        .image-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            object-fit: cover;
        }

        .image-caption {
            margin-top: 10px;
            font-style: italic;
            color: #666;
            font-size: 0.9rem;
        }

				.sidebar {
            width: 280px;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .nav-item {
            border-bottom: 1px solid #e9ecef;
        }
        
        .nav-item:last-child {
            border-bottom: none;
        }
        
        .nav-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 20px;
            cursor: pointer;
            background: white;
            transition: all 0.2s ease;
            font-weight: 500;
            color: #333;
        }
        
        .nav-header:hover {
            background-color: #f8f9fa;
        }
        
        .nav-header.active {
            background-color: #f8f9fa;
        }
        
        .nav-title {
            font-size: 15px;
        }
        
        .nav-arrow {
            width: 16px;
            height: 16px;
            transition: transform 0.2s ease;
            color: #666;
        }
        
        .nav-arrow.expanded {
            transform: rotate(90deg);
        }
        
        .nav-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            background-color: #fafafa;
        }
        
        .nav-content.show {
            max-height: 300px;
        }
        
        .nav-submenu {
            padding: 0;
        }
        
        .nav-submenu li {
            list-style: none;
        }
        
        .nav-submenu a {
            display: block;
            padding: 12px 20px 12px 40px;
            color: #666;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.2s ease;
            border-left: 3px solid transparent;
        }
        
        .nav-submenu a:hover {
            background: #e0f7fa;
            color: #333;
            border-left: 4px solid #00aab5;
        }
        
        .simple-nav {
            display: flex;
            align-items: center;
            padding: 16px 20px;
            color: #333;
            text-decoration: none;
            font-weight: 500;
            font-size: 15px;
            transition: all 0.2s ease;
        }
        
        .simple-nav:hover {
            background-color: #f8f9fa;
            color: #333;
        }
        
        .nav-arrow svg {
            width: 16px;
            height: 16px;
        }



        /* Tablet styles */
        @media (max-width: 992px) {
            .main-wrapper {
                flex-direction: column;
                padding: 15px;
            }
            
            .services-container {
                width: 100%;
                position: relative;
                top: auto;
                left: auto;
                height: auto;
                margin-bottom: 20px;
            }
            
            .container_desk {
                margin-left: 0;
                padding: 15px;
            }
            
            .header {
                padding: 15px 0;
                text-align: center;
            }
            
            .header h1 {
                font-size: 2.2rem;
            }
            
            .header p {
                font-size: 16px;
            }

            .content-with-image {
                flex-direction: column;
                gap: 20px;
            }

            .text-content {
                padding-right: 0;
                font-size: 16px;
            }

            .image-container {
                flex: none;
                margin-top: 0;
                min-width: auto;
                max-width: 100%;
                align-self: center;
            }

            .image-container img {
                max-width: 400px;
                width: 100%;
            }

            .section-title {
                font-size: 1.6rem;
            }

            .highlight-text {
                font-size: 16px;
                padding: 15px;
            }
        }
        
        /* Mobile styles */
        @media (max-width: 768px) {
            .breadcrumb {
                padding: 12px 15px;
                font-size: 14px;
            }

            .main-wrapper {
                padding: 15px;
                gap: 15px;
            }
            
            .services-container {
                width: 100%;
                position: relative;
                top: auto;
                left: auto;
                height: auto;
                margin: 0 auto 20px auto;
                display: flex;
                justify-content: center;
            }

            .sidebar {
                width: 90%;
                max-width: 350px;
            }
            
            .container_desk {
                margin-left: 0;
                padding: 0;
            }
            
            .header {
                padding: 20px 15px;
                text-align: center;
                margin-bottom: 15px;
            }
            
            .header h1 {
                font-size: 1.8rem;
                margin-bottom: 12px;
                line-height: 1.2;
            }
            
            .header p {
                font-size: 15px;
                line-height: 1.5;
                text-align: justify;
            }

            .content-section {
                padding: 15px;
                margin-bottom: 20px;
            }

            .section-title {
                font-size: 1.4rem;
                margin-bottom: 12px;
                text-align: center;
            }

            .highlight-text {
                font-size: 15px;
                padding: 15px;
                margin: 15px 0;
                text-align: center;
            }

            .content-with-image {
                flex-direction: column;
                gap: 15px;
            }

            .text-content {
                font-size: 15px;
                line-height: 1.5;
                text-align: justify;
            }

            .image-container {
                width: 100%;
                max-width: 100%;
                text-align: center;
                margin: 0 auto;
            }

            .image-container img {
                width: 100%;
                height: auto;
                margin: 0 auto;
                display: block;
            }

            .image-caption {
                font-size: 0.85rem;
                margin-top: 8px;
                text-align: center;
            }
        }

        /* Extra small mobile */
        @media (max-width: 480px) {
            .main-wrapper {
                padding: 10px;
            }

            .header {
                padding: 15px 10px;
            }

            .header h1 {
                font-size: 1.6rem;
            }

            .header p {
                font-size: 14px;
            }

            .content-section {
                padding: 10px;
            }

            .section-title {
                font-size: 1.3rem;
            }

            .highlight-text {
                font-size: 14px;
                padding: 12px;
            }

            .text-content {
                font-size: 14px;
            }

            .image-container img {
                width: 100%;
            }

            .breadcrumb {
                padding: 10px 12px;
            }
        }
    </style>
</head>
<body>
	 <div class="breadcrumb">
        <a href="#">Beranda</a> &gt; <span class="active">Pelayanan</span>
    </div>

  <div class="main-wrapper">

    <div class="services-container">
	 <div class="sidebar">
        <!-- Home with submenu -->
        <div class="nav-item">
            <div class="nav-header" onclick="toggleNav(this)">
                <span class="nav-title">Skrining & Check Up</span>
                <span class="nav-arrow">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12l-4.58 4.59z"/>
                    </svg>
                </span>
            </div>
            <div class="nav-content">
                <ul class="nav-submenu">
                    <li><a href="<?= site_url('Layanan'); ?>">Check Up Rutin</a></li>
                    <li><a href="<?= site_url('Layanan'); ?>">Skrining Amblyopia</a></li>
                    <li><a href="<?= site_url('Layanan'); ?>">Skrining Retinopati Diabetik</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Dashboard with submenu -->
        <div class="nav-item">
            <div class="nav-header" onclick="toggleNav(this)">
                <span class="nav-title">Rawat Jalan</span>
                <span class="nav-arrow">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12l-4.58 4.59z"/>
                    </svg>
                </span>
            </div>
            <div class="nav-content">
                <ul class="nav-submenu">
                    <li><a href="#ksl">Konsultasi</a></li>
                    <li><a href="#pd">Pemeriksaan Dasar</a></li>
                    <li><a href="#kmk">Klinik Mata Katarak</a></li>
                    <li><a href="#kms">Klinik Mata Retina</a></li>
                    <li><a href="#glaucoma">Klinik Mata Glaucoma</a></li>
                    <li><a href="#anak">Klinik Mata Anak</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Orders with submenu -->
        <div class="nav-item">
            <div class="nav-header" onclick="toggleNav(this)">
                <span class="nav-title">Tindakan Diagnostik</span>
                <span class="nav-arrow">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12l-4.58 4.59z"/>
                    </svg>
                </span>
            </div>
            <div class="nav-content">
                <ul class="nav-submenu">
                    <li><a href="#foto">Foto Fundus</a></li>
                    <li><a href="#oct">Optical Coherence Tomography (OCT)</a></li>
                    <li><a href="#humphrey">Humphrey (HVFA)</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Account with submenu -->
        <div class="nav-item">
            <div class="nav-header" onclick="toggleNav(this)">
                <span class="nav-title">Tindakan Laser</span>
                <span class="nav-arrow">
                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12l-4.58 4.59z"/>
                    </svg>
                </span>
            </div>
            <div class="nav-content">
                <ul class="nav-submenu">
                    <li><a href="#ndyag">NdYAG Laser</a></li>
                    <li><a href="#laser">Laser Retina</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    
    <div class="container_desk">
        <div class="header">
            <h1>Rawat Jalan</h1>
            <p>Klinik Mata dr. Sjamsu turut berkontribusi dalam pencegahan gangguan kesehatan mata salah satunya dengan memberikan pelayanan berupa skrining dan check-up berkala. Skrining bertujuan untuk mendeteksi lebih awal suatu gejala sehingga bisa dilakukan tindakan pencegahan agar gangguan tidak semakin parah dan pengobatan bisa lebih optimal. Untuk mengetahui lebih lanjut tentang skrining apa saja yang ada di Klinik Mata dr. Sjamsu, pilih salah satu pelayanan skrining dibawah ini:</p>
        </div>

        <div class="content-section">
			<section id="ksl">
            <h2 class="section-title">Konsultasi</h2>
			<div class="image-container">
                    <img src="<?= base_url('asset/images/berobat.jpg'); ?>" alt="Klinik Mata Katarak">
                    <div class="image-caption">Klinik Mata Katarak</div>
                </div>
            <div class="highlight-text">
                <p>Lakukan check up rutin minimal 6 bulan atau setahun sekali untuk mengontrol kondisi penglihatan Anda.</p>
            </div>
            
             <div class="content-with-image">
                <div class="text-content">
                    <p>Medical Check-Up (MCU) sangat penting dilakukan untuk mengantisipasi dan mencegah timbulnya gangguan kesehatan mata. Di Klinik Mata dr. Sjamsu, kami memberikan pelayanan untuk check up rutin baik bagi perorangan, perusahaan, maupun institusi pendidikan. Kami juga menyediakan paket medical checkup dengan harga terjangkau dan program-program pemeriksaan. Dengan adanya layanan medical checkup bisa diketahui gangguan-gangguan dan deteksi dini agar tidak semakin parah dan pengobatan bisa berjalan optimal.</p>
                </div>
            </div>
			</section>
        </div>

      <div class="content-section">
			<section id="pd">
            <h2 class="section-title">Pemeriksaan Dasar</h2>
			<div class="image-container">
                    <img src="<?= base_url('asset/images/tes-mata.jpg'); ?>" alt="Klinik Mata Katarak">
                    <div class="image-caption">Klinik Mata Katarak</div>
                </div>
            <div class="highlight-text">
                <p>Pemeriksaan mata lebih objektif, efisien, dan terjangkau di Klinik Mata dr. Sjamsu. Dilakukan dengan dokter yang terintegrasi pemeriksaan mata tidak mengganggu pasien dengan sempit.</p>
            </div>
			
              <div class="content-with-image">
                <div class="text-content">
                    <p>Pemeriksaan mata umum di Klinik Mata dr. Sjamsu meliputi pemeriksaan dasar, pengukuran tekanan bola mata hingga konsultasi dokter. Klinik Mata dr. Sjamsu memberikan teknologi canggih untuk memberikan pemeriksaan dan hasil pemeriksaan yang akurat dan efisien. Bukan hanya saat seseorang sudah mengalami gangguan kesehatan, di Klinik Mata kami terapi saja mencegah gangguan kesehatan mata yang lebih parah. Klinik Mata dr. Sjamsu menggunakan pendekatan pencegahan komprehensif yang perlengkapan efisien untuk memudahkan dalam database pasien dan penyimpanan rawat pasien. Klinik Mata dr. Sjamsu menggunakan teknologi yang canggih dan terbaru besar untuk meningkatkan kualitas hidup seseorang. Ini berbagai mata tidak perlu mengkhawatirkan untuk memperoleh layanan yang berkualitas tinggi dan berteknologi.</p>
                </div>
            </div>
            </section>
      </div>

      <div class="content-section">
			<section id="kmk">
            <h2 class="section-title">Klinik Mata Katarak</h2>
			<div class="image-container">
                    <img src="<?= base_url('asset/images/berobat.jpg'); ?>" alt="Klinik Mata Katarak">
                    <div class="image-caption">Klinik Mata Katarak</div>
                </div>
            <div class="highlight-text">
                <p>Didukung dengan tim dokter spesialis mata professional, fasilitas dan peralatan canggih tim Klinik Mata dr. Sjamsu siap untuk mengatasi masalah retinopati diabetik pada mata Anda.</p>
            </div>
			
             <div class="content-with-image">
                <div class="text-content">
                    <p>Tindakan operatif katarak di Klinik Mata dr. Sjamsu didukung dengan fasilitas kamar tindakan dan peralatan teknologi canggih. Peralatan yang menunjang tindakan antara lain surgical microscope for cataract surgery, Infiniti, dan Compact. Selain itu, Klinik kami memiliki tim dokter professional yang ahli dalam bidang bedah refraktif. Tindakan operatif yang dilakukan menggunakan teknik terkini yaitu fakoemulsifikasi, dimana proses recovery berlangsung singkat. Kini tak perlu takut untuk melakukan tindakan operatif katarak di Klinik Mata dr. Sjamsu, karena prosesnya singkat dengan harga yang terjangkau. Klinik Mata dr. Sjamsu memberikan pelayanan mulai dari pemeriksaan pre-operatif katarak, tindakan operatif hingga konsultasi pasca tindakan.</p>
                </div>
            </div>
            </section>
        </div>
        
         <div class="content-section">
			<section id="kms">
            <h2 class="section-title">Klinik Mata Katarak</h2>
			    <div class="image-container">
                    <img src="<?= base_url('asset/images/mata.jpg'); ?>" alt="Klinik Mata Katarak">
                    <div class="image-caption">Klinik Mata Katarak</div>
                </div>
            <div class="highlight-text">
                <p>Didukung dengan tim dokter spesialis mata professional, fasilitas dan peralatan canggih tim Klinik Mata dr. Sjamsu siap untuk mengatasi masalah katarak pada mata Anda.</p>
            </div>
            <div class="content-with-image">
                <div class="text-content">
                    <p>Tindakan operatif katarak di Klinik Mata dr. Sjamsu didukung dengan fasilitas kamar tindakan dan peralatan teknologi canggih. Peralatan yang menunjang tindakan antara lain surgical microscope for cataract surgery, Infiniti, dan Compact. Selain itu, Klinik kami memiliki tim dokter professional yang ahli dalam bidang bedah refraktif. Tindakan operatif yang dilakukan menggunakan teknik terkini yaitu fakoemulsifikasi, dimana proses recovery berlangsung singkat. Kini tak perlu takut untuk melakukan tindakan operatif katarak di Klinik Mata dr. Sjamsu, karena prosesnya singkat dengan harga yang terjangkau. Klinik Mata dr. Sjamsu memberikan pelayanan mulai dari pemeriksaan pre-operatif katarak, tindakan operatif hingga konsultasi pasca tindakan.</p>
                </div>
            </div>
            </section>
      </div>
    </div>
  </div>
	 <script>
    function toggleNav(header) {
            const content = header.nextElementSibling;
            const arrow = header.querySelector('.nav-arrow');
            
            // Close all other open navs
            document.querySelectorAll('.nav-content.show').forEach(openContent => {
                if (openContent !== content) {
                    openContent.classList.remove('show');
                    openContent.previousElementSibling.classList.remove('active');
                    openContent.previousElementSibling.querySelector('.nav-arrow').classList.remove('expanded');
                }
            });
            
            // Toggle current nav
            content.classList.toggle('show');
            header.classList.toggle('active');
            arrow.classList.toggle('expanded');
        }

        function scrollToSection(sectionId) {
            if (sectionId) {
                const element = document.getElementById(sectionId);
                if (element) {
                    element.scrollIntoView({ 
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        }
        
        // Initialize with Home expanded (as shown in the image)
        document.addEventListener('DOMContentLoaded', function() {
            const homeHeader = document.querySelector('.nav-header');
            const homeArrow = homeHeader.querySelector('.nav-arrow');
            homeHeader.classList.add('active');
            homeArrow.classList.add('expanded');
        });
  </script>
</body>
</html>
