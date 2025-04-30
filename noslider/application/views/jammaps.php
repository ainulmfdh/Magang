<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      overflow-x: hidden;
    }

    .container {
      display: flex;
      width: 100%;
      height: 450px;
      margin-bottom: 40px; /* spasi ke footer */
    }

    .info-panel {
      width: 400px;
      background-color: #008F98;
      color: white;
      padding: 30px 25px;
    }

    .section-title {
      font-size: 24px;
      margin-bottom: 30px;
      font-weight: bold;
      text-align: center;
    }

    .hours-table {
      width: 100%;
      margin: 20px 0 40px;
      border-collapse: collapse;
    }

    .hours-table tr {
      border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    }

    .hours-table td {
      padding: 12px 0;
      font-size: 16px;
    }

    .hours-table td:last-child {
      text-align: right;
    }

    .additional-info {
      margin-top: 40px;
    }

    .additional-info h3 {
      font-size: 20px;
      margin-bottom: 20px;
    }

    .contact-info {
      font-size: 15px;
      line-height: 1.8;
    }

    .contact-info p i {
      margin-right: 10px;
      width: 20px;
      text-align: center;
    }

    .map-container {
      flex: 1;
      position: relative;
    }

    .map-container iframe {
      width: 100%;
      height: 100%;
      border: none;
    }

    .map-controls {
      position: absolute;
      top: 10px;
      left: 20px;
      background-color: white;
      border-radius: 2px;
      box-shadow: 0 1px 4px rgba(0,0,0,0.3);
      display: flex;
      z-index: 1;
    }

    .map-controls button {
      padding: 6px 12px;
      border: none;
      background: white;
      cursor: pointer;
      font-size: 13px;
    }

    .map-controls button.active {
      color: #00a2a2;
      font-weight: bold;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        height: auto;
      }

      .info-panel {
        width: 100%;
      }

      .map-container {
        height: 350px;
      }
    }

  </style>
</head>
<body>
  <div class="container">
    <div class="info-panel">
      <h2 class="section-title">Jam Operasional</h2>
      <table class="hours-table">
        <tr>
          <td>Senin - Jumat</td>
          <td>08.00 – 21.00</td>
        </tr>
        <tr>
          <td>Sabtu</td>
          <td>08.00 – 21.00</td>
        </tr>
        <tr>
          <td>Minggu/Hari Libur</td>
          <td>Tutup</td>
        </tr>
      </table>
      <div class="additional-info">
        <h3>Informasi Lebih Lanjut</h3>
        <div class="contact-info">
          <p><i class="fas fa-phone-alt"></i> 031-5957430 / 031-5981643 / 031-5926951</p>
          <p><i class="fab fa-whatsapp"></i> 0823 2883 4899</p>
          <p><i class="fas fa-envelope"></i> info@klinikmatadrsjamsu.com</p>
        </div>
      </div>
    </div>

    <div class="map-container">
      <div class="map-controls">
      </div>
      <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5661482558535!2d112.77454527481333!3d-7.290100992717315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa41f381d62d%3A0xc54659716036d598!2sKlinik%20Mata%20dr.%20Sjamsu!5e0!3m2!1sid!2sid!4v1745979851493!5m2!1sid!2sid" 
      width="600" 
      height="450" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const mapButtons = document.querySelectorAll('.map-controls button');
      mapButtons.forEach(button => {
        button.addEventListener('click', function () {
          mapButtons.forEach(btn => btn.classList.remove('active'));
          this.classList.add('active');
        });
      });
    });
  </script>
</body>
</html>
