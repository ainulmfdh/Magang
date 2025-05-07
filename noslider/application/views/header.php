<?php
// header.php - Contains the hero section with booking button
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Mata</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #ffffff;
        }
        
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 30px;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 2.5rem;
        }
        
        nav ul li a {
            text-decoration: none;
            color: #333;
            font-size: 17px;
            font-weight: 500;
        }

        nav ul li a:hover {
            color: #16b9c8;
        }
        
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2rem 5%;
            min-height: 80vh;
            position: relative;
        }
        
        .hero-content {
            max-width: 500px;
        }
        
        .hero-content h1 {
            color: #333;
            font-size: 32px;
            text-transform: uppercase;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 20px;
        }
        
        .hero-content p {
            color: #666;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        
        .booking-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            background-color: #00ACC1;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .booking-btn img {
            margin-right: 8px;
            width: 16px;
        }

        .hero-image {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .hero-image img {
            width: 700px;
            height: 700px;
        }

        /* Custom Modal Styles */
        .modal-header-tabs {
            display: flex;
            justify-content: center;
            padding: 20px 0 10px;
            gap: 15px;
            background-color: #f2f2f2;
            border-bottom: none;
        }

        .tab {
            padding: 12px 40px;
            cursor: pointer;
            font-weight: 600;
            font-size: 16px;
            border-radius: 5px;
            background-color: transparent;
            border: none;
        }

        .tab.active {
            background-color: #16b9c8;
            color: white;
        }

        .tab:not(.active) {
            background-color: white;
            color: #333;
        }

        .modal-title {
            text-align: center;
            font-size: 22px;
            margin-top: 20px;
            margin-bottom: 50px;
            color: #585C5C;
            font-weight: bold;
        }

        .modal-content {
            background-color: #f2f2f2;
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-size: 15px;
            color: #596060;
            font-weight: bold;
        }

        .form-group .hint {
            font-size: 12px;
            color: #596060;
            margin-top: 2px;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
            background-color: white;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .button-cek {
            background-color: #16b9c8;
            color: white;
            border: none;
            width: 150px;
            padding-top: 8px;
            padding-bottom: 8px;
            border-radius: 50px;
            margin-bottom: 20px;
        }

        .button-cancel {
            background-color:rgb(196, 42, 42);
            color: white;
            border: none;
            width: 150px;
            padding-top: 8px;
            padding-bottom: 8px;
            border-radius: 50px;
            margin-bottom: 20px;
        }

        /* Patient Data Section */
        .data-pasien {
            background-color: white;
            border-radius: 5px;
            padding: 15px 20px;
            margin-bottom: 20px;
        }

        .data-pasien h4 {
            color: #333;
            margin-bottom: 15px;
            font-size: 16px;
            font-weight: bold;
        }

        .patient-info {
            display: grid;
            grid-template-columns: 100px 1fr;
            row-gap: 10px;
            color: #333;
            font-size: 15px;
        }

        .patient-info div:nth-child(odd) {
            font-weight: 500;
        }

        /* Session Selection Styling */
        .sesi-selection {
            margin-top: 15px;
        }

        .sesi-options {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .sesi-option {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            background-color: white;
            color: #333;
            transition: all 0.2s ease;
        }

        .sesi-option.selected {
            background-color: #16b9c8;
            color: white;
            border-color: #16b9c8;
        }

        /* Tanggal Selection Styling */
        .date-picker {
            margin-top: 15px;
        }
        
        .date-picker input[type="date"] {
            width: 100%;
            padding: 12px 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
            background-color: white;
        }

        .form-notes {
            margin-top: 15px;
            font-size: 12px;
            color: #666;
            font-style: italic;
        }

        .button-kirim {
            background-color: #16b9c8;
            color: white;
            border: none;
            width: 150px;
            padding-top: 8px;
            padding-bottom: 8px;
            border-radius: 50px;
            margin-bottom: 20px;
        }

        .hidden {
            display: none;
        }
        
        /* Error messages */
        .error-message {
            color: #dc3545;
            font-size: 12px;
            margin-top: 5px;
            display: none;
        }
        
        /* Custom modal size */
        .modal-xl {
            max-width: 1000px;
        }
        
        .modal-body {
            background-color: #f2f2f2;
        }

        .patient-info p {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="asset/logo.png" alt="Logo Klinik Mata dr Sjarsu">
        </div>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Pelayanan</a></li>
                <li><a href="#">Dokter</a></li>
                <li><a href="#">Jadwal Dokter</a></li>
                <li><a href="#">Berita Terbaru</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="hero">
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
        
        <div class="hero-image">
            <img src="asset/hero-img.png" alt="Dokter dengan keterangan klinik" style="max-width: 500px; height: auto;">
        </div>
    </main>

 <!-- Modal Popup with Bootstrap 5 -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
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
<script>
      // Get the modal element using Bootstrap
    const bookingModal = new bootstrap.Modal(document.getElementById('bookingModal'), {
        backdrop: 'static', // Prevents closing when clicking outside the modal
        keyboard: false     // Prevents closing when pressing escape key
    });

    // Form elements
    const bookingForm = document.getElementById('bookingForm');
    const patientDataSection = document.getElementById('patientDataSection');

    // Inputs and error messages
    const nikInput = document.getElementById('nikInput');
    const rujukanInput = document.getElementById('rujukanInput');
    const nikError = document.getElementById('nikError');
    const rujukanError = document.getElementById('rujukanError');

    // Buttons
    const cekButton = document.getElementById('cekButton');
    const kirimButton = document.getElementById('kirimButton');
    const initialButtonsSection = document.getElementById('initialButtonsSection');
    const finalButtonsSection = document.getElementById('finalButtonsSection');

    // Tab switching
    const bpjsTab = document.getElementById('bpjsTab');
    const privatTab = document.getElementById('privatTab');

    bpjsTab.addEventListener('click', function() {
        bpjsTab.classList.add('active');
        privatTab.classList.remove('active');
        resetForm();
    });

    privatTab.addEventListener('click', function() {
        privatTab.classList.add('active');
        bpjsTab.classList.remove('active');
        resetForm();
    });

    // Reset form and errors
    function resetForm() {
        // Clear input fields
        nikInput.value = '';
        rujukanInput.value = '';
        
        // Hide error messages
        nikError.style.display = 'none';
        rujukanError.style.display = 'none';
        
        // Hide patient data section
        patientDataSection.classList.add('hidden');
        
        // Show initial buttons, hide final buttons
        initialButtonsSection.classList.remove('hidden');
        finalButtonsSection.classList.add('hidden');
        
        // Reset select and date
        if (document.getElementById('sesiSelect')) {
            document.getElementById('sesiSelect').selectedIndex = 0;
        }
        
        if (document.getElementById('appointmentDate')) {
            document.getElementById('appointmentDate').value = '';
        }
    }

    // Modal is shown event
    document.getElementById('bookingModal').addEventListener('show.bs.modal', function () {
        resetForm();
    });

    // Validate NIK and Rujukan inputs
    function validateInputs() {
        let isValid = true;
        
        // Validate NIK (must be 14 digits)
        if (!nikInput.value.trim()) {
            nikError.textContent = 'NIK tidak boleh kosong';
            nikError.style.display = 'block';
            isValid = false;
        } else if (!/^\d{14}$/.test(nikInput.value.trim())) {
            nikError.textContent = 'NIK harus berisi 14 angka';
            nikError.style.display = 'block';
            isValid = false;
        } else {
            nikError.style.display = 'none';
        }
        
        // Validate Rujukan (must be 19 digits)
        if (!rujukanInput.value.trim()) {
            rujukanError.textContent = 'Nomor Surat Rujukan tidak boleh kosong';
            rujukanError.style.display = 'block';
            isValid = false;
        } else if (!/^\d{19}$/.test(rujukanInput.value.trim())) {
            rujukanError.textContent = 'Nomor Surat Rujukan harus berisi 19 angka';
            rujukanError.style.display = 'block';
            isValid = false;
        } else {
            rujukanError.style.display = 'none';
        }
        
        return isValid;
    }

    // Cek button functionality - Show patient data
    cekButton.addEventListener('click', function() {
        if (validateInputs()) {
            // Show patient data section
            patientDataSection.classList.remove('hidden');
            
            // Hide initial buttons section and show final buttons section
            initialButtonsSection.classList.add('hidden');
            finalButtonsSection.classList.remove('hidden');
            
            // Set today as minimum date for appointment
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('appointmentDate').min = today;
            
            // Calculate max date (7 days from today)
            const maxDate = new Date();
            maxDate.setDate(maxDate.getDate() + 7);
            document.getElementById('appointmentDate').max = maxDate.toISOString().split('T')[0];
        }
    });

    // Kirim button functionality
        kirimButton.addEventListener('click', function() {
        const sesiSelect = document.getElementById('sesiSelect');
        const appointmentDate = document.getElementById('appointmentDate');
        
        if (!sesiSelect.value) {
            alert('Silakan pilih sesi terlebih dahulu');
            return;
        }
        
        if (!appointmentDate.value) {
            alert('Silakan pilih tanggal terlebih dahulu');
            return;
        }
        
        // Close the modal properly
        const modalElement = document.getElementById('bookingModal');
        const modalInstance = bootstrap.Modal.getInstance(modalElement);
        modalInstance.hide();
        
        resetForm();
        
        alert('Jadwal berhasil dipesan!');

        bookingModal.hide();
    });
    </script>
</body>
</html>