<?php
// header.php - Contains the hero section with booking button
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Mata</title>
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

        /* Modal Popup Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-container {
            background-color: #f2f2f2;
            width: 1000px;
            padding: 10px 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            transform: translateY(-20px);
            transition: all 0.3s ease;
            color: white;
        }

        .modal-overlay.active .modal-container {
            transform: translateY(0);
        }

        .modal-header-tabs {
            display: flex;
            justify-content: center;
            padding: 20px 0 10px;
            gap: 15px;
        }

        .tab {
            padding: 12px 40px;
            cursor: pointer;
            font-weight: 600;
            font-size: 16px;
            border-radius: 5px;
            background-color: transparent;
            border: none;
            color: white;
        }

        .tab.active {
            background-color: #16b9c8;
            color: white;
        }

        .tab:not(.active) {
            background-color: white;
            color: #333;
        }

        .modal-body {
            padding: 20px 30px 30px;
        }

        .modal-title {
            text-align: center;
            font-size: 22px;
            margin-top: 20px;
            margin-bottom: 50px;
            color: #585C5C;
            font-weight: bold;
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

        .btn {
            padding: 12px 40px;
            border-radius: 25px;
            font-weight: 500;
            border: none;
            cursor: pointer;
            min-width: 120px;
            text-align: center;
        }

        .button-cek {
            background-color: #16b9c8;
            color: white;
            border: none;
            /* padding: 5px 40px; */
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
            <button class="booking-btn" id="openModal">
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

    <!-- Modal Popup -->
    <div class="modal-overlay" id="bookingModal">
        <div class="modal-container">
            <div class="modal-header-tabs">
                <button class="tab active">Bpjs</button>
                <button class="tab">Privat</button>
            </div>
            <div class="modal-body">
                <h3 class="modal-title">Pesan Jadwal Pemesanan</h3>
                
                <div class="form-group">
                    <label>NIK</label>
                    <div class="hint">Eg. (357601440390003)</div>
                    <input type="text" class="form-control" placeholder="" />
                </div>
                
                <div class="form-group">
                    <label>Nomor Surat Rujukan / Kontrol</label>
                    <div class="hint">Eg. (02175005202540002997)</div>
                    <input type="text" class="form-control" placeholder="" />
                </div>
                
                <div class="form-actions">
                    <button class="button-cek">Cek</button>
                    <button class="button-cancel" id="closeModal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
        // Get the modal elements
        const modal = document.getElementById('bookingModal');
        const openModalBtn = document.getElementById('openModal');
        const closeModalBtn = document.getElementById('closeModal');
        
        // Open modal function
        openModalBtn.addEventListener('click', function() {
            modal.classList.add('active');
        });
        
        // Close modal function
        closeModalBtn.addEventListener('click', function() {
            modal.classList.remove('active');
        });
        
        // Close modal when clicking outside
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.classList.remove('active');
            }
        });

        // Tab switching
        const tabs = document.querySelectorAll('.tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                tabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>