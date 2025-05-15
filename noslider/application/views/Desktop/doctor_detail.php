<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Dosen - Prof. dr. Sjamsu Budiono, Sp.M(K)</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins';
        }
        
        /* Breadcrumb Start */
      .breadcrumb {
        width: 100%;
        height: 50px;
        background-color: rgba(0, 170, 181, 0.05);
        padding: 12px 12px;
      }
      .breadcrumb-item {
        padding-left: 60px;
      }
      .breadcrumb li {
        font-size: 15px;
      }

      .breadcrumb li a {
        text-decoration: none;
        font-weight: 500;
      }
      /* Breadcrumb End */

        body {
            background-color:rgb(255, 255, 255);
            color: #333;
        }
        
        .profile-container {
            /* max-width: 1000px; */
            margin: 40px auto;
            background-color: #fff;
            background-color: rgba(0, 170, 181, 0.05);
            overflow: hidden;
        }
        
        .profile-header {
            display: flex;
            padding: 20px;
            position: relative;
        }
        
        .profile-title {
            flex: 1;
        }
        
        .title-tag {
            margin-top: 70px;
            margin-left: 50px;
            background-color: #02a2a6;
            color: white;
            padding: 8px 16px;
            border-radius: 4px;
            display: inline-block;
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 28px;
        }
        
        .profile-name {
            margin-top: 20px;
            margin-left: 50px;
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        
        .profile-description {
            margin-top: 20px;
            margin-left: 50px;
            font-size: 18px;
            line-height: 1.5;
            color: #666;
        }
        
        .profile-image {
            width: 360px;
            height: 420px;
            position: relative;
        }
        
        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
        }

        .wave{
          width: 10px;
        }
        
        .image-overlay {
            position: absolute;
            bottom: -15px;
            right: -15px;
            width: 120px;
            height: 40px;
            background-color: #02a2a6;
            border-radius: 50%;
            transform: rotate(-10deg);
            z-index: -1;
        }
        
        .profile-detail-section {
            padding: 20px 40px;
        }
        
        .detail-title {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .detail-title h2 {
            font-size: 30px;
            margin-left: 10px;
            color: #333;
        }
        
        .detail-title img {
            width: 36px;
            height: 36px;
        }
        
        .detail-content {
            font-size: 17px;
            line-height: 1.8;
            color: #444;
        }
        
        .detail-content p {
            margin-bottom: 15px;
            margin-left: 30px;
            margin-right: 30px;
        }
    </style>
</head>
<body>
   <nav style="--bs-breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'8\' height=\'8\'%3E%3Cpath d=\'M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z\' fill=\'%236c757d\'/%3E%3C/svg%3E');" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('doctor'); ?>">Dokter</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail</li>
    </ol>
  </nav>
  
    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-title">
                <div class="title-tag"><?php echo $doctor->doctor_id_position; ?></div>
                <h1 class="profile-name"><?php echo $doctor->doctor_name; ?></h1>
                <p class="profile-description">
                    Spesialis Utama di RS Cicendo Pusat pelayanan dan pengembangan pengobatan penyakit mata dengan teknologi terbaik.
                    Dokter ahli di area Katarak, refraksi (seperti LASIK, PRK, SMILE), laser ablasi dan implants refraktif, bedah transplantasi, dan glaukoma.
                </p>
            </div>
            <div class="profile-image">
                <img src="<?php echo base_url('asset/' . $doctor->doctor_photo_open); ?>" alt="Prof. dr. Sjamsu Budiono">
            </div>
        </div>
    </div>

    <div class="profile-detail-section">
            <div class="detail-title">
                <img src="<?= base_url('asset/profil.png'); ?>" alt="Profile icon">
                <h2>Detail Profil</h2>
            </div>
            <div class="detail-content">
                <p>
                    <?php echo $doctor->doctor_id_description; ?>
                </p>
                
            </div>
        </div>
</body>
</html>