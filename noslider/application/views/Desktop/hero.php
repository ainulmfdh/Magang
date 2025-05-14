<?php

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
        
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 30px;
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

        /* Pop up succes message */

        .success-modal-content {
            border-radius: 10px;
            border: none;
            overflow: hidden;
        }
        
        .success-header {
            background-color: #2ECC71;
            color: white;
            padding: 15px 20px;
            position: relative;
            text-align: center;
        }
        
        .success-header h2 {
            margin: 0;
            font-size: 28px;
            font-weight: 500;
        }
        
        .success-header .successbtn-close {
            position: absolute;
            right: 20px;
            top: 20px;
            color: white;
            background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
            opacity: 1;
        }
        
        .success-body {
            padding: 30px;
            text-align: center;
        }
        
        .success-body p {
            color: #333;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        
        .successbooking-code {
            margin: 25px 0;
        }
        
        .successbooking-code h3 {
            font-weight: bold;
            font-size: 24px;
            color: #333;
        }
        
        .successbooking-date {
            margin-bottom: 25px;
        }
        
        .successbooking-date p {
            font-size: 18px;
            color: #555;
            margin: 0;
        }
        
        .successbooking-instruction {
            font-size: 16px;
            color: #555;
            margin: 30px 0;
        }
        
        .successbtn-kembali {
            background-color: #2ECC71;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 40px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .successbtn-kembali:hover {
            background-color: #27AE60;
        }
    </style>
</head>
<body>
    
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
            <img src="<?= base_url('asset/hero-img.png'); ?>" alt="Dokter dengan keterangan klinik" style="max-width: 500px; height: auto;">
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

<!-- Pop up messages -->
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
<script>
    // Add this at the beginning of your script section
    let clickCount = 0;

    // Get the modal element using Bootstrap
    const bookingModal = new bootstrap.Modal(document.getElementById('bookingModal'), {
        backdrop: 'static', // Prevents closing when clicking outside the modal
        keyboard: false     // Prevents closing when pressing escape key
    });

    // Create warning modal element
    const warningModalHTML = `
    <div class="modal fade" id="warningModal" tabindex="-1" aria-labelledby="warningModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content success-modal-content">
                <div class="success-header" style="background-color: #f44336;">
                    <button type="button" class="successbtn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h2>Warning!</h2>
                </div>
                <div class="success-body">
                    <p>
                        Anda telah melewati batas pengisian formulir, hubungi admin KMDS untuk booking lebih lanjut.
                    </p>
                    <button class="successbtn-kembali" style="background-color: #f44336;" 
                        id="hubungiAdminBtn" 
                        data-bs-dismiss="modal"
                        onclick="window.open('https://api.whatsapp.com/send?phone=62082328834899&text=HaloKMDS', '_blank')">
                     Hubungi Admin
                    </button>
                </div>
            </div>
        </div>
    </div>
    `;

    // Add the warning modal to document body
    document.body.insertAdjacentHTML('beforeend', warningModalHTML);

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
        // Reset click count when modal is reopened
        clickCount = 0;
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

    // Show warning modal
    function showWarningModal() {
        // Hide booking modal
        const bookingModalElement = document.getElementById('bookingModal');
        const bookingModalInstance = bootstrap.Modal.getInstance(bookingModalElement);
        bookingModalInstance.hide();
        
        // Show warning modal
        const warningModal = new bootstrap.Modal(document.getElementById('warningModal'));
        warningModal.show();
    }

    // Cek button functionality - Show patient data
    cekButton.addEventListener('click', function() {
        // Increment click count
        clickCount++;
        
        // If click count reaches 4, show warning
        if (clickCount >= 4) {
            showWarningModal();
            return;
        }
        
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

    // Function to generate a random booking code
    function generateBookingCode() {
        const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        const numbers = "0123456789";
        let code = "";
        
        // Generate a pattern like "X0X0"
        code += letters.charAt(Math.floor(Math.random() * letters.length));
        code += numbers.charAt(Math.floor(Math.random() * numbers.length));
        code += letters.charAt(Math.floor(Math.random() * letters.length));
        code += numbers.charAt(Math.floor(Math.random() * numbers.length));
        
        return code;
    }

    // Function to format date to "Day, MM/DD/YYYY, Pukul: HH.MM" 
    function formatAppointmentDate(date, session) {
        const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        const dayName = days[date.getDay()];
        
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        const year = date.getFullYear();
        
        // Set time based on session
        let time = "";
        switch(session) {
            case "pagi":
                time = "08.00";
                break;
            case "siang":
                time = "13.00";
                break;
            case "malam":
                time = "19.00";
                break;
            default:
                time = "08.00";
        }
        
        return `${dayName}, ${month}/${day}/${year}, Pukul : ${time}`; 
    }

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
        
        // Close the booking modal
        const bookingModalElement = document.getElementById('bookingModal');
        const bookingModalInstance = bootstrap.Modal.getInstance(bookingModalElement);
        bookingModalInstance.hide();
        
        // Generate booking code
        const bookingCode = generateBookingCode();
        document.getElementById('generatedCode').textContent = bookingCode;
        
        // Set appointment date/time
        const selectedDate = new Date(appointmentDate.value);
        const formattedDateTime = formatAppointmentDate(selectedDate, sesiSelect.value);
        document.getElementById('appointmentDateTime').textContent = formattedDateTime;
        
        // Show success modal
        const successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
        
        // Reset form for next use
        resetForm();
        // Reset click count
        clickCount = 0;
    });

    // Add event listener for the success back button
    document.getElementById('successBackBtn').addEventListener('click', function() {
        // Ensure both the modal and backdrop are removed
        document.body.classList.remove('modal-open');
        const modalBackdrops = document.getElementsByClassName('modal-backdrop');
        if (modalBackdrops.length > 0) {
            for (let i = 0; i < modalBackdrops.length; i++) {
                modalBackdrops[i].parentNode.removeChild(modalBackdrops[i]);
            }
        }
    });

    // Add event listener for the close button in success modal
    document.getElementById('successModal').addEventListener('hidden.bs.modal', function () {
        // Ensure the backdrop is removed properly when modal is hidden
        document.body.classList.remove('modal-open');
        const modalBackdrops = document.getElementsByClassName('modal-backdrop');
        if (modalBackdrops.length > 0) {
            for (let i = 0; i < modalBackdrops.length; i++) {
                modalBackdrops[i].parentNode.removeChild(modalBackdrops[i]);
            }
        }
    });

    // Add event listener for Hubungi Admin button
    document.getElementById('hubungiAdminBtn').addEventListener('click', function() {
        // You can add functionality here to actually contact admin
        // For now, just ensure proper cleanup
        document.body.classList.remove('modal-open');
        const modalBackdrops = document.getElementsByClassName('modal-backdrop');
        if (modalBackdrops.length > 0) {
            for (let i = 0; i < modalBackdrops.length; i++) {
                modalBackdrops[i].parentNode.removeChild(modalBackdrops[i]);
            }
        }
    });
</script>
</body>
</html>