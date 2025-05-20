<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Mata</title>
    <link rel="stylesheet" href="<?= base_url('asset/css/mobile_hero.css'); ?>">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <main class="hero">
        <div class="hero-image">
            <section id="hero">
                <img src="<?= base_url('asset/hero-img.png'); ?>" alt="Dokter dengan keterangan klinik">
            </section>
        </div>
        
        <div class="hero-content">
            <h1>Fokus Utama Untuk Kesehatan Mata Anda</h1>
            <p>Jadwalkan waktu anda untuk periksa maupun konsultasi pada klinik kami, dengan klik booking dibawah ini</p>
            <button class="booking-btn" data-bs-toggle="modal" data-bs-target="#bookingModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
                Booking
            </button>
        </div>
    </main>

 <!-- Modal Popup with Bootstrap 5 -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header-tabs">
                <button class="tab active" id="bpjsTab">Bpjs</button>
                <button class="tab" id="privatTab">Privat</button>
            </div>
            <div class="modal-body">
                <!-- Single Form Content -->
                <div id="bookingForm">
                    <h3 class="modal-title">Pesan Jadwal Pemesanan</h3>
                    
                    <div class="form-group">
                        <label>NIK</label>
                        <div class="hint">Eg. (35760144039000)</div>
                        <input type="text" id="nikInput" class="form-control" placeholder="" />
                        <div class="error-message" id="nikError"></div>
                    </div>
                    
                    <div class="form-group">
                        <label>Nomor Surat Rujukan / Kontrol</label>
                        <div class="hint">Eg. (0217500520254000299)</div>
                        <input type="text" id="rujukanInput" class="form-control" placeholder="" />
                        <div class="error-message" id="rujukanError"></div>
                    </div>
                    
                    <!-- Initial Buttons Section -->
                    <div class="form-actions" id="initialButtonsSection">
                        <button class="button-cek" id="cekButton">Cek</button>
                        <button class="button-cancel" data-bs-dismiss="modal">Close</button>
                    </div>
                    
                    <!-- Patient Data (Hidden initially) -->
                    <div id="patientDataSection" class="hidden">
                        <div class="data-pasien">
                            <h4>Data Pasien</h4>
                            <div class="patient-info">
                                <p>Nama</p>
                                <div>: Nama Orang</div>
                                <p class="title-info">NIK</p>
                                <div>: 357601440390003</div>
                                <p class="title-info">No. Telepon</p>
                                <div>: 08972857372</div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Pilih Sesi</label>
                            <select id="sesiSelect" class="form-control">
                                <option value="" disabled selected>Pilih sesi yang diinginkan</option>
                                <option value="pagi">Pagi</option>
                                <option value="siang">Siang</option>
                                <option value="malam">Malam</option>
                            </select>
                        </div>
                        
                        <div class="form-group date-picker">
                            <label>Pilih Tanggal</label>
                            <input type="date" id="appointmentDate" class="form-control">
                        </div>
                        
                        <div class="form-notes">
                            <p>*Masa maksimum pemesanan jadwal 7 hari kedepan</p>
                            <p>**Pilih tanggal diatas beberapa menu jika tidak puas dengan tangal lainnya</p>
                        </div>
                    </div>
                    
                    <!-- Final Buttons Section (Hidden initially) -->
                    <div class="form-actions hidden" id="finalButtonsSection">
                        <button class="button-kirim" id="kirimButton">Kirim</button>
                        <button class="button-cancel" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Pop up success message -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content success-modal-content">
            <div class="success-header">
                <button type="button" class="successbtn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h2>Success</h2>
            </div>
            <div class="success-body">
                <p>
                    Pemesanan jadwal pemeriksaan BPJS telah berhasil, silahkan catat kode berikut sebagai bukti anda telah mendaftar :
                </p>
                <div class="successbooking-code">
                    <h3>BOOKING CODE: <span id="generatedCode">B7P1</span></h3>
                </div>
                <div class="successbooking-date">
                    <p id="appointmentDateTime">Wed, 05/03/2025, Pukul : 19.00</p>
                </div>
                <p class="successbooking-instruction">
                    Screenshot kode booking, dan tunjukkan ke bagian pelayanan untuk melanjutkan pendaftaran
                </p>
                <button class="successbtn-kembali" id="successBackBtn" data-bs-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('asset/js/mobile_hero.js'); ?>"></script>   
</body>
</html>