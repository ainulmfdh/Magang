<!DOCTYPE html>
<html>
<head>
    <title>Daftar Dokter</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Daftar Dokter</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>Posisi</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($doctors as $doctor): ?>
        <tr>
            <td><?php echo $doctor->doctor_name; ?></td>
            <td><?php echo $doctor->doctor_id_position; ?></td>
            <td><?php echo $doctor->doctor_id_description; ?></td>
            <td>
                <?php if (!empty($doctor->doctor_photo_open)): ?>
                    <img src="<?php echo base_url('asset/' . $doctor->doctor_photo_open); ?>" width="50" alt="Foto Dokter">
                <?php else: ?>
                    Tidak ada foto
                <?php endif; ?>
            </td>
            <td>
                <a href="<?php echo site_url('doctor/view/' . $doctor->doctor_id); ?>">Lihat</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>