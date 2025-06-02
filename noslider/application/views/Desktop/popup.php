<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('asset/css/dekstop_popup.css'); ?>">
</head>
<body>
    <!-- Struktur Pop-up -->
    <div id="popupOverlay" class="popup-overlay">
        <div class="popup-container popup-animation">
            <img src="<?= base_url('asset/images/popup-dekstop.png'); ?>" alt="Pengumuman BPJS" class="popup-image">
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