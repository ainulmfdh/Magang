<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dokter</title>
    <style>
        .bread-crumb {
            display: flex;
            align-items: center;
            height: 60px;
            color: white;
            padding-top: 120px;
        }

        .bread-crumb > .container {
            background-color: #00AAB5;
            display: flex;
            align-items: center;
            padding: 0 40px 0;
            gap: 5px;
            height: 60px;
        }

        .bread-crumb > .container > a {
            cursor: pointer;
            padding-top: 10px;
            font-weight: 500;
            font-size: 16px;
            text-decoration: none;
            color: white;
        }
        .bread-crumb > .container > p {
            cursor: pointer;
            padding-top: 10px;
            font-weight: 500;
            font-size: 16px;
        }
        .heading {
            color: #00AAB5;
            font-size: 35px;
        }
        .line-heading {
            background-color: #00AAB5;
            height: 6px;
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
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 50px;
            padding: 60px 20px;
        }
        .container-desc-dokter {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <?php $this->load->view("mobile/Header"); ?>

    <div class="bread-crumb">
        <div class="container">
            <a href="<?= base_url('Mobile') ?>"><p>Home</p></a>
            <p>|</p>
            <a href="<?= base_url('Mobile/dokter_page') ?>"><p>Dokter</p></a>
        </div>
    </div>

    <div class="container" style="padding: 100px 40px 20px;">
        <h4 class="heading">Profil Dokter</h4>
        <div class="line-heading"></div>
        <div class="container-profil-dokter">
            <img style="height: 350px; width: 100%; border-radius: 8px;" src="<?php echo base_url('asset/' . $data_dokter->doctor_photo_open); ?>">
            <div class="container-desc-dokter">
                <p class="nama-dokter" style="font-size: 25px; font-weight: 500; color: #00AAB5"><?php echo $data_dokter->doctor_name; ?></p>
                <p class="spesialis-dokter" style="font-size: 17px; font-weight: 500"><?php echo $data_dokter->doctor_id_position; ?></p>
                <p class="desc-dokter" style="font-size: 17px; text-align: justify;"><?php echo $data_dokter->doctor_id_description; ?></p>
                <button style="align-self: center; margin-top: 40px; display: flex; align-items: center; justify-content: center; gap: 5px; background-color: #00AAB5; color: white; padding: 8px 100px; border-radius: 8px; border: none; width: 100px; align-self: center; font-size: 14px; font-weight: 500">
                    <i class="fa-regular fa-calendar"></i>
                    Booking
                </button>
            </div>
        </div>
    </div>

    <?php $this->load->view("mobile/footer"); ?>
</body>
</html>