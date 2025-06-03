<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rawat Jalan - Klinik Mata Dr. Sjamsu</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
    /* Breadcrumb Start */
    .breadcrumb {
            background-color: #F2FBFB;
            padding: 15px 40px;
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
      z-index: 1000;
    }
    

        .container_desk {
            flex: 1;
            padding: 20px;
            max-width: none;
            margin-left: 30px;
        }

        .header {
            color: #00aab5;
            padding: 2px 0;
            text-align: left;
            margin-bottom: 2px;
            border-radius: 10px;
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-decoration: underline;
            text-decoration-color: #00aab5;
        }

        .header p {
            font-size: 1.1rem;
			color: #333;
            opacity: 0.9;
            max-width: 800px;
        }

        .content-section {
            padding: 10px;
        }

        .section-title {
            color: #00aab5;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 5px;
            padding-bottom: 5px;
			text-decoration: underline;
            text-decoration-color: #00aab5;
        }

        .highlight-text {
            background: #e0f7fa;
            padding: 15px;
            border-left: 4px solid #00aab5;
            margin: 15px 0;
            font-weight: 500;
        }
				.sidebar {
            width: 280px;
            background: white;
            border-radius: 8px;
            overflow: hidden;
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


        @media (max-width: 992px) {
            .main-wrapper {
                flex-direction: column;
            }
            
            .services-container {
                width: 100%;
                position: relative;
                top: auto;
                left: auto;
                height: auto;
                margin-bottom: 20px;
            }
            
            .container {
                margin-left: 0;
            }
            
            .header h1 {
                font-size: 2rem;
            }
            
            .content-section {
                padding: 20px;
            }
        }
        
        @media (max-width: 768px) {
            .main-wrapper {
                padding: 10px;
                gap: 10px;
            }
            
            .services-container {
                position: relative;
                top: auto;
                left: auto;
                height: auto;
            }
            
            .container {
                margin-left: 0;
            }
            
            .header h1 {
                font-size: 1.8rem;
            }
            
            .container {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
	<div class="breadcrumb">
        <a href="<?= base_url('/') ; ?>">Beranda</a> &gt; <span class="active">Pelayanan</span>
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
                    <li><a href="<?= base_url('skrining'); ?>">Check Up Rutin</a></li>
                    <li><a href="<?= base_url('skrining'); ?>">Skrining Amblyopia</a></li>
                    <li><a href="<?= base_url('skrining'); ?>">Skrining Retinopati Diabetik</a></li>
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
            <div class="nav-content show">
                <ul class="nav-submenu">
                    <li><a href="#konsultasi">Konsultasi</a></li>
                    <li><a href="#pd">Pemeriksaan Dasar</a></li>
                    <li><a href="#kmk">Klinik Mata Katarak</a></li>
                    <li><a href="#kms">Klinik Mata Retina</a></li>
                    <li><a href="#">Klinik Mata Glaucoma</a></li>
                    <li><a href="#">Klinik Mata Anak</a></li>
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
                    <li><a href="#">Foto Fundus</a></li>
                    <li><a href="#">Optical Coherence Tomography (OCT)</a></li>
                    <li><a href="#">Humphrey (HVFA)</a></li>
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
                    <li><a href="#">NdYAG Laser</a></li>
                    <li><a href="#">Laser Retina</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    
    <div class="container_desk">
        <div class="header">
            <h1>Rawat Jalan</h1>
            <p>Pelayanan rawat jalan di Klinik Mata dr. Sjamsu meliputi konsultasi, pemeriksaan dasar, terapi mata hingga tindakan mata minor. Layanan langsung tindakan di mata-mata dengan ruang tunggu dan ruang pemeriksaan yang nyaman dan asri, tim kami siap memberikan pelayanan terbaik untuk kesehatan mata Anda. Untuk mengetahui lebih lanjut tentang perjalanan rawat jalan, silakan hubungi sub pelayanan di bawah ini:</p>
        </div>

        <div class="content-section">
			<section id="konsultasi">
            <h2 class="section-title">Konsultasi</h2>
            <div class="highlight-text">
                <p>Konsultasikan kesehatan mata Anda di Klinik Mata dr. Sjamsu. Tim dokter kami siap membantu seputar kesehatan Anda.</p>
            </div>
			 <p>Bukan hanya pelayanan untuk pemeriksaan, namun Klinik Mata dr. Sjamsu juga menyediakan layanan untuk konsultasi. Tim dokter kami yang profesional dan berpengalaman tinggi siap melayani pemeriksaan/konsultasi Anda seputar kesehatan mata dan gangguannya. Dilakukan dengan tenang pemeriksaan yang harus dilakukan sehingga dapat memberikan hasil yang optimal dan sesuai kebutuhan pasien. Jangan khawatir dan takut saat berhadapan dengan dokter. Dokter bisa memberikan saran terbaik yang sesuai dengan kondisi pasien, layanan konsultasi mata di klinik kami sudah termasuk dengan pemeriksaan dasar.</p>
			</section>
        </div>

      <div class="content-section">
			<section id="pd">
            <h2 class="section-title">Pemeriksaan Dasar</h2>
            <div class="highlight-text">
                Pemeriksaan mata lebih objektif, efisien, dan terjangkau di Klinik Mata dr. Sjamsu. Dilakukan dengan dokter yang terintegrasi pemeriksaan mata tidak mengganggu pasien dengan sempit.
            </div>
            <p>Pemeriksaan mata umum di Klinik Mata dr. Sjamsu meliputi pemeriksaan dasar, pengukuran tekanan bola mata hingga konsultasi dokter. Klinik Mata dr. Sjamsu memberikan teknologi canggih untuk memberikan pemeriksaan dan hasil pemeriksaan yang akurat dan efisien. Bukan hanya saat seseorang sudah mengalami gangguan kesehatan, di Klinik Mata kami terapi saja mencegah gangguan kesehatan mata yang lebih parah. Klinik Mata dr. Sjamsu menggunakan pendekatan pencegahan komprehensif yang perlengkapan efisien untuk memudahkan dalam database pasien dan penyimpanan rawat pasien. Klinik Mata dr. Sjamsu menggunakan teknologi yang canggih dan terbaru besar untuk meningkatkan kualitas hidup seseorang. Ini berbagai mata tidak perlu mengkhawatirkan untuk memperoleh layanan yang berkualitas tinggi dan berteknologi.</p>
			</section>
      </div>

      <div class="content-section">
			<section id="kmk">
            <h2 class="section-title">Klinik Mata Katarak</h2>
            <div class="highlight-text">
                Didukung dengan tim dokter spesialis mata professional, fasilitas dan peralatan canggih tim Klinik Mata dr. Sjamsu siap untuk mengatasi masalah katarak pada mata Anda.
            </div>
            <p>Tindakan operatif katarak di Klinik Mata dr. Sjamsu didukung dengan fasilitas kamar tindakan dan peralatan teknologi canggih. Peralatan yang menunjang tindakan antara lain surgical microscope for cataract surgery, Infiniti, dan Compact. Selain itu, Klinik kami memiliki tim dokter professional yang ahli dalam bidang bedah refraktif. Tindakan operatif yang dilakukan menggunakan teknik terkini yaitu fakoemulsifikasi, dimana proses recovery berlangsung singkat. Kini tak perlu takut untuk melakukan tindakan operatif katarak di Klinik Mata dr. Sjamsu, karena prosesnya singkat dengan harga yang terjangkau. Klinik Mata dr. Sjamsu memberikan pelayanan mulai dari pemeriksaan pre-operatif katarak, tindakan operatif hingga konsultasi pasca tindakan.</p>
			</section>
      </div>

      <div class="content-section">
			<section id="kms">
            <h2 class="section-title">Klinik Mata Katarak</h2>
            <div class="highlight-text">
                Didukung dengan tim dokter spesialis mata professional, fasilitas dan peralatan canggih tim Klinik Mata dr. Sjamsu siap untuk mengatasi masalah katarak pada mata Anda.
            </div>
            <p>Tindakan operatif katarak di Klinik Mata dr. Sjamsu didukung dengan fasilitas kamar tindakan dan peralatan teknologi canggih. Peralatan yang menunjang tindakan antara lain surgical microscope for cataract surgery, Infiniti, dan Compact. Selain itu, Klinik kami memiliki tim dokter professional yang ahli dalam bidang bedah refraktif. Tindakan operatif yang dilakukan menggunakan teknik terkini yaitu fakoemulsifikasi, dimana proses recovery berlangsung singkat. Kini tak perlu takut untuk melakukan tindakan operatif katarak di Klinik Mata dr. Sjamsu, karena prosesnya singkat dengan harga yang terjangkau. Klinik Mata dr. Sjamsu memberikan pelayanan mulai dari pemeriksaan pre-operatif katarak, tindakan operatif hingga konsultasi pasca tindakan.</p>
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
