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
            padding: 20px;
        }
        
        .form-control {
            margin-bottom: 15px;
            border-radius: 0;
        }
        
        .btn-submit {
            background-color: white;
            color: #00B3B3;
            border: none;
            border-radius: 0;
            padding: 8px 0;
            font-weight: 500;
            width: 100%;
        }
        
        .social-icons a {
            margin-right: 15px;
            color: white;
        }
    </style>
</head>
<body>

<!-- Footer section matching the mobile design in the image -->
<footer class="footer-section">
    <div class="container">
        <!-- Clinic Logo and Description (Left-aligned) -->
        <div class="mb-4">
            <div class="d-flex align-items-center">
                <img src="<?= base_url('/asset/image3.png'); ?>" alt="Klinik Mata dr. Sjamsu" style="height: 30px;">
            </div>
            <p class="mt-4">
                Kami adalah tim dokter mata yang professional dan berkompetensi tinggi. Kami peduli atas kesehatan mata Anda.
            </p>
        </div>
        
        <!-- Social Media Section -->
        <div class="mb-4">
            <h5>Ikuti Kami</h5>
            <div class="social-icons mt-2">
                <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                <a href="#"><i class="fab fa-instagram-square fa-2x"></i></a>
                <a href="#"><i class="fab fa-whatsapp-square fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter-square fa-2x"></i></a>
            </div>
        </div>
        
        <!-- Contact Form Section (Centered) -->
        <div>
            <h5>Kontak Kami</h5>
            <form action="#" method="post" class="mt-3">
                <div class="mb-3">
                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="subjek" placeholder="Subjek" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" name="pesan" rows="4" placeholder="Pesan" required></textarea>
                </div>
                <div>
                    <button type="submit" class="btn-submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</footer>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>