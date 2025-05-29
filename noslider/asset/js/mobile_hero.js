// Add this at the beginning of your script section
    let clickCount = 0;

    // Get the modal element using Bootstrap
    const bookingModal = new bootstrap.Modal(document.getElementById('bookingModal'), {
        backdrop: 'static', // Prevents closing when clicking outside the modal
        keyboard: false     // Prevents closing when pressing escape key
    });

    // Mobile menu toggle
    const hamburgerMenu = document.getElementById('hamburgerMenu');
    const mobileNav = document.getElementById('mobileNav');
    
    hamburgerMenu.addEventListener('click', function() {
        if (mobileNav.style.display === 'block') {
            mobileNav.style.display = 'none';
        } else {
            mobileNav.style.display = 'block';
        }
    });
    
    // Hide mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (event.target !== hamburgerMenu && event.target !== mobileNav && 
            !hamburgerMenu.contains(event.target) && !mobileNav.contains(event.target)) {
            mobileNav.style.display = 'none';
        }
    });

    // Update the modal options to prevent fullscreen on mobile
    document.addEventListener('DOMContentLoaded', function() {
        var successModalElement = document.getElementById('successModal');
        if (successModalElement) {
            successModalElement.classList.remove('modal-fullscreen-sm-down');
        }
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