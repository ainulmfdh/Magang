<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Mata Dr Sjamsu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            overflow-x: hidden;
        }
        
        .container {
            display: flex;
            width: 100%;
            height: 100vh;
        }
        
        .info-panel {
            width: 300px;
            background-color: #00a2a2;
            color: white;
            padding: 20px;
        }
        
        .map-container {
            flex: 1;
            position: relative;
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .map-controls {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: white;
            border-radius: 2px;
            box-shadow: 0 1px 4px rgba(0,0,0,0.3);
            display: flex;
        }
        
        .map-controls button {
            padding: 8px 16px;
            border: none;
            background: white;
            cursor: pointer;
            font-size: 14px;
        }
        
        .map-controls button.active {
            border-bottom: 2px solid #00a2a2;
        }
        
        .section-title {
            font-size: 24px;
            margin-bottom: 30px;
            font-weight: bold;
        }
        
        .hours-table {
            width: 100%;
            margin-bottom: 30px;
        }
        
        .hours-table tr {
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .hours-table td {
            padding: 12px 0;
        }
        
        .additional-info {
            margin-top: 40px;
        }
        
        .additional-info h3 {
            font-size: 20px;
            margin-bottom: 20px;
        }
        
        .contact-info {
            margin-bottom: 10px;
        }
        
        .contact-info p {
            margin-bottom: 10px;
        }
        
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                height: auto;
            }
            
            .info-panel {
                width: 100%;
            }
            
            .map-container {
                height: 400px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left side information panel -->
        <div class="info-panel">
            <h2 class="section-title">Jam Operasional</h2>
            
            <table class="hours-table">
                <tr>
                    <td>Senin - Jumat</td>
                    <td>08.00 - 21.00</td>
                </tr>
                <tr>
                    <td>Sabtu</td>
                    <td>08.00 - 21.00</td>
                </tr>
                <tr>
                    <td>Minggu/Hari Libur</td>
                    <td>Tutup</td>
                </tr>
            </table>
            
            <div class="additional-info">
                <h3>Informasi Lebih Lanjut</h3>
                <div class="contact-info">
                    <p>031-5957430 / 031-5881643 / 031-5926951</p>
                    <p>0823 2883 4899</p>
                    <p>info@klinikmatadrsajmsu.com</p>
                </div>
            </div>
        </div>
        
        <!-- Right side map container -->
        <div class="map-container">
            <!-- Map Controls -->
            <div class="map-controls">
                <button class="active">Maps</button>
                <button>Satelite</button>
            </div>
            
            <!-- Embed Google Maps -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6661035975266!2d112.7691885!3d-7.2817763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf8381ac47f%3A0x3027a76e352ba0!2sKlinik%20Mata%20Dr%20Sjamsu!5e0!3m2!1sen!2sid!4v1650000000000!5m2!1sen!2sid" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>

    <script>
        // Simple script to toggle between Maps and Satellite view
        document.addEventListener('DOMContentLoaded', function() {
            const mapButtons = document.querySelectorAll('.map-controls button');
            
            mapButtons.forEach(button => {
                button.addEventListener('click', function() {
                    mapButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                    
                    // In a real implementation, you would change the map type here
                    // For Google Maps API, you would use something like:
                    // map.setMapTypeId(this.textContent.toLowerCase() === 'maps' ? 'roadmap' : 'satellite');
                });
            });
        });
    </script>
</body>
</html>