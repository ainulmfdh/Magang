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
</body>
</html>
