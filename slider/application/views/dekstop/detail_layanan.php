<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skrining & Check Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: #f5f9fa;
        }
        
        .hero {
            background-color: #f0f8f9;
            padding: 80px 0;
            text-align: center;
        }
        
        .hero h1 {
            color: #20B2AA;
            font-weight: bold;
            font-size: 32px;
            margin-bottom: 20px;
        }
        
        .content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        
        .service {
            display: flex;
            margin-bottom: 40px;
            align-items: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .service-img {
            width: 30%;
        }
        
        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        
        .service-text {
            padding: 30px;
            width: 70%;
        }
        
        .service-text h2 {
            color: #20B2AA;
            margin-bottom: 15px;
            font-size: 22px;
        }
        
        .service-text p {
            color: #555;
            line-height: 1.6;
            
        }
        
        .section {
            margin-bottom: 50px;
        }
        
        .section-icon {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-icon i {
            color:#20B2AA;
            font-size: 30px;
        }
        
        .section-icon h2 {
            color: #20B2AA;
            margin-left: 10px;
            font-size: 22px;
        }
        
        .section-content {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .section-content h3 {
            color: #333;
            font-size: 18px;
            margin-bottom: 15px;
            background-color: #f0f8f9;
            padding: 10px 15px;
            border-radius: 4px;
        }
        
        .section-content p {
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .section-content ul {
            margin-bottom: 20px;
            margin-left: 20px;
        }
        
        .section-content li {
            color: #555;
            line-height: 1.8;
            margin-bottom: 10px;
        }
        
        .section-content li strong {
            display: block;
            margin-bottom: 5px;
        }
        
        .section-content li p {
            margin-left: 20px;
            font-size: 14px;
            margin-bottom: 10px;
        }
        
        .color-accent {
            color: #20B2AA;
        }
    </style>
</head>
<body> 
    <?php $this->load->view('dekstop/header'); ?>
    <section class="hero">
        <h1>Skrining & Check Up</h1>
    </section>
    
    <div class="content">
        <div class="service">
            <div class="service-img">
                <img src="../../../asset/layanan.png" alt="Pemeriksaan Mata">
            </div>
            <div class="service-text">
                <h2>Deteksi Dini untuk Mencegah Masalah Mata yang Lebih Serius</h2>
                <p>Kami menyediakan layanan skrining mata untuk mendeteksi berbagai gangguan penglihatan seperti rabun jauh/dekat, katarak, glaukoma, dan kelainan retina. Dengan pemeriksaan cepat dan hasil akurat, kami bantu Anda mengambil langkah preventif sebelum kondisi memburuk.</p>
            </div>
        </div>
        
        <div class="section">
            <div class="section-icon">
                <i class="fa-solid fa-magnifying-glass"></i>
                <h2>Deteksi Dini</h2>
            </div>
            <div class="section-content">
                <h3>Deteksi Dini untuk Penglihatan yang Lebih Baik</h3>
                <p>Kesehatan mata sering kali diabaikan sampai gangguan penglihatan mulai mengganggu aktivitas sehari-hari. Padahal, banyak masalah mata dapat dicegah atau dikendalikan jika dideteksi sejak dini. Di Klinik Mata Sri Spanu, kami menghadirkan layanan skrining mata komprehensif yang bertujuan untuk mengidentifikasi berbagai potensi masalah mata sebelum berkembang menjadi kondisi serius.</p>
                
                <p>Skrining mata kami mencakup pemeriksaan untuk mendeteksi rabun jauh (miopia), rabun dekat (hipermetropi), astigmatisme, serta kelainan refraksi lainnya yang umum terjadi. Tak hanya itu, kami juga melakukan pemeriksaan menyeluruh untuk mendeteksi kelainan mata yang lebih kompleks seperti katarak, glaukoma, dan gangguan retina – yang sering kali tidak menunjukkan gejala awal namun dapat menyebabkan kebutaan permanen jika tidak ditangani.</p>
                
                <p>Dengan perangkat diagnosis modern dan prosedur yang efisien, kami menjamin hasil pemeriksaan yang akurat, cepat, dan nyaman. Tim profesional kami siap membantu Anda mengambil langkah preventif melalui edukasi, pengobatan berbasis dan penggunaan media yang sesuai dengan kebutuhan mata Anda.</p>
            </div>
        </div>
        
        <div class="section">
            <div class="section-icon">
                <i class="fa-regular fa-file-lines"></i>
                <h2>Skrining</h2>
            </div>
            <div class="section-content">
                <h3>Apa Saja yang Diperiksa dalam Layanan Skrining Kami?</h3>
                <p>Berikut adalah beberapa komponen penting dalam proses skrining mata di klinik kami:</p>
                <ul>
                    <li>
                        <strong>Pemeriksaan Ketajaman Penglihatan (Visus)</strong>
                        <p>Mengetahui seberapa baik Anda dapat melihat dari jarak jauh dan dekat.</p>
                    </li>
                    <li>
                        <strong>Pemeriksaan Refraksi</strong>
                        <p>Untuk mendeteksi kelainan seperti miopia, hipermetrop, dan astigmatisme.</p>
                    </li>
                    <li>
                        <strong>Pengukuran Tekanan Bola Mata</strong>
                        <p>Untuk mendeteksi risiko glaukoma sejak dini.</p>
                    </li>
                    <li>
                        <strong>Pemeriksaan Lensa dan Retina Mata</strong>
                        <p>Untuk mengetahui kondisi lensa mata (katarak) dan bagian belakang mata (retina) yang sangat penting bagi penglihatan.</p>
                    </li>
                    <li>
                        <strong>Anamnesis Riwayat Kesehatan Mata</strong>
                        <p>Kami mencatat keluhan, riwayat kesehatan mata, dan kondisi medis yang berpotensi mempengaruhi kesehatan penglihatan Anda.</p>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="section">
            <div class="section-icon">
                <i class="fa-solid fa-brain"></i>
                <h2>Pentingnya Deteksi Dini</h2>
            </div>
            <div class="section-content">
                <h3>Mengapa Deteksi Dini Ini Penting?</h3>
                <p>Beberapa kondisi mata berkembang tanpa gejala awal yang jelas. Oleh karena itu, pemeriksaan rutin sangat penting untuk mencegah kerusakan yang tidak dapat dipulihkan. Misalnya:</p>
                <ul>
                    <li>Katarak berkembang perlahan dan mengaburkan lensa mata.</li>
                    <li>Glaukoma sering disebut sebagai "silent thief of sight" karena kerusakan saraf mata berlangsung tanpa disadari.</li>
                    <li>Kelainan retina bisa mengganggu penglihatan sentral jika tidak tertangani dengan tepat.</li>
                </ul>
                <p>Dengan melakukan skrining rutin, Anda memiliki peluang lebih besar untuk mempertahankan penglihatan sehat hingga usia lanjut.</p>
            </div>
        </div>
        
        <div class="section">
            <div class="section-icon">
                <i class="fa-regular fa-calendar"></i>
                <h2>Kapan</h2>
            </div>
            <div class="section-content">
                <h3>Kapan Harus Melakukan Skrining Mata?</h3>
                <p>Kami menyarankan Anda untuk melakukan skrining mata secara berkala, terutama jika:</p>
                <ul>
                    <li>Berusia di atas 40 tahun</li>
                    <li>Memiliki riwayat keluarga dengan penyakit mata</li>
                    <li>Mengalami gejala seperti pandangan buram, silau, mata lelah, atau sakit kepala</li>
                    <li>Mengidap diabetes atau hipertensi yang berisiko mempengaruhi kesehatan mata</li>
                    <li>Anak-anak yang mulai kesulitan membaca atau menonton TV dari jarak normal</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>