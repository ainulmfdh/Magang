<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Jadwal Pemeriksaan - Privat & BPJS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('asset/css/form.css') ?>">
    <style>
        .success-modal-content {
            border-radius: 10px;
            border: none;
            overflow: hidden;
        }
        .success-header {
            background-color: #f44336;
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
        .successbtn-kembali {
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 10px 40px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
        }
        .successbtn-kembali:hover {
            background-color: #d32f2f;
        }
        .success-header.success {
            background-color: #2ECC71;
        }
        .successbtn-kembali.success {
            background-color: #2ECC71;
        }
        .successbtn-kembali.success:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

<!-- Memberikan jarak dari sisi kanan & kiri -->
<div class="container mt-5">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a id="privat" class="nav-link active text-white" onclick="showPrivatForm()">Privat</a>
        </li>
        <li class="nav-item">
            <a id="bpjs" class="nav-link text-white" onclick="showBPJSForm()">BPJS</a>
        </li>
    </ul>
</div>

<div class="container px-3">
    <!-- Form BPJS -->
    <div id="bpjsForm" class="card1 card-custom p-4">
        <h5 class="text-white">Pesan Jadwal Pemeriksaan - BPJS</h5>
        <form id="bpjsForm" class="needs-validation" novalidate onsubmit="return validateForm(event)">
            <div class="mb-2">
                <label for="nik_bpjs" class="form-label">NIK</label>
                <small class="form-example">Eg. (3576014403910003)</small>
                <input type="text" id="nik_bpjs" class="form-control rounded-2" required>
                <div class="invalid-feedback">Masukkan NIK 14 digit.</div>
            </div>

            <div class="mb-2">
                <label for="rujukan_bpjs" class="form-label">Nomor Surat Rujukan / Kontrol</label>
                <small class="form-example">Eg. (021750052025K0002867)</small>
                <input type="text" id="rujukan_bpjs" class="form-control rounded-2" required>
                <div class="invalid-feedback">Masukkan Nomor Rujukan 19 digit.</div>
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
                    <option value="">Pilih sesi</option>
                    <option value="Pagi">Pagi</option>
                    <option value="Siang">Siang</option>
                    <option value="Sore">Sore</option>
                </select>
            </div>
            <small class="text-white d-block mt-2">*Batas maksimum pemesanan jadwal 7 hari ke depan</small>
            <small class="text-white d-block">*Pilihan tanggal akan berwarna merah jika kuota penuh</small>
            <button type="button" class="btn1 btn-custom w-100 mt-3" onclick="submitBooking('bpjs')">Kirim</button>
        </div>            
    </div>

    <!-- Form Privat -->
    <div id="privatForm" class="card1 card-custom-privat p-4 d-none">
        <h5 class="text-white">Pesan Jadwal Pemeriksaan - Privat</h5>
        <form id="privatForm" class="needs-validation" novalidate onsubmit="return validateForm(event)">
            <div class="mb-2">
                <label for="nik_privat" class="form-label">NIK</label>
                <small class="form-example">Eg. (3576014403910003)</small>
                <input type="text" id="nik_privat" class="form-control rounded-2" required>
                <div class="invalid-feedback">Masukkan NIK 14 digit.</div>
            </div>

            <div class="mb-2">
                <label for="rujukan_privat" class="form-label">Nomor Surat Rujukan / Kontrol</label>
                <small class="form-example">Eg. (021750052025K0002867)</small>
                <input type="text" id="rujukan_privat" class="form-control rounded-2" required>
                <div class="invalid-feedback">Masukkan Nomor Rujukan 19 digit.</div>
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
                    <option value="">Pilih sesi</option>
                    <option value="Pagi">Pagi</option>
                    <option value="Siang">Siang</option>
                    <option value="Sore">Sore</option>
                </select>
            </div>
            <small class="text-white d-block mt-2">*Batas maksimum pemesanan jadwal 7 hari ke depan</small>
            <small class="text-white d-block">*Pilihan tanggal akan berwarna merah jika kuota penuh</small>
            <button type="button" class="btn1 btn-custom-privat w-100 mt-3" onclick="submitBooking('privat')">Kirim</button>
        </div>            
    </div>
</div>

<!-- Warning Modal -->
<div class="modal fade" id="warningModal" tabindex="-1" aria-labelledby="warningModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content success-modal-content">
            <div class="success-header">
                <button type="button" class="successbtn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h2>Warning!</h2>
            </div>
            <div class="success-body">
                <p>
                    Anda telah melewati batas pengisian formulir, hubungi admin KMDS untuk booking lebih lanjut.
                </p>
                <button class="successbtn-kembali" 
                        id="hubungiAdminBtn" 
                        data-bs-dismiss="modal"
                        onclick="window.open('https://api.whatsapp.com/send?phone=62082328834899&text=HaloKMDS', '_blank')">
                    Hubungi Admin
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content success-modal-content">
            <div class="success-header success">
                <button type="button" class="successbtn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h2>Success</h2>
            </div>
            <div class="success-body">
                <p>
                    Pemesanan jadwal pemeriksaan telah berhasil, silahkan catat kode berikut sebagai bukti anda telah mendaftar :
                </p>
                <div class="successbooking-code">
                    <h3>BOOKING CODE: <span id="generatedCode"></span></h3>
                </div>
                <div class="successbooking-date">
                    <p id="appointmentDateTime"></p>
                </div>
                <p class="successbooking-instruction">
                    Screenshot kode booking, dan tunjukkan ke bagian pelayanan untuk melanjutkan pendaftaran
                </p>
                <button class="successbtn-kembali success" data-bs-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Counter untuk batas klik
let clickCount = 0;

// Fungsi untuk menampilkan form Privat
function showPrivatForm() {
    document.getElementById('bpjsForm').classList.add('d-none');
    document.getElementById('privatForm').classList.remove('d-none');
    document.getElementById('privat').classList.add('active');
    document.getElementById('bpjs').classList.remove('active');
    clickCount = 0; // Reset click count
    document.getElementById('bpjsForm').reset();
    document.getElementById('privatForm').reset();
    document.getElementById('extraForm').classList.add('d-none');
    document.getElementById('extraFormPrivat').classList.add('d-none');
}

// Fungsi untuk menampilkan form BPJS
function showBPJSForm() {
    document.getElementById('privatForm').classList.add('d-none');
    document.getElementById('bpjsForm').classList.remove('d-none');
    document.getElementById('bpjs').classList.add('active');
    document.getElementById('privat').classList.remove('active');
    clickCount = 0; // Reset click count
    document.getElementById('bpjsForm').reset();
    document.getElementById('privatForm').reset();
    document.getElementById('extraForm').classList.add('d-none');
    document.getElementById('extraFormPrivat').classList.add('d-none');
}

// Fungsi untuk validasi input NIK dan Nomor Rujukan
function validateInputs(nikInput, rujukanInput, nikError, rujukanError) {
    let isValid = true;

    // Validasi NIK (harus 14 digit)
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

    // Validasi Nomor Rujukan (harus 19 digit)
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

// Fungsi validasi form
function validateForm(event) {
    event.preventDefault(); // Hindari submit default
    let form = event.target;

    // Tambah counter klik hanya jika input salah
    let nikInput, rujukanInput, nikError, rujukanError, extraForm;
    if (form.id === "bpjsForm") {
        nikInput = document.getElementById('nik_bpjs');
        rujukanInput = document.getElementById('rujukan_bpjs');
        nikError = form.querySelector('.invalid-feedback');
        rujukanError = form.querySelectorAll('.invalid-feedback')[1];
        extraForm = document.getElementById('extraForm');
    } else if (form.id === "privatForm") {
        nikInput = document.getElementById('nik_privat');
        rujukanInput = document.getElementById('rujukan_privat');
        nikError = form.querySelector('.invalid-feedback');
        rujukanError = form.querySelectorAll('.invalid-feedback')[1];
        extraForm = document.getElementById('extraFormPrivat');
    }

    // Validasi input
    if (!validateInputs(nikInput, rujukanInput, nikError, rujukanError)) {
        clickCount++;
        if (clickCount >= 4) {
            showWarningModal();
            clickCount = 0; // Reset setelah modal ditampilkan
            form.reset();
            return false;
        }
        form.classList.add('was-validated');
        return false;
    }

    // Jika valid, reset click count dan tampilkan form tambahan
    clickCount = 0;
    extraForm.classList.remove('d-none');
    // Set batas tanggal (7 hari ke depan)
    const today = new Date().toISOString().split('T')[0];
    const maxDate = new Date();
    maxDate.setDate(maxDate.getDate() + 7);
    const maxDateStr = maxDate.toISOString().split('T')[0];
    if (form.id === "bpjsForm") {
        document.getElementById('tanggal').min = today;
        document.getElementById('tanggal').max = maxDateStr;
    } else {
        document.getElementById('tanggalPrivat').min = today;
        document.getElementById('tanggalPrivat').max = maxDateStr;
    }

    return false;
}

// Fungsi untuk menampilkan warning modal
function showWarningModal() {
    try {
        const warningModal = new bootstrap.Modal(document.getElementById('warningModal'));
        warningModal.show();
    } catch (e) {
        console.error('Error showing warning modal:', e);
        alert('Error: Tidak dapat menampilkan warning modal. Pastikan Bootstrap JS dimuat.');
    }
}

// Fungsi untuk generate kode booking
function generateBookingCode() {
    const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const numbers = "0123456789";
    let code = "";
    code += letters.charAt(Math.floor(Math.random() * letters.length));
    code += numbers.charAt(Math.floor(Math.random() * numbers.length));
    code += letters.charAt(Math.floor(Math.random() * letters.length));
    code += numbers.charAt(Math.floor(Math.random() * numbers.length));
    return code;
}

// Fungsi untuk format tanggal
function formatAppointmentDate(date, session) {
    const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    const dayName = days[date.getDay()];
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const day = String(date.getDate()).padStart(2, '0');
    const year = date.getFullYear();
    let time = "";
    switch (session) {
        case "Pagi":
            time = "08.00";
            break;
        case "Siang":
            time = "13.00";
            break;
        case "Sore":
            time = "19.00";
        default:
            time = "08.00";
    }
    return `${dayName}, ${month}/${day}/${year}, Pukul : ${time}`;
}

// Fungsi untuk menangani submit booking
function submitBooking(type) {
    let sesiSelect, appointmentDate, form, extraForm;
    if (type === 'bpjs') {
        sesiSelect = document.getElementById('sesi');
        appointmentDate = document.getElementById('tanggal');
        form = document.getElementById('bpjsForm');
        extraForm = document.getElementById('extraForm');
    } else {
        sesiSelect = document.getElementById('sesiPrivat');
        appointmentDate = document.getElementById('tanggalPrivat');
        form = document.getElementById('privatForm');
        extraForm = document.getElementById('extraFormPrivat');
    }

    if (!sesiSelect.value) {
        alert('Silakan pilih sesi terlebih dahulu');
        return;
    }

    if (!appointmentDate.value) {
        alert('Silakan pilih tanggal terlebih dahulu');
        return;
    }

    // Generate kode booking
    const bookingCode = generateBookingCode();
    const selectedDate = new Date(appointmentDate.value);
    const formattedDateTime = formatAppointmentDate(selectedDate, sesiSelect.value);

    // Tampilkan success modal
    try {
        document.getElementById('generatedCode').textContent = bookingCode;
        document.getElementById('appointmentDateTime').textContent = formattedDateTime;
        const successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
    } catch (e) {
        console.error('Error showing success modal:', e);
        alert('Error: Tidak dapat menampilkan success modal. Pastikan Bootstrap JS dimuat.');
    }

    // Reset form dan click count
    clickCount = 0;
    form.reset();
    extraForm.classList.add('d-none');
}

// Handle modal backdrop cleanup
document.getElementById('successModal').addEventListener('hidden.bs.modal', function () {
    document.body.classList.remove('modal-open');
    const modalBackdrops = document.getElementsByClassName('modal-backdrop');
    while (modalBackdrops.length > 0) {
        modalBackdrops[0].parentNode.removeChild(modalBackdrops[0]);
    }
});

document.getElementById('warningModal').addEventListener('hidden.bs.modal', function () {
    document.body.classList.remove('modal-open');
    const modalBackdrops = document.getElementsByClassName('modal-backdrop');
    while (modalBackdrops.length > 0) {
        modalBackdrops[0].parentNode.removeChild(modalBackdrops[0]);
    }
});
</script>
</body>
</html>