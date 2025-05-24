<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dokter</title>
    <style>
        .heading {
            color: #00AAB5;
            margin-top: 70px;
            font-size: 40px;
        }
        .line-heading {
            background-color: #00AAB5;
            height: 8px;
            width: 300px;
            border-radius: 8px;
            display: inline-block;
            margin-top: 20px;
        }
        .container-profil-dokter {
            margin-top: 40px;
            background-color: #F0EAEA;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 50px;
            padding: 60px 30px;
        }
    </style>
</head>
<body>
    <?php $this->load->view("dekstop/Header"); ?>

    <div class="container" style="padding-bottom: 20px;">
        <h2 class="heading">Profil Dokter</h2>
        <div class="line-heading"></div>
        <div class="container-profil-dokter">
            <img src=".../../../../asset/dokter.png" alt="gambar dokter">
            <div class="container-desc-dokter">
                <p class="nama-dokter" style="font-size: 25px; font-weight: 500; color: #00AAB5">dr. Ria Sandy Deneska, Sp.M(K)</p>
                <p class="spesialis-dokter" style="font-size: 17px; font-weight: 500">Dokter Oftalmologi Umum, Refraksi dan Low Vision</p>
                <p class="desc-dokter" style="font-size: 17px; text-align: justify;">Dokter Ria Sandy lahir di Surabaya 29 September 1975 dan lulus dari Fakultas Kedokteran Universitas Airlangga pada tahun 2000. Selama tiga tahun, beliau ditugaskan di Pasuruan dari tahun 2002 hingga 2005. Pada tahun 2011, dokter Ria Sandy menyelesaikan program pendidikan dokter spesialis di Fakultas Kedokteran Universitas Airlangga dan menjadi dokter spesialis mata. Spesialisasi dokter Ria Sandy adalah refraksi mata, lensa kontak, dan low vision. </p>
                <button style="margin-top: 40px; display: flex; align-items: center; justify-content: center; gap: 5px; background-color: #00AAB5; color: white; padding: 8px 100px; border-radius: 8px; border: none; width: 100px; align-self: center; font-size: 14px; font-weight: 500">
                    <i class="fa-regular fa-calendar"></i>
                    Booking
                </button>
            </div>
        </div>
    </div>
</body>
</html>