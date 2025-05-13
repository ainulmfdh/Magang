<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Style untuk overlay (background gelap) */
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        /* Style untuk pop-up */
        .popup-container {
            position: relative;
            max-width: 90%;
            max-height: 90%;
        }

        /* Style untuk gambar pop-up */
        .popup-image {
            width: 100%;
            max-width: 800px;
            height: 350px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }

        /* Style untuk tombol close */
        .close-button {
            position: absolute;
            top: -15px;
            right: -15px;
            width: 50px;
            height: 50px;
            background-color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            font-size: 18px;
            font-weight: bold;
            border: none;
        }

        /* Animasi untuk pop-up */
        .popup-animation {
            animation: popupFadeIn 0.3s ease-in-out;
        }

        @keyframes popupFadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <!-- Struktur Pop-up -->
    <div id="popupOverlay" class="popup-overlay">
        <div class="popup-container popup-animation">
            <img src="asset/popup-dekstop.png" alt="Pengumuman BPJS" class="popup-image">
            <button id="closeButton" class="close-button">✕</button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            //pop-up saat halaman dimuat
            document.getElementById('popupOverlay').style.display = 'flex';
            
            document.getElementById('closeButton').addEventListener('click', function() {
                document.getElementById('popupOverlay').style.display = 'none';
            });
            
            // Tambahan: Tutup pop-up saat overlay diklik (opsional)
            document.getElementById('popupOverlay').addEventListener('click', function(event) {
                if (event.target === this) {
                    document.getElementById('popupOverlay').style.display = 'none';
                }
            });
            
            // const popupShown = sessionStorage.getItem('popupShown');
            
            // if (!popupShown) {
            //     document.getElementById('popupOverlay').style.display = 'flex';
            //     sessionStorage.setItem('popupShown', 'true');
            // } else {
            //     document.getElementById('popupOverlay').style.display = 'none';
            // }
            
        });
    </script>
</body>
</html>