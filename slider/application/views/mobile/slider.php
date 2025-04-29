<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .slider-overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 0 30px;
        }

        .slider-heading {
            color: #CEFAFF;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            margin-top: 150px;
        }

        .slider-text {
            color: white;
            font-weight: 600;
            font-size: 20px;
            text-align: center;
            margin-top: 15px;
            padding: 0 20px;
        }

        .booking-btn {
            width: 275px;
            height: 57px;
            border-radius: 10px;
            background-color: white;
            color: #00AAB5;
            font-weight: bold;
            margin-top: 100px;
            border: none;
        }
    </style>
</head>
<body>
    <div style="min-height: 100vh;" class="h-100 position-relative" style="z-index: 10;">
        <div style="min-height: 100vh;">
            <img id="img-slider" style="min-height: 100vh;" class="w-100" src="<?= base_url('asset/bg-slider.png');?>">
        </div>
        <div class="slider-overlay h-100 d-flex flex-column align-items-center">
            <div class="d-flex flex-column">
                <h1 class="slider-heading">FOKUS UTAMA UNTUK KESEHATAN MATA ANDA</h1>
                <p class="slider-text">Jadwalkan waktu anda untuk periksa maupun konsultasi pada klinik kami, dengan klik booking dibawah ini</p>
            </div>
            <button id="btnBooking" class="booking-btn">
                <i class="fa-regular fa-calendar me-1"></i>
                Booking
            </button>
        </div>
    </div>
    
    <script>
        const sliderImages = ["<?= base_url('asset/bg-slider.png');?>", "<?= base_url('asset/bg2.png');?>"];
        const imageSlider = document.getElementById("img-slider");
        let imageSliderActive = 0;

        document.getElementById('btnBooking').addEventListener('click', function (event) {
            event.preventDefault(); // Mencegah perilaku default (jika tombol dalam form)
            document.getElementById('bpjs').scrollIntoView({ behavior: 'smooth' });
        });

        setInterval(() => {
            if (imageSliderActive === sliderImages.length - 1) {
                imageSliderActive = 0;
            } else {
                imageSliderActive++;
            }
            imageSlider.setAttribute('src', `${sliderImages[imageSliderActive]}`);
        }, 2000);
    </script>
</body>
</html>