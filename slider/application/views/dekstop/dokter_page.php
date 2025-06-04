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
            font-size: 35px;
        }
        .line-heading {
            background-color: #00AAB5;
            height: 6px;
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
            border-radius: 25px;
            padding: 25px 10px;
        }

        .dokter-card > .dokter-img {
            width: 100%;
            height: 300px;
        }
    </style>
</head>

<body>
    <?php $this->load->view("dekstop/Header"); ?>
    <div>
        <div class="container" style="padding-bottom: 30px;">
            <h4 class="heading">Dokter</h4>
            <div class="line-heading"></div>
            <p class="desc-heading">Berikut adalah daftar dokter yang praktik di Klinik Mata dr. Sjamsu, sebuah klinik mata terkemuka di Surabaya yang dikenal dengan pelayanan profesional dan teknologi canggih untuk perawatan kesehatan mata. Klinik ini menawarkan berbagai layanan, termasuk konsultasi, pemeriksaan dasar, serta perawatan khusus untuk kondisi seperti katarak, glaukoma, gangguan retina, dan masalah mata pada anak</p>
            <div class="dokter-card-container row g-3 mt-5">
                <?php foreach ($data_dokter as $dokter): ?>

                    <div class="col-3">
                        <div class="dokter-card">
                            <a class="dokter-img" href="<?php echo site_url('Dekstop/detail_dokter/' . $dokter->doctor_id); ?>">
                                <?php if (!empty($dokter->doctor_photo_open)): ?>
                                    <img style="height: 100%; width: 100%;" src="<?php echo base_url('asset/images/' . $dokter->doctor_photo_open); ?>" alt="Foto Dokter">
                                <?php else: ?>
                                    <div class="no-photo">Tidak ada foto</div>
                                <?php endif; ?>
                            </a>
                            <p class="nama-dokter" style="font-weight: bold; color: #00AAB5; font-size: 14px; margin-top: 6px; height: 7px;"><?php echo $dokter->doctor_name; ?></p>
                            <p class="spesialis-dokter" style="font-size: 12px; height: 7px; margin-top: 20px;"><?php echo $dokter->doctor_id_position; ?></p>
                            <a href="<?php echo site_url('Dekstop/detail_dokter/' . $dokter->doctor_id); ?>" style="display: flex; justify-content: center; text-decoration: none;">
                                <button style="display: flex; align-items: center; justify-content: center; gap: 5px; background-color: #00AAB5; color: white; margin-top: 10px; padding: 5px 10px; border-radius: 8px; border: none; width: 100px; align-self: center; font-size: 14px; font-weight: 500">
                                    <i class="fa-solid fa-book-open-reader"></i>
                                    Detail
                                </button>
                            </a>
                        </div>
                    </div>

                <?php endforeach ?>
            </div>
        </div>
   </div>
    <?php $this->load->view('dekstop/footer') ?>
</body>
</html>