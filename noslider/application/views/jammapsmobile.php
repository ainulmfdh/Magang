<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Klinik Mata Dr Sjamsu</title>
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

    .container-jam {
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      margin-bottom: 40px;
    }

    .info-panel, .map-container-jam {
      width: 100%;
      max-width: 600px;
      margin: auto;
    }

    .info-panel {
      background-color: #008F98;
      color: white;
      padding: 30px 25px;
    }

    .section-tittle-jam {
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

    .map-container-jam {
      position: relative;
      height: 450px;
      margin-top: 20px;
    }

    .map-container-jam iframe {
      width: 100%;
      height: 100%;
      border: none;
      cursor: pointer;
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

    .footer {
      background-color: #00a2a2;
      color: white;
      padding: 40px 20px 20px;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
    }

    .footer-container-jam {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 20px;
    }

    .footer-section {
      flex: 1;
      min-width: 250px;
    }

    .footer-section h3 {
      font-size: 24px;
      margin-bottom: 20px;
      font-weight: normal;
      text-align: left;
    }

    .footer-section p {
      line-height: 1.6;
      margin-bottom: 15px;
      text-align: left;
    }

    .social-icons {
      display: flex;
      gap: 10px;
    }

    .social-icons .icon {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      background-color: white;
      border-radius: 50%;
      color: #00a2a2;
      font-size: 20px;
    }

    .contact-info-footer {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .contact-info-footer p {
      display: flex;
      align-items: center;
      gap: 10px;
      margin: 0;
    }

    .copyright {
      margin-top: 40px;
      font-size: 14px;
      text-align: left;
    }

    @media (max-width: 768px) {
      .section-tittle-jam {
        font-size: 20px;
      }

      .hours-table td {
        font-size: 14px;
        padding: 10px 0;
      }

      .additional-info h3 {
        font-size: 18px;
      }

      .contact-info {
        font-size: 14px;
      }

      .map-container-jam {
        height: 350px;
      }

      .footer-container-jam {
        flex-direction: column;
        align-items: flex-start;
      }

      .footer-section h3,
      .footer-section p,
      .copyright {
        text-align: left;
      }
    }
  </style>
</head>
<body>
  <div class="container-jam">
    <div class="info-panel">
      <h2 class="section-tittle-jam">Jam Operasional</h2>
      <table class="hours-table">
        <tr><td>Senin - Jumat</td><td>08.00 – 21.00</td></tr>
        <tr><td>Sabtu</td><td>08.00 – 21.00</td></tr>
        <tr><td>Minggu/Hari Libur</td><td>Tutup</td></tr>
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
    <div class="map-container-jam">
      <div class="map-controls">
        <button class="active">Map</button>
        <button>Satellite</button>
      </div>
      <a href="https://maps.app.goo.gl/mSZo6wBJFN3CzFD1A" target="_blank" style="display:block;width:100%;height:100%;">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5661482558535!2d112.77454527481333!3d-7.290100992717315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa41f381d62d%3A0xc54659716036d598!2sKlinik%20Mata%20dr.%20Sjamsu!5e0!3m2!1sid!2sid!4v1745979851493!5m2!1sid!2sid" 
          width="100%" 
          height="100%" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </a>
    </div>
  </div>

  <div class="footer">
    <div class="footer-container-jam">
      <div class="footer-section">
        <h3>Klinik Mata dr. Sjamsu</h3>
        <p>Kami adalah tim dokter mata yang professional dan berkompetensi tinggi. Kami peduli atas kesehatan mata Anda.</p>
        <p class="copyright">Copyright All Right Reserved</p>
      </div>
      <div class="footer-section">
        <h3>Social Media</h3>
        <div class="social-icons">
          <a href="#" class="icon"><i class="fab fa-whatsapp"></i></a>
          <a href="#" class="icon"><i class="fab fa-facebook-f"></i></a>
        </div>
      </div>
      <div class="footer-section">
        <h3>Contact Us</h3>
        <div class="contact-info-footer">
          <p><i class="fas fa-phone-alt"></i> 031-5947530</p>
          <p><i class="fas fa-envelope"></i> info@klinikmatadrsjamsu.com</p>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const mapButtons = document.querySelectorAll('.map-controls button');
      const mapIframe = document.querySelector('.map-container-jam iframe');
      const originalSrc = mapIframe.src;
      
      mapButtons.forEach(button => {
        button.addEventListener('click', function () {
          mapButtons.forEach(btn => btn.classList.remove('active'));
          this.classList.add('active');
          
          // Change map type based on button clicked
          let newSrc = originalSrc;
          if (this.textContent === 'Satellite') {
            // Replace 5e0 (regular map) with 5e1 (satellite view)
            newSrc = originalSrc.replace('!5e0!', '!5e1!');
          } else {
            // Ensure we're using regular map view
            newSrc = originalSrc.replace('!5e1!', '!5e0!');
          }
          mapIframe.src = newSrc;
        });
      });
    });
  </script>
</body>
</html>