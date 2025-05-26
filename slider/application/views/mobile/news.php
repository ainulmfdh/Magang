<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Berita Terkini</title>

  <!-- Font Awesome CDN (untuk ikon kalender) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


  <style>
    /* === CSS BERITA === */
    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
      background-color: #f5f9fa;
    }

    .berita-header {
      background-color: #f0f8f9;
      padding: 80px 0;
      text-align: center;
    }

    .berita-header h1 {
      color: #00aab5;
      margin: 0;
      font-weight: bold;
      font-size: 36px;
    }

    .berita-terkini {
      padding: 60px 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }

    .berita-title {
      color: #00aab5;
      font-size: 28px;
      margin-bottom: 15px;
      margin-right: 10px;
      margin-left: 10px;
    }

    .berita-subtitle {
      position: relative;
      margin-bottom: 30px;
      margin-right: 10px;
      margin-left: 10px;
    }

    .berita-subtitle::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -10px;
      width: 340px;
      height: 5px;
      background-color: #00aab5;
      border-radius: 2px;
    }

    .berita-description {
      max-width: 1000px;
      margin-bottom: 50px;
      margin-top: 50px;
      line-height: 1.6;
      margin-right: 10px;
      margin-left: 10px;
    }

    .berita-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
      margin-bottom: 30px;
    }

    @media (max-width: 992px) {
      .berita-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 768px) {
      .berita-grid {
        grid-template-columns: 1fr;
      }
    }

    .berita-card {
      margin-left: 10px;
      margin-right: 10px;
      background-color: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease;
    }

    .berita-card:hover {
      transform: translateY(-5px);
    }

    .berita-card-image {
      position: relative;
      height: 220px;
      overflow: hidden;
    }

    .berita-card-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .berita-card-content {
      padding: 20px;
    }

    .berita-card-date {
      color: #666;
      font-size: 14px;
      margin-bottom: 10px;
      display: flex;
      align-items: center;
    }

    .berita-card-date i {
      margin-right: 5px;
    }

    .berita-card-title {
      color: #00aab5;
      font-size: 18px;
      margin-bottom: 15px;
      font-weight: bold;
    }

    .berita-card-text {
      color: #333;
      font-size: 15px;
      margin-bottom: 20px;
      line-height: 1.5;
    }

    .berita-card-button {
      background-color: transparent;
      color: #00aab5;
      border: 1px solid #00aab5;
      border-radius: 50px;
      padding: 10px 25px;
      font-size: 15px;
      cursor: pointer;
      transition: all 0.3s ease;
      display: block;
      width: fit-content;
      text-decoration: none;
      margin: 0 auto;
    }

    .berita-card-button:hover {
      background-color: #00aab5;
      color: white;
    }
  </style>
</head>
<body>

  <!-- Header Berita -->
  <section class="berita-header">
    <h1>Berita</h1>
  </section>

  <!-- Berita Terkini Section -->
  <section class="berita-terkini">
    <div class="container">
      <h2 class="berita-title">Berita Terkini</h2>
      <div class="berita-subtitle"></div>
      <p class="berita-description">
        Berita dan informasi terkini seputar inovasi pelayanan kesehatan terintegrasi di Klinik Mata Dr.Sjamsu, termasuk pengembangan layanan dan teknologi terbaru yang mendukung pendekatan holistik dalam perawatan kesehatan mata.
      </p>

      <div class="berita-grid">
        <!-- Berita Card 1 -->
        <div class="berita-card">
          <div class="berita-card-image">
            <img src="../../../asset/cardberita1.png" alt="Pemeriksaan Mata">
          </div>
          <div class="berita-card-content">
            <div class="berita-card-date">
              <i class="fa-regular fa-calendar"></i>
              <span>10 Februari 2025</span>
            </div>
            <h3 class="berita-card-title">BAKTI SOSIAL OPERASI KATARAK GRUP NUSANTARA & KLINIK MATA DR. SJAMSU</h3>
            <p class="berita-card-text">Dalam upaya meningkatkan kualitas hidup masyarakat, Grup Nusantara bekerja sama dengan Klinik Mata Dr. Sjamsu menggelar bakti sosial operasi katarak bagi masyarakat.</p>
            <button class="berita-card-button">Baca Selengkapnya</button>
          </div>
        </div>

        <!-- Berita Card 2 -->
        <div class="berita-card">
          <div class="berita-card-image">
            <img src="../../../asset/cardberita2.png" alt="Pemeriksaan Mata">
          </div>
          <div class="berita-card-content">
            <div class="berita-card-date">
              <i class="fa-regular fa-calendar"></i>
              <span>20 Februari 2025</span>
            </div>
            <h3 class="berita-card-title">KLINIK MATA DR. SJAMSU GELAR PEMERIKSAAN MATA GRATIS UNTUK LANSIA</h3>
            <p class="berita-card-text">Klinik Mata Dr. Sjamsu menyelenggarakan pemeriksaan mata gratis khusus untuk lansia sebagai bagian dari program peduli kesehatan mata masyarakat usia lanjut.</p>
            <button class="berita-card-button">Baca Selengkapnya</button>
          </div>
        </div>

        <!-- Berita Card 3 -->
        <div class="berita-card">
          <div class="berita-card-image">
            <img src="../../../asset/cardberita3.png" alt="Pemeriksaan Mata">
          </div>
          <div class="berita-card-content">
            <div class="berita-card-date">
              <i class="fa-regular fa-calendar"></i>
              <span>05 Maret 2025</span>
            </div>
            <h3 class="berita-card-title">EDUKASI MENCEGAH RABUN JAUH SEJAK DINI DI SEKOLAH DASAR DAN MENEGAH</h3>
            <p class="berita-card-text">Tim medis dari Klinik Mata Dr. Sjamsu mengunjungi beberapa sekolah dasar untuk memberikan edukasi tentang pentingnya menjaga kesehatan mata dan deteksi dini rabun jauh.</p>
            <button class="berita-card-button">Baca Selengkapnya</button>
          </div>
        </div>

        <!-- Berita Card 4 -->
        <div class="berita-card">
          <div class="berita-card-image">
            <img src="../../../asset/cardberita4.png" alt="Pemeriksaan Mata">
          </div>
          <div class="berita-card-content">
            <div class="berita-card-date">
              <i class="fa-regular fa-calendar"></i>
              <span>18 Maret 2025</span>
            </div>
            <h3 class="berita-card-title">PELATIHAN DETEKSI GANGGUAN MATA UNTUK TENAGA KESEHATAN DESA</h3>
            <p class="berita-card-text"> Klinik Mata Dr. Sjamsu memberikan pelatihan kepada tenaga kesehatan desa agar dapat melakukan deteksi awal gangguan mata seperti katarak, glaukoma, dan infeksi.</p>
            <button class="berita-card-button">Baca Selengkapnya</button>
          </div>
        </div>

        <!-- Berita Card 5 -->
        <div class="berita-card">
          <div class="berita-card-image">
            <img src="../../../asset/cardberita5.png" alt="Pemeriksaan Mata">
          </div>
          <div class="berita-card-content">
            <div class="berita-card-date">
              <i class="fa-regular fa-calendar"></i>
              <span>03 Mei 2025</span>
            </div>
            <h3 class="berita-card-title">PEMBAGIAN KACAMATA GRATIS BAGI ANAK BERKEBUTUHAN KHUSUS DI SURABAYA</h3>
            <p class="berita-card-text">Sebagai bentuk kepedulian terhadap anak berkebutuhan khusus, Klinik Mata Dr. Sjamsu membagikan kacamata gratis kepada anak-anak dengan gangguan penglihatan ringan</p>
            <button class="berita-card-button">Baca Selengkapnya</button>
          </div>
        </div>

        <!-- Berita Card 6 -->
        <div class="berita-card">
          <div class="berita-card-image">
            <img src="../../../asset/cardberita6.png" alt="Pemeriksaan Mata">
          </div>
          <div class="berita-card-content">
            <div class="berita-card-date">
              <i class="fa-regular fa-calendar"></i>
              <span>18 Mei 2025</span>
            </div>
            <h3 class="berita-card-title">PELATIHAN DETEKSI PENYAKIT MATA UNTUK KADER POSYANDU DI SURABAYA</h3>
            <p class="berita-card-text">Klinik Mata Dr. Sjamsu mengadakan pelatihan bagi kader Posyandu agar mampu mendeteksi dini penyakit mata seperti glaukoma dan katarak di lingkungan sekitar.</p>
            <button class="berita-card-button">Baca Selengkapnya</button>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
</html>