<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dokter</title>
    <link rel="stylesheet" href="<?= base_url('asset/css/mobile_doctor_detail.css'); ?>">
</head>
<body>
   <nav style="--bs-breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'8\' height=\'8\'%3E%3Cpath d=\'M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z\' fill=\'%236c757d\'/%3E%3C/svg%3E');" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('doctor/mobile'); ?>">Dokter</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail</li>
    </ol>
  </nav>
  
    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-title">
                <div class="title-tag"><?php echo $doctor->doctor_id_position; ?></div>
                    <div class="profile-image">
                        <img src="<?php echo base_url('asset/images/' . $doctor->doctor_photo_open); ?>" alt="Prof. dr. Sjamsu Budiono">
                    </div>
                <h1 class="profile-name"><?php echo $doctor->doctor_name; ?></h1>
                <p class="profile-description">
                    Spesialis Utama di RS Cicendo Pusat pelayanan dan pengembangan pengobatan penyakit mata dengan teknologi terbaik.
                    Dokter ahli di area Katarak, refraksi (seperti LASIK, PRK, SMILE), laser ablasi dan implants refraktif, bedah transplantasi, dan glaukoma.
                </p>
            </div>
           
        </div>
    </div>

    <div class="profile-detail-section">
            <div class="detail-title">
                <img src="<?= base_url('asset/images/profil.png'); ?>" alt="Profile icon">
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