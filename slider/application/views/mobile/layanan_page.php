<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Klinik</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* Global styles */
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        /* Layanan header styling */
        .layanan-header {
            background-color: #f0f8f9;
            padding: 80px 0;
            text-align: center;
        }
        
        .layanan-header h1 {
            color: #39b4bd;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 40px;
        }
        
        /* Layanan section styling */
        .layanan-section {
            padding: 60px 0;
        }
        
        .layanan-title {
            color: #00AAB5;
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .layanan-subtitle {
            background-color: #00AAB5;
            height: 5px;
            width: 200px;
            margin-bottom: 30px;
        }
        
        .layanan-description {
            color: #454545;
            margin-bottom: 50px;
            line-height: 1.6;
        }
        
        /* Service card styling - seperti sebelumnya namun dengan jarak yang disesuaikan */
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
            margin-top: -3px;
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

        @media (max-width: 768px) {
            .layanan-header {
                padding: 40px 0;
            }
            
            .layanan-header h1 {
                font-size: 28px;
                margin-bottom: 20px;
            }
            
            .layanan-section {
                padding: 30px 0;
            }
            
            .layanan-title {
                font-size: 24px;
                margin-left: 10px;
                margin-right: 10px;
            }
            
            .layanan-subtitle {
                width: 150px;
                margin-bottom: 20px;
                margin-left: 10px;
                margin-right: 10px;
            }
            
            .layanan-description {
                margin-bottom: 30px;
                margin-left: 10px;
                margin-right: 10px;
            }
            
            .service-card {
                margin-top: 60px;
                padding-top: 30px;
                margin-left: 10px;
                margin-right: 10px;
            }
            
            .card-container {
                padding-left: 10px;
                padding-right: 10px;
                margin-bottom: 20px;
            }
            
            .service-title {
                height: 40px;
                font-size: 18px;
            }
            
            .service-description {
                font-size: 14px;
            }
            
            .service-icon {
                width: 70px;
                height: 70px;
                top: -35px;
            }
            
            .service-icon i {
                font-size: 28px;
            }
            
            .icon-container {
                width: 80px;
                height: 40px;
            }
            
            .col-md-4 {
                padding-left: 5px;
                padding-right: 5px;
            }
        }
    </style>
</head>
<body>
    <!-- Layanan Header Section -->
    <div class="layanan-header">
        <div class="container">
            <h1>Layanan</h1>
        </div>
    </div>
    
    <!-- Layanan Content Section -->
    <div class="layanan-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="layanan-title">Layanan Yang Tersedia</h2>
                    <div class="layanan-subtitle"></div>
                    <p class="layanan-description">
                        Klinik Mata Dr. Siamsu berupaya memberikan pelayanan kesehatan 24 jam di Tangerang yang berkualitas sekaligus terintegrasi (terpadu) dengan berbasiskan kerja sama multidisiplin antar spesialis selayaknya seorang pasien seakan-akan sedang menjalani perawatan di rumah sakit.
                    </p>
                </div>
            </div>
            
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
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>