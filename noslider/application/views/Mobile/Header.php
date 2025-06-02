<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Mata</title>
    <link rel="stylesheet" href="<?= base_url('asset/css/mobile_header.css'); ?>">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
           <img src="<?= base_url('asset/images/logo.png'); ?>" alt="Logo Klinik Mata dr Sjarsu">
        </div>
       
        <!-- Hamburger Menu for Mobile -->
        <div class="hamburger-menu" id="hamburgerMenu">
            <span>☰</span>
        </div>
    </header>
    
    <!-- Mobile Navigation Menu -->
    <div class="mobile-nav" id="mobileNav">
        <ul>
            <li><a href="<?= site_url('mobile'); ?>">Beranda</a></li>
            <li><a href="<?= site_url('mobile'); ?>">Pelayanan</a></li>
            <li><a href="<?= site_url('doctor/mobile'); ?>">Dokter</a></li>
            <li><a href="<?= site_url('mobile/jadwaldokter'); ?>">Jadwal Dokter</a></li>
            <li><a href="<?= site_url('news/mobile'); ?>">Berita Terbaru</a></li>
        </ul>
    </div>
    

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

<!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('asset/js/mobile_header.js'); ?>"></script>    
</body>
</html>
