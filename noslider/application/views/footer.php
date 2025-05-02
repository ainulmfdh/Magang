<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>

    .footer {
      background-color: #00a2a2;
      color: white;
      padding: 40px 0 20px;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
    }

    .footer-container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      padding: 0 20px;
    }

    .footer-section {
      flex: 1;
      padding: 0 15px;
    }

    .footer-section h3 {
      font-size: 24px;
      margin-bottom: 20px;
      font-weight: normal;
    }

    .footer-section p {
      line-height: 1.6;
      margin-bottom: 15px;
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
    }
  </style>
</head>
<body>
  <div class="footer">
    <div class="footer-container">
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

