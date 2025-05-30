<?php
// Helper function untuk mencari ID dokter berdasarkan nama
function findDoctorId($doctors, $doctorName) {
    foreach ($doctors as $doctor) {
        if (strtolower(trim($doctor->doctor_name)) == strtolower(trim($doctorName))) {
            return $doctor->doctor_id;
        }
    }
    return null;
}

// Data array jadwal dokter - UPDATE THIS WITH EXACT NAMES FROM DATABASE
$doctorSchedules = [
    'Prof. dr. Sjamsu Budiono, Sp.M(K)' => [
        'monday' => '17:30 - 20:30',
        'tuesday' => '17:30 - 20:30',
        'wednesday' => '17:30 - 20:30',
        'thursday' => '17:30 - 20:30',
        'friday' => '17:30 - 20:30',
        'saturday' => '-'
    ],
    'dr. M. Firmansyah, Sp.M(K)' => [ // Updated name
        'monday' => '19:30 - 20:00',
        'tuesday' => '15:30 - 16:00',
        'wednesday' => '-',
        'thursday' => '18:00 - 20:00',
        'friday' => '18:00 - 20:00',
        'saturday' => '-'
    ],
    'dr. Ria Sandy Deneska, Sp.M(K)' => [ // Updated name
        'monday' => '-',
        'tuesday' => '15:15 - 19:05',
        'wednesday' => '-',
        'thursday' => '-',
        'friday' => '-',
        'saturday' => '-'
    ],
    'dr. Maha Atma Dian Iehvara, Sp.M' => [ // Updated name
        'monday' => '8:40 - 11:40',
        'tuesday' => '9:00 - 11:40',
        'wednesday' => '-',
        'thursday' => '9:00 - 11:40',
        'friday' => '8:40 - 12:00',
        'saturday' => '-'
    ],
    'dr. Vinca Desyandri, Sp.M' => [ // Updated name
        'monday' => '8:40 - 12:00',
        'tuesday' => '9:40 - 11:40',
        'wednesday' => '8:40 - 11:30',
        'thursday' => '8:40 - 9:30',
        'friday' => '13:00 - 15:00',
        'saturday' => '-'
    ],
    'dr. Agulina Caesari Putri, Sp.M' => [ // Updated name
        'monday' => '-',
        'tuesday' => '18:00 - 20:00',
        'wednesday' => '14:30 - 16:30',
        'thursday' => '-',
        'friday' => '-',
        'saturday' => '-'
    ],
    'dr. Fitrika Wahyu Listari, Sp.M' => [ // New doctor
        'monday' => '-',
        'tuesday' => '-',
        'wednesday' => '-',
        'thursday' => '-',
        'friday' => '-',
        'saturday' => '-'
    ],
    'dr. Astrid Priolia Syulianti, SpM' => [ // Updated name
        'monday' => '14:00 - 16:00',
        'tuesday' => '-',
        'wednesday' => '-',
        'thursday' => '-',
        'friday' => '-',
        'saturday' => '-'
    ],
    'dr. Valeri Al Hakim, Sp.M' => [ // Updated name
        'monday' => '-',
        'tuesday' => '-',
        'wednesday' => '14:30 - 16:30',
        'thursday' => '14:45 - 16:15',
        'friday' => '-',
        'saturday' => '-'
    ],
    'dr. Sylva Dranindi T, Sp.M, M.Ked.Klin' => [ // Updated name
        'monday' => '-',
        'tuesday' => '-',
        'wednesday' => '-',
        'thursday' => '-',
        'friday' => '14:30 - 16:30',
        'saturday' => '-'
    ],
    'dr. Indriani Kartika Dewi, Sp.M' => [ // Updated name
        'monday' => '-',
        'tuesday' => '14:30 - 16:30',
        'wednesday' => '-',
        'thursday' => '17:00 - 19:00',
        'friday' => '17:00 - 19:00',
        'saturday' => '-'
    ],
    'dr. Amir Surya, Sp.M' => [ // Updated name
        'monday' => '16:45 - 18:45',
        'tuesday' => '-',
        'wednesday' => '16:45 - 18:45',
        'thursday' => '-',
        'friday' => '-',
        'saturday' => '-'
    ],
    'dr. Daya Banyu Bening, Sp.M' => [ // Updated name
        'monday' => '12:40 - 14:40',
        'tuesday' => '-',
        'wednesday' => '8:40 - 14:40',
        'thursday' => '12:40 - 14:40',
        'friday' => '13:00 - 15:00',
        'saturday' => '-'
    ],
    'dr. Citra Dewi Maharani, Sp.M' => [ // Updated name
        'monday' => '8:40 - 14:40',
        'tuesday' => '12:40 - 14:40',
        'wednesday' => '-',
        'thursday' => '-',
        'friday' => '8:40 - 11:40',
        'saturday' => '8:40 - 11:40'
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Mata dr Sjamsu - Jadwal Dokter</title>
    <style>
        .bread-crumb {
            display: flex;
            align-items: center;
            height: 60px;
            background-color: #00AAB5;
            color: white;
        }

        .bread-crumb > .container {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .bread-crumb > .container > a {
            cursor: pointer;
            padding-top: 10px;
            font-weight: 500;
            font-size: 16px;
            text-decoration: none;
            color: white;
        }
        .bread-crumb > .container > p {
            cursor: pointer;
            padding-top: 10px;
            font-weight: 500;
            font-size: 16px;
        }
        .main-content {
            padding: 30px 0;
            display: flex;
            gap: 30px;
        }
        
        .left-side {
            flex: 1;
        }
        
        .right-side {
            flex: 2;
        }
        
        .section-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }
        
        .doctor-select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 16px;
        }
        
        .calendar {
            width: 100%;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            overflow: hidden;
        }
        
        .calendar-header {
            background-color: #f9f9f9;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .month-year {
            font-weight: bold;
        }
        
        .calendar-controls {
            display: flex;
            gap: 10px;
        }
        
        .today-btn {
            padding: 5px 10px;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            border-radius: 3px;
            cursor: pointer;
        }
        
        .nav-btn {
            padding: 5px 8px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 3px;
            cursor: pointer;
        }
        
        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            text-align: center;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .day-header {
            padding: 10px;
            font-weight: bold;
            border-right: 1px solid #e0e0e0;
        }
        
        .day-header:last-child {
            border-right: none;
        }
        
        .calendar-dates {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-template-rows: repeat(6, 40px);
            text-align: center;
        }
        
        .date {
            padding: 10px;
            border-right: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            cursor: pointer;
        }
        
        .date:nth-child(7n) {
            border-right: none;
        }
        
        .date:nth-last-child(-n+7) {
            border-bottom: none;
        }
        
        .date.other-month {
            color: #ccc;
        }
        
        .date.today {
            background-color: #e6f7f8;
            font-weight: bold;
        }
        
        .date.selected {
            background-color: #00b7c2;
            color: #fff;
            font-weight: bold;
        }
        
        .date:hover {
            background-color: #f0f0f0;
        }
        
        .schedule-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        .schedule-table th, .schedule-table td {
            border: 1px solid #e0e0e0;
            padding: 12px 15px;
            text-align: center;
        }
        
        .schedule-table th {
            background-color: #00b7c2;
            color: #fff;
        }
        
        .schedule-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .doctor-name {
            color: #00b7c2;
            cursor: pointer;
            text-decoration: none;
            font-weight: 500;
        }
        
        .doctor-name:hover {
            text-decoration: underline;
        }
        
        .register-btn {
            display: inline-block;
            background-color: #00b7c2;
            color: #fff;
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
        }
        
        .highlight {
            color: #ff6b35;
            font-weight: bold;
        }
        
        .time-slot {
            font-size: 12px;
            color: #666;
        }

        .doctor-row {
            display: table-row;
        }

        .doctor-row.hidden {
            display: none;
        }
    </style>
</head>
<body>
    <?php $this->load->view("dekstop/Header"); ?>
    <!-- Breadcrumb -->
     <div class="bread-crumb">
        <div class="container">
            <a href="<?= base_url('Dekstop') ?>"><p>Home</p></a>
            <p>|</p>
            <a href="<?= base_url('Dekstop/dokter_page') ?>"><p>Dokter</p></a>
        </div>
    </div>
    <!-- Main Content -->
    <div class="container">
        <div class="main-content">
        <!-- Left Side -->
        <div class="left-side">
            <h2 class="section-title">Jadwal berdasarkan dokter</h2>
            
            <!-- Doctor Selection Dropdown -->
            <select class="doctor-select" id="doctorSelect">
                <option value="">- Pilih Dokter -</option>
                <?php foreach ($doctors as $doctor): ?>
                    <option value="<?= htmlspecialchars($doctor->doctor_name) ?>"><?= htmlspecialchars($doctor->doctor_name) ?></option>
                <?php endforeach; ?>
            </select>
            
            <!-- Calendar -->
            <div class="calendar">
                <div class="calendar-header">
                    <div class="month-year" id="monthYearDisplay">May 2025</div>
                    <div class="calendar-controls">
                        <button class="today-btn" id="todayBtn">today</button>
                        <button class="nav-btn" id="prevBtn">&lt;</button>
                        <button class="nav-btn" id="nextBtn">&gt;</button>
                    </div>
                </div>
                <div class="calendar-days">
                    <div class="day-header">Sun</div>
                    <div class="day-header">Mon</div>
                    <div class="day-header">Tue</div>
                    <div class="day-header">Wed</div>
                    <div class="day-header">Thu</div>
                    <div class="day-header">Fri</div>
                    <div class="day-header">Sat</div>
                </div>
                <div class="calendar-dates" id="calendarDates">
                    <!-- Calendar dates will be generated by JavaScript -->
                </div>
            </div>
            
            <a href="#" class="register-btn">Daftar</a>
        </div>
        
        <!-- Right Side -->
        <div class="right-side">
            <h2 class="section-title">Jadwal harian dokter</h2>
            
            <!-- Schedule Table -->
            <table class="schedule-table">
                <thead>
                    <tr>
                        <th>Doctor</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                    </tr>
                </thead>
                <tbody id="scheduleTableBody">
                    <?php foreach ($doctors as $doctor): ?>
                        <tr class="doctor-row" data-doctor="<?= htmlspecialchars($doctor->doctor_name) ?>">
                            <td>
                                <a href="<?= site_url('jadwaldokter/view/' . $doctor->doctor_id); ?>" class="doctor-name">
                                    <?= htmlspecialchars($doctor->doctor_name) ?>
                                </a>
                            </td>
                            <td><?= isset($doctorSchedules[$doctor->doctor_name]['monday']) ? $doctorSchedules[$doctor->doctor_name]['monday'] : '-' ?></td>
                            <td><?= isset($doctorSchedules[$doctor->doctor_name]['tuesday']) ? $doctorSchedules[$doctor->doctor_name]['tuesday'] : '-' ?></td>
                            <td><?= isset($doctorSchedules[$doctor->doctor_name]['wednesday']) ? $doctorSchedules[$doctor->doctor_name]['wednesday'] : '-' ?></td>
                            <td><?= isset($doctorSchedules[$doctor->doctor_name]['thursday']) ? $doctorSchedules[$doctor->doctor_name]['thursday'] : '-' ?></td>
                            <td><?= isset($doctorSchedules[$doctor->doctor_name]['friday']) ? $doctorSchedules[$doctor->doctor_name]['friday'] : '-' ?></td>
                            <td><?= isset($doctorSchedules[$doctor->doctor_name]['saturday']) ? $doctorSchedules[$doctor->doctor_name]['saturday'] : '-' ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <?php $this->load->view("dekstop/footer"); ?>
    <!-- Pass PHP data to JavaScript -->
    <script>
        // Data jadwal dokter dari PHP
        const doctorSchedules = <?= json_encode($doctorSchedules) ?>;
        
        document.addEventListener('DOMContentLoaded', function() {
            const calendarDates = document.getElementById('calendarDates');
            const monthYearDisplay = document.getElementById('monthYearDisplay');
            const todayBtn = document.getElementById('todayBtn');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            
            let currentDate = new Date();
            let currentMonth = currentDate.getMonth();
            let currentYear = currentDate.getFullYear();
            
            // Generate calendar
            function generateCalendar(month, year) {
                calendarDates.innerHTML = '';
                
                const firstDay = new Date(year, month, 1).getDay();
                const daysInMonth = new Date(year, month + 1, 0).getDate();
                
                // Previous month days
                const prevMonthDays = new Date(year, month, 0).getDate();
                for (let i = firstDay - 1; i >= 0; i--) {
                    const dateDiv = document.createElement('div');
                    dateDiv.classList.add('date', 'other-month');
                    dateDiv.textContent = prevMonthDays - i;
                    calendarDates.appendChild(dateDiv);
                }
                
                // Current month days
                const today = new Date();
                const isCurrentMonth = today.getMonth() === month && today.getFullYear() === year;
                
                for (let i = 1; i <= daysInMonth; i++) {
                    const dateDiv = document.createElement('div');
                    dateDiv.classList.add('date');
                    dateDiv.textContent = i;
                    
                    // Highlight today
                    if (isCurrentMonth && i === today.getDate()) {
                        dateDiv.classList.add('today');
                    }
                    
                    // Highlight specific dates (can be customized)
                    if ([1, 9, 16, 23, 30].includes(i)) {
                        dateDiv.innerHTML = `<span class="highlight">${i}</span>`;
                    }
                    
                    dateDiv.addEventListener('click', function() {
                        // Remove selected class from all dates
                        document.querySelectorAll('.date').forEach(d => d.classList.remove('selected'));
                        // Add selected class to clicked date
                        this.classList.add('selected');
                    });
                    
                    calendarDates.appendChild(dateDiv);
                }
                
                // Next month days
                const totalCells = 42; // 6 rows of 7 days
                const remainingCells = totalCells - (firstDay + daysInMonth);
                for (let i = 1; i <= remainingCells; i++) {
                    const dateDiv = document.createElement('div');
                    dateDiv.classList.add('date', 'other-month');
                    dateDiv.textContent = i;
                    calendarDates.appendChild(dateDiv);
                }
                
                // Update month and year display
                const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                monthYearDisplay.textContent = `${months[month]} ${year}`;
            }
            
            // Initialize calendar
            generateCalendar(currentMonth, currentYear);
            
            // Event listeners for calendar controls
            todayBtn.addEventListener('click', function() {
                const today = new Date();
                currentMonth = today.getMonth();
                currentYear = today.getFullYear();
                generateCalendar(currentMonth, currentYear);
            });
            
            prevBtn.addEventListener('click', function() {
                currentMonth--;
                if (currentMonth < 0) {
                    currentMonth = 11;
                    currentYear--;
                }
                generateCalendar(currentMonth, currentYear);
            });
            
            nextBtn.addEventListener('click', function() {
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
                generateCalendar(currentMonth, currentYear);
            });
            
            // Doctor selection change - MAIN FILTER FUNCTIONALITY
            const doctorSelect = document.getElementById('doctorSelect');
            const doctorRows = document.querySelectorAll('.doctor-row');
            
            doctorSelect.addEventListener('change', function() {
                const selectedDoctor = this.value;
                console.log('Selected doctor:', selectedDoctor);
                
                // Reset all table rows background
                doctorRows.forEach(row => {
                    row.style.background = '';
                    row.classList.remove('hidden');
                });
                
                if (selectedDoctor === '' || selectedDoctor === '- Pilih Dokter -') {
                    // Show all doctors if no doctor is selected
                    doctorRows.forEach(row => {
                        row.classList.remove('hidden');
                    });
                } else {
                    // Hide all rows first
                    doctorRows.forEach(row => {
                        row.classList.add('hidden');
                    });
                    
                    // Show only the selected doctor
                    doctorRows.forEach(row => {
                        const doctorName = row.getAttribute('data-doctor');
                        if (doctorName === selectedDoctor) {
                            row.classList.remove('hidden');
                            row.style.background = '#f0f9fa';
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>