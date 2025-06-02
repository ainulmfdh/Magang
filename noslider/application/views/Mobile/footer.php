<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Footer Mobile</title>
  
  <!-- FontAwesome CDN (lebih reliable) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <style>
    .footer-section {
      background-color: #00AAB5;
      color: white;
      padding: 15px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      position: relative;
    }
    .footer-title {
      font-size: 14px;
      margin: 0;
      font-weight: normal;
    }
    .social-btn {
      padding: 6px 8px;
      border-radius: 4px;
      font-size: 12px;
      background-color: #f8f9fa;
      border: 1px solid #ddd;
      color: #333;
      cursor: pointer;
      transition: background-color 0.3s ease;
      min-width: 32px;
      height: 28px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .social-btn:hover {
      background-color: #e9ecef;
    }
    .social-icons {
      display: flex;
      gap: 10px;
      margin: 0;
      position: absolute;
      left: 55%;
      transform: translateX(-50%);
    }
    .copyright {
      font-size: 11px;
      margin: 0;
    }
    
    /* Fallback jika FontAwesome tidak load */
    .social-btn .icon-fallback {
      display: none;
      font-weight: bold;
    }
    
    /* Responsive untuk layar yang lebih besar */
    @media (min-width: 768px) {
      .footer-section {
        padding: 20px;
        position: relative;
      }
      .footer-title {
        font-size: 15px;
      }
      .social-btn {
        font-size: 13px;
        padding: 7px 9px;
        min-width: 36px;
        height: 32px;
      }
      .copyright {
        font-size: 12px;
      }
      .social-icons {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
      }
    }
  </style>
</head>
<body>
  <footer class="footer-section">
    <h3 class="footer-title">Klinik Mata dr. Sjamsu</h3>
    
    <div class="social-icons">
      <button class="social-btn" title="Facebook">
        <i class="fab fa-facebook-f"></i>
        <span class="icon-fallback">f</span>
      </button>
      <button class="social-btn" title="Instagram">
        <i class="fab fa-instagram"></i>
        <span class="icon-fallback">@</span>
      </button>
    </div>
    
    <p class="copyright">© 2025 CV SB</p>
  </footer>

  <!-- Script untuk check jika FontAwesome berhasil load -->
  <script>
    // Check jika FontAwesome berhasil dimuat
    window.addEventListener('load', function() {
      setTimeout(function() {
        const icons = document.querySelectorAll('.fab');
        icons.forEach(function(icon) {
          const styles = window.getComputedStyle(icon, ':before');
          if (!styles.content || styles.content === 'none' || styles.content === '""') {
            // FontAwesome tidak berhasil load, tampilkan fallback
            icon.style.display = 'none';
            icon.nextElementSibling.style.display = 'inline';
          }
        });
      }, 1000);
    });
  </script>
</body>
</html>