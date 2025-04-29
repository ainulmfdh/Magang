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
        <p>sdfdsfsd</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script>
        $(function () {
            window.addEventListener('resize', detectScreen);
        });


        function detectScreen() {
            var width = $(window).width();
            
            if (width < 768) {
                window.location.href = '<?= base_url('home_mobile') ?>';
                console.log('mobile');
            } 
        }
    </script>
</body>
</html>