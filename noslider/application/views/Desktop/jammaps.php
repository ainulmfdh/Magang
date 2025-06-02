<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url('asset/css/dekstop_jammaps.css'); ?>">
</head>
<body>
  <div class="container-maps">
    <div class="info-panel">
      <h2 class="section-title-jam">Jam Operasional</h2>
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

    <div class="map-container-maps">
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
