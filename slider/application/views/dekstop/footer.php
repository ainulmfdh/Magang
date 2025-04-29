<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Mata dr. Sjamsu</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        
        .footer-section {
            background-color: #00AAB5;
            color: white;
            padding: 40px 0;
        }
        
        .footer-title {
            font-size: 20px;
            margin-bottom: 20px;
        }
        
        .footer-text {
            font-size: 14px;
            line-height: 1.6;
        }
        
        .social-media-container {
            background-color: white;
            padding: 20px;
            border-radius: 4px;
            color: #333;
            margin-bottom: 20px;
        }
        
        .social-media-logo {
            width: 40px;
            height: 40px;
        }
        
        .social-media-title {
            color: #337ab7;
            font-size: 18px;
            margin-bottom: 5px;
        }
        
        .social-media-followers {
            font-size: 14px;
            color: #555;
        }
        
        .social-btn {
            padding: 8px 12px;
            border-radius: 4px;
            margin-right: 5px;
            font-size: 14px;
        }
        
        .follow-btn {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            color: #333;
        }
        
        .contact-form .form-control {
            margin-bottom: 15px;
            border-radius: 4px;
        }
        
        .contact-form textarea {
            resize: none;
            height: 120px;
        }
        
        .input-group {
            margin-bottom: 15px;
            width: 100%;
        }
        
        .input-group-text {
            color: #00AAB5; /* Updated to match Send button color */
        }
        
        .btn-send {
            background-color: #FFFFFF;
            color: #00AAB5;
            border: none;
            padding: 8px 20px;
            border-radius: 4px;
            width: 100%;
            text-align: center;
        }
        
        .whatsapp-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
        }
        
        .copyright {
            font-size: 12px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<!-- Footer section with updated icon colors -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-4 mb-4">
                <h3 class="footer-title">Klinik Mata dr. Sjamsu</h3>
                <p class="footer-text">
                    Kami adalah tim dokter mata yang profesional dan berkompetensi tinggi. Kami peduli atas kesehatan mata anda.
                </p>
                <p class="footer-text">
                    Dengan menggunakan alat-alat operasi modern beserta kelengkapan penunjang lain yang canggih dan mutakhir, kami siap menjaga kesehatan mata anda.
                </p>
            </div>
            
            <!-- Middle Column -->
            <div class="col-md-4 mb-4">
                <h3 class="footer-title">Social Media</h3>
                <div class="social-media-container">
                    <div class="d-flex align-items-center mb-3">
                        <div>
                            <div class="social-media-title">Klinik Mata dr. Sjamsu</div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <button class="social-btn follow-btn">
                            <i class="fab fa-facebook-f me-1"></i> Follow Page
                        </button>
                        <button class="social-btn follow-btn">
                            <i class="fab fa-instagram me-1"></i> Follow Page
                        </button>
                        <button class="social-btn follow-btn">
                            <i class="fab fa-whatsapp me-1"></i> 
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Right Column -->
            <div class="col-md-4">
                <h3 class="footer-title">Contact Us</h3>
                <form class="contact-form">
                    <div class="input-group">
                        <span class="input-group-text bg-white">
                            <i class="fas fa-user" style="color: #00AAB5;"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Full Name">
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-text bg-white">
                            <i class="fas fa-envelope" style="color: #00AAB5;"></i>
                        </span>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-text bg-white">
                            <i class="fas fa-pen" style="color: #00AAB5;"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    
                    <textarea class="form-control" placeholder="Message" style="margin-bottom: 15px;"></textarea>
                    
                    <button type="submit" class="btn-send">Send</button>
                </form>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="row">
            <div class="col-12">
                <p class="copyright">Copyright © 2025 CV SB</p>
            </div>
        </div>
    </div>
    
    <!-- WhatsApp Floating Button -->
    <a href="#" class="whatsapp-icon">
        <i class="fab fa-whatsapp"></i>
    </a>
</footer>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>