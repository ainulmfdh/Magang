<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Mata dr. Sjamsu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        
        
        .container-service {
            max-width: 1200px;
            margin: 0 auto;
            /* padding: 20px; */
        }

        .background-service {
            background-color: rgba(0, 170, 180, 0.05);
            padding: 40px 20px;
            margin-top: 40px;
    }

        
        .header-service {
            text-align: center;
            /* padding: 20px 0; */
            margin-bottom: 20px;
            color: #585C5C;
            font-weight: semibold;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        
        .service-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            text-align: left;
        }

        .service-card:hover,
        .service-card:hover .service-title,
        .service-card:hover .service-desc {
            background-color: #00CDDA;
            color: white;
        }

        .service-card:hover .heart-icon {
            fill: #ffffff; 
            transition: fill 0.3s ease;
        }

        .heart-icon {
            transition: fill 0.3s ease;
        }
        
        .icon-circle {
            width: 60px;
            height: 60px;
            border-radius: 10%;
            background-color: rgba(0, 170, 180, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .service-title {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #484848;
        }

        .service-desc {
            color: #838383;
        }
        
        
    </style>
</head>
<body>
    <div class="background-service">
    <div class="container-service">
        <div class="header-service">
            <h1>Klinik Mata dr. Sjamsu</h1>
        </div>
        
        <div class="services-grid">
            <!-- Card 1 - Purple Border -->
            <div class="service-card purple-border">
                <div class="icon-circle">
                <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="#00CDDA" width="25px">
                <path d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM192 32c17.7 0 32 14.3 32 32h-64c0-17.7 14.3-32 32-32zm96 352c0 8.8-7.2 16-16 16H112c-8.8 0-16-7.2-16-16v-16c0-8.8 7.2-16 16-16h160c8.8 0 16 7.2 16 16v16zm0-96c0 8.8-7.2 16-16 16H112c-8.8 0-16-7.2-16-16v-16c0-8.8 7.2-16 16-16h160c8.8 0 16 7.2 16 16v16zm0-96c0 8.8-7.2 16-16 16H112c-8.8 0-16-7.2-16-16v-16c0-8.8 7.2-16 16-16h160c8.8 0 16 7.2 16 16v16z"/>
                </svg>
                </div>
                <h3 class="service-title">Skrining dan Check Up</h3>
                <p class="service-desc">
                    Kami turut berkontribusi dalam pencegahan gangguan kesehatan mata sejak dini yang memberikan pelayanan berupa skrining dan check up secara berkala
                </p>
            </div>
            
            <!-- Card 2 - White Background -->
            <div class="service-card">
                <div class="icon-circle">
                <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#00CDDA" width="25px">
                    <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-17.8c-22.2 10.3-46.9 16-71.8 16s-49.6-5.7-71.8-16h-17.8C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"/>
                    </svg>

                </div>
                <h3 class="service-title">Rawat Jalan</h3>
                <p class="service-desc"> 
                    Pelayanan rawat jalan di Klinik Mata dr. Sjamsu meliputi konsultasi, pemeriksaan dasar, klinik mata katarak, klinik retina, klinik glaukoma, klinik mata anak.          
                </p>
            </div>
            
            <!-- Card 3 - Teal Background -->
            <div class="service-card">
                <div class="icon-circle">
               <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="#00CDDA" width="25px">
                <path d="M160 0c17.7 0 32 14.3 32 32V64h25.9c15.6 0 30.8 6.2 41.9 17.3l42.1 42.1c11.1 11.1 17.3 26.3 17.3 41.9V224h-96v-32h-32v55.3c0 9.5 3.8 18.6 10.5 25.3L243.3 320H320c17.7 0 32 14.3 32 32s-14.3 32-32 32H234.7L168 381.3V448H336c26.5 0 48 21.5 48 48H0c0-26.5 21.5-48 48-48h88V390.6L65.4 329.4C51.8 315.8 48 296.3 55.1 279L96 182.8V144c0-17.7 14.3-32 32-32h32V32c0-17.7 14.3-32 32-32z"/>
                </svg>
                </div>
                <h3 class="service-title">Tindakan Diagnostik</h3>
                <p class="service-desc">      
                    Pelayanan diagnostik dengan alat teknologi yang canggih dan mutakhir membantu dokter dalam deteksi awal kelainan yang terjadi pada mata.          
                </p>
            </div>
            
            <!-- Card 4 - White Background -->
            <div class="service-card">
                <div class="icon-circle">
                <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" fill="#00CDDA" width="25px">
                <path d="M176 0C79 0 0 79 0 176c0 44.1 16.3 84.4 43.2 115.2 15.4 17.6 33.8 32.3 54.4 43.2V416c0 17.7 14.3 32 32 32h16v32c0 17.7 14.3 32 32 32s32-14.3 32-32v-32h16c17.7 0 32-14.3 32-32v-81.6c20.6-10.9 39-25.6 54.4-43.2C335.7 260.4 352 220.1 352 176 352 79 273 0 176 0z"/>
                </svg>


                </div>
                <h3 class="service-title">Tindakan Laser</h3>
                <p class="service-desc">   
                    Tindakan laser yang ada di Klinik Mata dr. Sjamsu menggunakan teknologi canggih guna hasil diagnosis lebih akurat.          
                </p>
            </div>

            <!-- Card 5 - White Background -->
            <div class="service-card">
                <div class="icon-circle">
                <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#00CDDA" width="25px">
                <path d="M502.6 39.4c-12.5-12.5-32.8-12.5-45.3 0L320 176.7 335.3 192 192 335.3 176.7 320 39.4 457.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L320 335.3 335.3 320 502.6 152.7c12.5-12.5 12.5-32.8 0-45.3z"/>
                </svg>


                </div>
                <h3 class="service-title">Tindakan Operatif</h3>
                <p class="service-desc">      
                    Tindakan operatif kami dilakukan oleh dokter-dokter profesional yang berpengalaman dalam melakukan tindakan bedah.          
                </p>
            </div>

            <!-- Card 6 - White Background -->
            <div class="service-card">
                <div class="icon-circle">
                <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="#00CDDA" width="25px">
                <path d="M32 96V32c0-17.7 14.3-32 32-32H320c17.7 0 32 14.3 32 32V96H32zm0 32H352V480c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V128zm128 64v64H96v32h64v64h32V288h64V256H224V192H160z"/>
                </svg>
                </div>
                <h3 class="service-title">Resep Obat, Kacamata & Lensa Kotak</h3>
                <p class="service-desc">   
                    Kami memberikan pelayanan lengkap dan menyeluruh berupa resep obat dan kacamata untuk kebutuhan dan kesehatan mata Anda.          
                </p>
            </div>
        </div>
    </div>
    </div>
</body>
</html>