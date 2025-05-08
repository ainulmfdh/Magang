<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Mata dr. Sjamsu</title>
    <style>
        
        .container-service {
            max-width: 1200px;
            /* margin: 0 auto; */
            /* padding: 20px; */
        }

        .background-service {
            background-color: rgba(0, 170, 180, 0.05);
            padding: 40px 20px;
            /* margin-top: 40px; */
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
            margin-bottom: 15px;
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
        
        .heart-icon {
            color: #FFFFFF;
            font-size: 15px;
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
        
        /* Media Query untuk tampilan mobile */
        @media screen and (max-width: 768px) {
            .services-grid {
                grid-template-columns: 1fr; /* Mengubah menjadi 1 kolom pada mobile */
                gap: 15px;
            }
            
            .service-card {
                padding: 20px;
            }
            
            .service-title {
                font-size: 18px;
            }
            
            .icon-circle {
                width: 50px;
                height: 50px;
            }
            
            .background-service {
                padding: 20px 15px;
            }
            
            .header-service h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="container-service">
    <div class="background-service">
        <div class="header-service">
            <h1>Klinik Mata dr. Sjamsu</h1>
        </div>
        
        <div class="services-grid">
            <!-- Card 1 -->
            <div class="service-card">
                <div class="icon-circle">
                    <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#00CDDA" width="50px">
                    <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                    </svg>
                </div>
                <h3 class="service-title">Skrining & Check Up</h3>
                <p class="service-desc">
                    Kami turut berkontribusi dalam pencegahan gangguan kesehatan mata sejak dini yang memberikan pelayanan berupa skrining dan check up secara berkala
                </p>
            </div>
            
            <!-- Card 2 -->
            <div class="service-card">
                <div class="icon-circle">
                <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#00CDDA" width="50px">
                    <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                    </svg>
                </div>
                <h3 class="service-title">Skrining & Check Up</h3>
                <p class="service-desc">
                    Kami turut berkontribusi dalam pencegahan gangguan kesehatan mata sejak dini yang memberikan pelayanan berupa skrining dan check up secara berkala
                </p>
            </div>
            
            <!-- Card 3 -->
            <div class="service-card">
                <div class="icon-circle">
                <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#00CDDA" width="50px">
                    <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                    </svg>
                </div>
                <h3 class="service-title">Skrining & Check Up</h3>
                <p class="service-desc">
                    Kami turut berkontribusi dalam pencegahan gangguan kesehatan mata sejak dini yang memberikan pelayanan berupa skrining dan check up secara berkala
                </p>
            </div>
            
            <!-- Card 4 -->
            <div class="service-card">
                <div class="icon-circle">
                <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#00CDDA" width="50px">
                    <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                    </svg>
                </div>
                <h3 class="service-title">Skrining & Check Up</h3>
                <p class="service-desc">
                    Kami turut berkontribusi dalam pencegahan gangguan kesehatan mata sejak dini yang memberikan pelayanan berupa skrining dan check up secara berkala
                </p>
            </div>
            
            <!-- Card 5 (tambahan sesuai gambar) -->
            <div class="service-card">
                <div class="icon-circle">
                <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#00CDDA" width="50px">
                    <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                    </svg>
                </div>
                <h3 class="service-title">Skrining & Check Up</h3>
                <p class="service-desc">
                    Kami turut berkontribusi dalam pencegahan gangguan kesehatan mata sejak dini yang memberikan pelayanan berupa skrining dan check up secara berkala
                </p>
            </div>
            
            <!-- Card 6 (tambahan sesuai gambar) -->
            <div class="service-card">
                <div class="icon-circle">
                <svg class="heart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#00CDDA" width="50px">
                    <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                    </svg>
                </div>
                <h3 class="service-title">Skrining & Check Up</h3>
                <p class="service-desc">
                    Kami turut berkontribusi dalam pencegahan gangguan kesehatan mata sejak dini yang memberikan pelayanan berupa skrining dan check up secara berkala
                </p>
            </div>
        </div>
    </div>
    </div>
</body>
</html>