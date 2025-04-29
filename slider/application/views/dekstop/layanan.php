<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Services</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .service-card {
            position: relative;
            background: linear-gradient(to bottom, rgba(0, 170, 181, 0.05), rgba(255, 255, 255, 0.8));
            border: 2px solid #00AAB5;
            border-radius: 10px;
            padding: 20px 10px 10px;
            margin-top: 70px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: 100%; /* Memastikan tinggi yang sama */
        }

        /* Container untuk mengatur ukuran yang sama */
        .card-container {
            height: 100%;
            display: flex;
            flex-direction: column;
            padding-left: 40px;
            padding-right: 40px;
            margin-bottom: 30px;
        }

        /* Garis lengkung di bawah icon */
        .icon-container {
            position: absolute;
            top: -2px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 50px;
            border: 2px solid #00AAB5;
            border-top: none;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            background-color: white;
            z-index: 0; /* Pastikan garis ada di bawah */
        }

        /* Background bulat icon */
        .service-icon {
            position: absolute;
            top: -40px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 80px;
            background-color: #00AAB5;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 32px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1; /* Pastikan icon berada di atas garis */
        }

        .service-icon i {
            font-size: 32px;
        }
        
        .service-title {
            color: #00AAB5;
            font-weight: bold;
            font-size: 22px;
            margin-top: 30px;
            margin-bottom: 10px;
            height: 60px; /* Tinggi tetap untuk judul */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .service-description {
            color: #454545;
            flex-grow: 1; /* Mengisi ruang yang tersisa */
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .section-title-container {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        @media (max-width: 768px) {
            .service-card {
                margin-top: 30px;
                padding-top: 30px;
            }
            .card-container {
                padding-left: 10px;
                padding-right: 10px;
            }
            .service-title {
                height: 40px;
            }
        }
    </style>
</head>
<body>
    <div class="section-title-container">
        <h2 class="text-center text-secondary mt-5">Layanan Kami</h2>
    </div>
    <div class="container py-5">
        <div class="row">
            <!-- Service Card 1: Skrining & Check Up -->
            <div class="col-md-4 col-sm-6">
                <div class="card-container">
                    <div class="service-card">
                        <div class="icon-container"></div>
                        <div class="service-icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <h3 class="service-title">Skrining & Check Up</h3>
                        <p class="service-description">Kami turut berkontribusi dalam pencegahan gangguan kesehatan mata.</p>
                    </div>
                </div>
            </div>
            
            <!-- Service Card 2: Medical Check Up -->
            <div class="col-md-4 col-sm-6">
                <div class="card-container">
                    <div class="service-card">
                        <div class="icon-container"></div>
                        <div class="service-icon">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h3 class="service-title">Medical Check Up</h3>
                        <p class="service-description">Pemeriksaan kesehatan menyeluruh untuk mendeteksi masalah kesehatan.</p>
                    </div>
                </div>
            </div>
            
            <!-- Service Card 3: Konsultasi Dokter -->
            <div class="col-md-4 col-sm-6">
                <div class="card-container">
                    <div class="service-card">
                        <div class="icon-container"></div>
                        <div class="service-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3 class="service-title">Konsultasi Dokter</h3>
                        <p class="service-description">Konsultasi langsung dengan dokter spesialis untuk penanganan optimal.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Service Card 4: Perawatan Mata -->
            <div class="col-md-4 col-sm-6">
                <div class="card-container">
                    <div class="service-card">
                        <div class="icon-container"></div>
                        <div class="service-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3 class="service-title">Perawatan Mata</h3>
                        <p class="service-description">Perawatan khusus untuk menjaga kesehatan mata Anda.</p>
                    </div>
                </div>
            </div>
            
            <!-- Service Card 5: Laboratorium -->
            <div class="col-md-4 col-sm-6">
                <div class="card-container">
                    <div class="service-card">
                        <div class="icon-container"></div>
                        <div class="service-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h3 class="service-title">Laboratorium</h3>
                        <p class="service-description">Layanan pemeriksaan laboratorium dengan hasil yang akurat.</p>
                    </div>
                </div>
            </div>
            
            <!-- Service Card 6: Farmasi -->
            <div class="col-md-4 col-sm-6">
                <div class="card-container">
                    <div class="service-card">
                        <div class="icon-container"></div>
                        <div class="service-icon">
                            <i class="fas fa-pills"></i>
                        </div>
                        <h3 class="service-title">Farmasi</h3>
                        <p class="service-description">Layanan obat-obatan dan farmasi untuk kebutuhan pengobatan Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>