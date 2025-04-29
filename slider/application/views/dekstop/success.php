<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .modal-heade{
            background: rgba(212, 212, 212, 0.1);
        }
    </style>
</head>
<body>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Success
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content text-center">
      <div class="modal-header bg-success">
        <h1 class="modal-title fs-3 fw-medium text-white" id="staticBackdropLabel">Success</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="fw-normal fs-5 text-center">Pemesanan jadwal pemeriksaan BPJS telah berhasil, silahkan catat kode berikut sebagai bukti anda telah mendaftar :
        </p>
        <p class="fw-bold fs-1 text-center">BOOKING CODE: B7P1</p>
        <p class="fw-medium fs-6 text-center">Wed, 05/03/2025, Pukul : 19.00</p>
        <p><sup class="text-center fw-light"><i>*Screenshot kode booking, dan tunjukkan ke bagian pelayanan untuk melanjutkan pendaftaran</i></sup></p>
      </div>
      <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-success btn-lg" data-bs-dismiss="modal">Kembali</button>
    </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Error
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h1 class="modal-title fs-3 fw-medium text-white" id="exampleModalLabel">Error!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p class="fw-normal fs-5 text-center">Nomer rujukan tidak ditemukan atau tidak valid</p>
      </div>
      <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Coba lagi</button>
    </div>
    </div>
  </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>