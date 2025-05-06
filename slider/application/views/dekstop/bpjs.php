<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Jadwal Pemeriksaan - Privat & BPJS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/css/form.css') ?>">
    
    <script>
    function validateForm(event) {
        event.preventDefault(); // Hindari form langsung submit

        let form = event.target; // Ambil form yang sedang di-submit
        if (!form.checkValidity()) {
            form.classList.add('was-validated'); // Tampilkan pesan error
            return false;
        }

        // Jika valid, tampilkan form tambahan berdasarkan form yang di-submit
        if (form.id === "bpjsForm") {
            document.getElementById('extraForm').classList.remove('d-none');
        } else if (form.id === "privatForm") {
            document.getElementById('extraFormPrivat').classList.remove('d-none');
        }
        return true;
    }

    function showPrivatForm() {
        document.getElementById('bpjsForm').classList.add('d-none');
        document.getElementById('privatForm').classList.remove('d-none');
        document.getElementById('privat').classList.add('active');
        document.getElementById('bpjs').classList.remove('active');
    }

    function showBPJSForm() {
        document.getElementById('privatForm').classList.add('d-none');
        document.getElementById('bpjsForm').classList.remove('d-none');
        document.getElementById('bpjs').classList.add('active');
        document.getElementById('privat').classList.remove('active');
    }
</script>
</head>
<body>

<!-- Memberikan jarak dari sisi kanan & kiri -->
<div class="container mt-5">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a id="privat" class="nav-link active text-white" onclick="showPrivatForm()">Privat</a>
        </li>
        <li class="nav-item">
            <a id="bpjs" class="nav-link active text-white" onclick="showBPJSForm()">BPJS</a>
        </li>
    </ul>
</div>

<div class="container px-3">
    <!-- Form BPJS -->
    <div id="bpjsForm" class="card1 card-custom p-4">
        <h5 class="text-white">Pesan Jadwal Pemeriksaan - BPJS</h5>
            <form id="bpjsForm" class="needs-validation" novalidate onsubmit="return validateForm(event)">
            <div class="mb-2">
                <label for="nik" class="form-label">NIK</label>
                <small class="form-example">Eg. (3576014403910003)</small>
                <input type="text" id="nik" class="form-control rounded-2" pattern="\d{16}" required>
                <div class="invalid-feedback">Masukkan NIK 16 digit.</div>
            </div>

            <div class="mb-2">
                <label for="rujukan" class="form-label">Nomor Surat Rujukan / Kontrol</label>
                <small class="form-example">Eg. (021750052025K0002867)</small>
                <input type="text" id="rujukan" class="form-control rounded-2" pattern="[A-Z0-9]{20,25}" required>
                <div class="invalid-feedback">Masukkan Nomor Rujukan yang valid.</div>
            </div>

            <button type="submit" class="btn1 btn-custom w-50 mt-3">Cek</button>
        </form>

            <div id="extraForm" class="d-none mt-3">
            <div class="p-3 bg-light border rounded text-dark">
                <p><strong>Nama :</strong> John Doe</p>
                <p><strong>NIK :</strong> 3576014403910003</p>
                <p><strong>No. HP :</strong> 09754282839</p>
            </div>
            <div class="mt-2">
                <label for="tanggal" class="form-label text-white">Pilih Tanggal</label>
                <input type="date" id="tanggal" class="form-control rounded-2">
            </div>
            <div class="mt-2">
                <label for="sesi" class="form-label text-white">Pilih Sesi</label>
                <select id="sesi" class="form-select">
                    <option>Pagi</option>
                    <option>Siang</option>
                    <option>Sore</option>
                </select>
            </div>
            <small class="text-white d-block mt-2">*Batas maksimum pemesanan jadwal 3 bulan ke depan</small>
            <small class="text-white d-block">*Pilihan tanggal akan berwarna merah jika kuota penuh</small>
            <button type="submit" class="btn1 btn-custom w-100 mt-3">Kirim</button>
        </div>            
    </div>

    <!-- Form Privat -->
<div id="privatForm" class="card1 card-custom-privat p-4 d-none">
    <h5 class="text-white">Pesan Jadwal Pemeriksaan - Privat</h5>
    <form id="privatForm" class="needs-validation" novalidate onsubmit="return validateForm(event)">
        <div class="mb-2">
            <label for="nik" class="form-label">NIK</label>
            <small class="form-example">Eg. (3576014403910003)</small>
            <input type="text" id="nik" class="form-control rounded-2" pattern="\d{16}" required>
            <div class="invalid-feedback">Masukkan NIK 16 digit.</div>
        </div>

        <div class="mb-2">
            <label for="rujukan" class="form-label">Nomor Surat Rujukan / Kontrol</label>
            <small class="form-example">Eg. (021750052025K0002867)</small>
            <input type="text" id="rujukan" class="form-control rounded-2" pattern="[A-Z0-9]{20,25}" required>
            <div class="invalid-feedback">Masukkan Nomor Rujukan yang valid.</div>
        </div>

        <button type="submit" class="btn1 btn-custom-privat w-50 mt-3">Cek</button>
    </form>

    <div id="extraFormPrivat" class="d-none mt-3">
        <div class="p-3 bg-light border rounded text-dark">
            <p><strong>Nama :</strong> Jane Doe</p>
            <p><strong>NIK :</strong> 3576014403910003</p>
            <p><strong>No. HP :</strong> 081234567890</p>
        </div>
        <div class="mt-2">
            <label for="tanggalPrivat" class="form-label text-white">Pilih Tanggal</label>
            <input type="date" id="tanggalPrivat" class="form-control rounded-2">
        </div>
        <div class="mt-2">
            <label for="sesiPrivat" class="form-label text-white">Pilih Sesi</label>
            <select id="sesiPrivat" class="form-select">
                <option>Pagi</option>
                <option>Siang</option>
                <option>Sore</option>
            </select>
        </div>
        <small class="text-white d-block mt-2">*Batas maksimum pemesanan jadwal 3 bulan ke depan</small>
        <small class="text-white d-block">*Pilihan tanggal akan berwarna merah jika kuota penuh</small>
        <button type="submit" class="btn1 btn-custom-privat w-100 mt-3">Kirim</button>
    </div>            
</div>

</body>
</html>