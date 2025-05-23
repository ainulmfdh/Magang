<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter Page</title>
    <style>
        .heading {
            color: #00AAB5;
            margin-top: 70px;
            font-size: 40px;
        }
        .line-heading {
            background-color: #00AAB5;
            height: 8px;
            width: 200px;
            border-radius: 8px;
            display: inline-block;
            margin-top: 20px;
        }
        .desc-heading {
            margin-top: 10px;
            font-size: 16px;
        }
        .dokter-card {
            display: flex;
            flex-direction: column;
            gap: 5px;
            background-color: #FBFBFB;
            height: 450px;
            border-radius: 25px;
            padding: 20px 10px;
        }

        .dokter-card > img {
            width: 100%;
        }
    </style>
</head>

<body>

   <div>
        <?php $this->load->view("dekstop/Header"); ?>

        <div class="container" style="padding-bottom: 30px;">
            <h2 class="heading">Dokter</h2>
            <div class="line-heading"></div>
            <p class="desc-heading">Berita dan informasi terkini seputar inovasi pelayanan kesehatan terintegrasi di Klinik Inter Medika, termasuk pengembangan layanan dan teknologi terbaru yang mendukung pendekatan holistik dalam perawatan kesehatan.</p>
            <div class="dokter-card-container row g-3 mt-5">
                <div class="col-3">
                    <div class="dokter-card">
                        <img src=".../../../../asset/dokter.png" alt="gambar dokter">
                        <p class="nama-dokter" style="font-weight: bold; color: #00AAB5; font-size: 14px; margin-top: 6px;">dr. Ria Sandy Deneska, Sp.M(K)</p>
                        <p class="spesialis-dokter" style="font-size: 12px;">Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                        <button style="display: flex; align-items: center; justify-content: center; gap: 5px; background-color: #00AAB5; color: white; padding: 5px 10px; border-radius: 8px; border: none; width: 100px; align-self: center; font-size: 14px; font-weight: 500">
                            <i class="fa-solid fa-book-open-reader"></i>
                            Detail
                        </button>
                    </div>
                </div>
                <div class="col-3">
                    <div class="dokter-card">
                        <img src=".../../../../asset/dokter.png" alt="gambar dokter">
                        <p class="nama-dokter" style="font-weight: bold; color: #00AAB5; font-size: 14px; margin-top: 6px;">dr. Ria Sandy Deneska, Sp.M(K)</p>
                        <p class="spesialis-dokter" style="font-size: 12px;">Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                        <button style="display: flex; align-items: center; justify-content: center; gap: 5px; background-color: #00AAB5; color: white; padding: 5px 10px; border-radius: 8px; border: none; width: 100px; align-self: center; font-size: 14px; font-weight: 500">
                            <i class="fa-solid fa-book-open-reader"></i>
                            Detail
                        </button>
                    </div>
                </div>
                <div class="col-3">
                    <div class="dokter-card">
                        <img src=".../../../../asset/dokter.png" alt="gambar dokter">
                        <p class="nama-dokter" style="font-weight: bold; color: #00AAB5; font-size: 14px; margin-top: 6px;">dr. Ria Sandy Deneska, Sp.M(K)</p>
                        <p class="spesialis-dokter" style="font-size: 12px;">Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                        <button style="display: flex; align-items: center; justify-content: center; gap: 5px; background-color: #00AAB5; color: white; padding: 5px 10px; border-radius: 8px; border: none; width: 100px; align-self: center; font-size: 14px; font-weight: 500">
                            <i class="fa-solid fa-book-open-reader"></i>
                            Detail
                        </button>
                    </div>
                </div>
                <div class="col-3">
                    <div class="dokter-card">
                        <img src=".../../../../asset/dokter.png" alt="gambar dokter">
                        <p class="nama-dokter" style="font-weight: bold; color: #00AAB5; font-size: 14px; margin-top: 6px;">dr. Ria Sandy Deneska, Sp.M(K)</p>
                        <p class="spesialis-dokter" style="font-size: 12px;">Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                        <button style="display: flex; align-items: center; justify-content: center; gap: 5px; background-color: #00AAB5; color: white; padding: 5px 10px; border-radius: 8px; border: none; width: 100px; align-self: center; font-size: 14px; font-weight: 500">
                            <i class="fa-solid fa-book-open-reader"></i>
                            Detail
                        </button>
                    </div>
                </div>
                <div class="col-3">
                    <div class="dokter-card">
                        <img src=".../../../../asset/dokter.png" alt="gambar dokter">
                        <p class="nama-dokter" style="font-weight: bold; color: #00AAB5; font-size: 14px; margin-top: 6px;">dr. Ria Sandy Deneska, Sp.M(K)</p>
                        <p class="spesialis-dokter" style="font-size: 12px;">Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                        <button style="display: flex; align-items: center; justify-content: center; gap: 5px; background-color: #00AAB5; color: white; padding: 5px 10px; border-radius: 8px; border: none; width: 100px; align-self: center; font-size: 14px; font-weight: 500">
                            <i class="fa-solid fa-book-open-reader"></i>
                            Detail
                        </button>
                    </div>
                </div>
            </div>
        </div>
   </div>
    
</body>
</html>