<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Daftar Dokter</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
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

    .doctor-card {
      background-color: #a9e7e7;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      position: relative;
      width: 100%;
      max-width: 300px;
      margin: auto;
      height: 350px;
    }

    .doctor-card img {
      width: 100%;
      height: 350px;
      object-fit: cover;
    }

    .doctor-info {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      text-align: center;
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      padding: 4px;
    }

    .doctor-name {
      font-size: 14px;
      font-weight: 600;
      margin-bottom: 5px;
    }

    .doctor-specialty {
      font-size: 12px;
      font-weight: 300;
    }

  </style>
</head>
<body>
  <nav style="--bs-breadcrumb-divider: url('data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'8\' height=\'8\'%3E%3Cpath d=\'M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z\' fill=\'%236c757d\'/%3E%3C/svg%3E');" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <!-- <li class="breadcrumb-item"><a href="#">Dokter</a></li> -->
      <li class="breadcrumb-item active" aria-current="page">Dokter</li>
    </ol>
  </nav>

  
   <div class="container py-4">
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
            <?php foreach ($doctors as $doctor): ?>
             
            <div class="col d-flex justify-content-center">
                <div class="doctor-card">
                    <a href="<?php echo site_url('doctor/view/' . $doctor->doctor_id); ?>">
                        <?php if (!empty($doctor->doctor_photo_open)): ?>
                            <img src="<?php echo base_url('asset/' . $doctor->doctor_photo_open); ?>" alt="Foto Dokter">
                        <?php else: ?>
                            <div class="no-photo">Tidak ada foto</div>
                        <?php endif; ?>
                    </a>
                    <div class="doctor-info">
                        <h3 class="doctor-name"><?php echo $doctor->doctor_name; ?></h3>
                        <p class="doctor-specialty"><?php echo $doctor->doctor_id_position; ?></p>
                    
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <br class="mb-4">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
