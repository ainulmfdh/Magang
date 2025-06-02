<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Mata dr Sjamsu - Jadwal Dokter</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
        }
        
        .breadcrumb {
            background-color: #f8f9fa;
            padding: 12px 20px;
            font-size: 14px;
        }
        
        .breadcrumb a {
            text-decoration: none;
            color: #333;
        }
        
        .breadcrumb .active {
            color: #00b7c2;
        }
        
        .main-content {
            padding: 20px;
        }
        
        .section-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #333;
        }
        
        .doctor-select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 16px;
            background-color: #fff;
            color: #333;
        }
        
        .calendar-container {
            background-color: #fff;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .calendar-header {
            background-color: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .month-year {
            font-weight: 600;
            font-size: 18px;
        }
        
        .calendar-controls {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        
        .today-btn {
            padding: 6px 12px;
            background-color: #f0f0f0;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }
        
        .nav-btn {
            padding: 8px 12px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }
        
        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            background-color: #00b7c2;
        }
        
        .day-header {
            padding: 12px 8px;
            text-align: center;
            font-weight: 600;
            color: white;
            font-size: 14px;
        }
        
        .calendar-dates {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            background-color: #fff;
        }
        
        .date {
            padding: 12px 8px;
            text-align: center;
            cursor: pointer;
            border-bottom: 1px solid #f0f0f0;
            border-right: 1px solid #f0f0f0;
            min-height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }
        
        .date:nth-child(7n) {
            border-right: none;
        }
        
        .date.other-month {
            color: #ccc;
        }
        
        .date.today {
            background-color: #e6f7f8;
            font-weight: bold;
            color: #00b7c2;
        }
        
        .date.selected {
            background-color: #00b7c2;
            color: #fff;
            font-weight: bold;
        }
        
        .date.highlight {
            color: #ff4444;
            font-weight: bold;
        }
        
        .register-btn {
            width: 100%;
            background-color: #00b7c2;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-bottom: 30px;
        }
        
        .schedule-section {
            background-color: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        .schedule-header {
            padding: 20px;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .day-tabs {
            display: flex;
            overflow-x: auto;
            background-color: #f8f9fa;
            padding: 0 20px;
            gap: 5px;
            -webkit-overflow-scrolling: touch;
        }
        
        .day-tab {
            padding: 12px 20px;
            background-color: transparent;
            border: none;
            cursor: pointer;
            white-space: nowrap;
            font-size: 14px;
            color: #666;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
        }
        
        .day-tab.active {
            color: #00b7c2;
            border-bottom-color: #00b7c2;
            font-weight: 600;
        }
        
        .schedule-content {
            padding: 0;
        }
        
        .doctor-list {
            max-height: 400px;
            overflow-y: auto;
        }
        
        .doctor-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 20px;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .doctor-item:last-child {
            border-bottom: none;
        }
        
        .doctor-item.hidden {
            display: none;
        }
        
        .doctor-name {
            color: #00b7c2;
            font-weight: 500;
            font-size: 14px;
            flex: 1;
            text-decoration: none;
        }
        
        .doctor-time {
            color: #333;
            font-size: 14px;
            font-weight: 500;
        }
        
        .no-schedule {
            color: #999;
            font-size: 14px;
        }
        
        @media (max-width: 375px) {
            .calendar-dates {
                font-size: 14px;
            }
            
            .date {
                min-height: 40px;
                padding: 10px 6px;
            }
            
            .day-header {
                padding: 10px 6px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    
    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="<?= base_url('mobile')?>">Beranda</a> > <span class="active">Detail Dokter</span>
    </div>
    
    <!-- Main Content -->
    <div class="main-content">
        <h2 class="section-title">Jadwal Berdasarkan Dokter</h2>
        
        <!-- Doctor Selection Dropdown -->
        <select class="doctor-select" id="doctorSelect">
            <option value="">- Pilih Dokter -</option>
            <option value="Prof. dr. Sjamsu Budiono, Sp.M(K)">Prof. dr. Sjamsu Budiono, Sp.M(K)</option>
            <option value="dr. M. Firmansyah, Sp.M(K)">dr. M. Firmansyah, Sp.M(K)</option>
            <option value="dr. Ria Sandy Deneska, Sp.M(K)">dr. Ria Sandy Deneska, Sp.M(K)</option>
            <option value="dr. Maha Atma Dian Iehvara, Sp.M">dr. Maha Atma Dian Iehvara, Sp.M</option>
            <option value="dr. Vinca Desyandri, Sp.M">dr. Vinca Desyandri, Sp.M</option>
            <option value="dr. Agulina Caesari Putri, Sp.M">dr. Agulina Caesari Putri, Sp.M</option>
            <option value="dr. Fitrika Wahyu Listari, Sp.M">dr. Fitrika Wahyu Listari, Sp.M</option>
            <option value="dr. Astrid Priolia Syulianti, SpM">dr. Astrid Priolia Syulianti, SpM</option>
            <option value="dr. Valeri Al Hakim, Sp.M">dr. Valeri Al Hakim, Sp.M</option>
            <option value="dr. Sylva Dranindi T, Sp.M, M.Ked.Klin">dr. Sylva Dranindi T, Sp.M, M.Ked.Klin</option>
            <option value="dr. Indriani Kartika Dewi, Sp.M">dr. Indriani Kartika Dewi, Sp.M</option>
            <option value="dr. Amir Surya, Sp.M">dr. Amir Surya, Sp.M</option>
            <option value="dr. Daya Banyu Bening, Sp.M">dr. Daya Banyu Bening, Sp.M</option>
            <option value="dr. Citra Dewi Maharani, Sp.M">dr. Citra Dewi Maharani, Sp.M</option>
        </select>
        
        <!-- Calendar -->
        <div class="calendar-container">
            <div class="calendar-header">
                <div class="month-year" id="monthYearDisplay">Mei 2025</div>
                <div class="calendar-controls">
                    <button class="today-btn" id="todayBtn">Today</button>
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
        
        <button class="register-btn">Daftar</button>
        
        <!-- Schedule Section -->
        <div class="schedule-section">
            <div class="schedule-header">
                <h2 class="section-title" style="margin-bottom: 0;">Jadwal Harian Dokter</h2>
            </div>
            
            <!-- Day Tabs -->
            <div class="day-tabs">
                <button class="day-tab" data-day="monday">Monday</button>
                <button class="day-tab active" data-day="tuesday">Tuesday</button>
                <button class="day-tab" data-day="wednesday">Wednesday</button>
                <button class="day-tab" data-day="thursday">Thursday</button>
                <button class="day-tab" data-day="friday">Friday</button>
                <button class="day-tab" data-day="saturday">Saturday</button>
            </div>
            
            <!-- Schedule Content -->
            <div class="schedule-content">
                <div class="doctor-list" id="doctorList">
                    <!-- Doctor schedule items will be populated by JavaScript -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // Data jadwal dokter
        const doctorSchedules = {
            'Prof. dr. Sjamsu Budiono, Sp.M(K)': {
                'monday': '17:30 - 20:30',
                'tuesday': '17:30 - 20:30',
                'wednesday': '17:30 - 20:30',
                'thursday': '17:30 - 20:30',
                'friday': '17:30 - 20:30',
                'saturday': '-'
            },
            'dr. M. Firmansyah, Sp.M(K)': {
                'monday': '19:30 - 20:00',
                'tuesday': '15:30 - 16:00',
                'wednesday': '-',
                'thursday': '18:00 - 20:00',
                'friday': '18:00 - 20:00',
                'saturday': '-'
            },
            'dr. Ria Sandy Deneska, Sp.M(K)': {
                'monday': '-',
                'tuesday': '15:15 - 19:05',
                'wednesday': '-',
                'thursday': '-',
                'friday': '-',
                'saturday': '-'
            },
            'dr. Maha Atma Dian Iehvara, Sp.M': {
                'monday': '8:40 - 11:40',
                'tuesday': '9:00 - 11:40',
                'wednesday': '-',
                'thursday': '9:00 - 11:40',
                'friday': '8:40 - 12:00',
                'saturday': '-'
            },
            'dr. Vinca Desyandri, Sp.M': {
                'monday': '8:40 - 12:00',
                'tuesday': '9:40 - 11:40',
                'wednesday': '8:40 - 11:30',
                'thursday': '8:40 - 9:30',
                'friday': '13:00 - 15:00',
                'saturday': '-'
            },
            'dr. Agulina Caesari Putri, Sp.M': {
                'monday': '-',
                'tuesday': '18:00 - 20:00',
                'wednesday': '14:30 - 16:30',
                'thursday': '-',
                'friday': '-',
                'saturday': '-'
            },
            'dr. Fitrika Wahyu Listari, Sp.M': {
                'monday': '-',
                'tuesday': '-',
                'wednesday': '-',
                'thursday': '-',
                'friday': '-',
                'saturday': '-'
            },
            'dr. Astrid Priolia Syulianti, SpM': {
                'monday': '14:00 - 16:00',
                'tuesday': '-',
                'wednesday': '-',
                'thursday': '-',
                'friday': '-',
                'saturday': '-'
            },
            'dr. Valeri Al Hakim, Sp.M': {
                'monday': '-',
                'tuesday': '-',
                'wednesday': '14:30 - 16:30',
                'thursday': '14:45 - 16:15',
                'friday': '-',
                'saturday': '-'
            },
            'dr. Sylva Dranindi T, Sp.M, M.Ked.Klin': {
                'monday': '-',
                'tuesday': '-',
                'wednesday': '-',
                'thursday': '-',
                'friday': '14:30 - 16:30',
                'saturday': '-'
            },
            'dr. Indriani Kartika Dewi, Sp.M': {
                'monday': '-',
                'tuesday': '14:30 - 16:30',
                'wednesday': '-',
                'thursday': '17:00 - 19:00',
                'friday': '17:00 - 19:00',
                'saturday': '-'
            },
            'dr. Amir Surya, Sp.M': {
                'monday': '16:45 - 18:45',
                'tuesday': '-',
                'wednesday': '16:45 - 18:45',
                'thursday': '-',
                'friday': '-',
                'saturday': '-'
            },
            'dr. Daya Banyu Bening, Sp.M': {
                'monday': '12:40 - 14:40',
                'tuesday': '-',
                'wednesday': '8:40 - 14:40',
                'thursday': '12:40 - 14:40',
                'friday': '13:00 - 15:00',
                'saturday': '-'
            },
            'dr. Citra Dewi Maharani, Sp.M': {
                'monday': '8:40 - 14:40',
                'tuesday': '12:40 - 14:40',
                'wednesday': '-',
                'thursday': '-',
                'friday': '8:40 - 11:40',
                'saturday': '8:40 - 11:40'
            }
        };
        
        let currentDay = 'tuesday';
        let selectedDoctor = '';
        
        document.addEventListener('DOMContentLoaded', function() {
            const calendarDates = document.getElementById('calendarDates');
            const monthYearDisplay = document.getElementById('monthYearDisplay');
            const todayBtn = document.getElementById('todayBtn');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const doctorSelect = document.getElementById('doctorSelect');
            const dayTabs = document.querySelectorAll('.day-tab');
            const doctorList = document.getElementById('doctorList');
            
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
                    
                    // Highlight specific dates
                    if ([2, 6, 9, 12, 13, 16, 18, 19, 20, 23, 26, 27, 30].includes(i)) {
                        dateDiv.classList.add('highlight');
                    }
                    
                    dateDiv.addEventListener('click', function() {
                        document.querySelectorAll('.date').forEach(d => d.classList.remove('selected'));
                        this.classList.add('selected');
                    });
                    
                    calendarDates.appendChild(dateDiv);
                }
                
                // Next month days
                const totalCells = 42;
                const remainingCells = totalCells - (firstDay + daysInMonth);
                for (let i = 1; i <= remainingCells; i++) {
                    const dateDiv = document.createElement('div');
                    dateDiv.classList.add('date', 'other-month');
                    dateDiv.textContent = i;
                    calendarDates.appendChild(dateDiv);
                }
                
                // Update month and year display
                const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                monthYearDisplay.textContent = `${months[month]} ${year}`;
            }
            
            // Update doctor list for current day
            function updateDoctorList() {
                doctorList.innerHTML = '';
                
                const doctorsToShow = selectedDoctor ? [selectedDoctor] : Object.keys(doctorSchedules);
                
                doctorsToShow.forEach(doctorName => {
                    const schedule = doctorSchedules[doctorName];
                    const timeSlot = schedule[currentDay] || '-';
                    
                    const doctorItem = document.createElement('div');
                    doctorItem.classList.add('doctor-item');
                    
                    doctorItem.innerHTML = `
                        <a href="#" class="doctor-name">${doctorName}</a>
                        <div class="${timeSlot === '-' ? 'no-schedule' : 'doctor-time'}">${timeSlot}</div>
                    `;
                    
                    doctorList.appendChild(doctorItem);
                });
            }
            
            // Initialize calendar and doctor list
            generateCalendar(currentMonth, currentYear);
            updateDoctorList();
            
            // Calendar controls
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
            
            // Doctor selection
            doctorSelect.addEventListener('change', function() {
                selectedDoctor = this.value;
                updateDoctorList();
            });
            
            // Day tabs
            dayTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    dayTabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    currentDay = this.getAttribute('data-day');
                    updateDoctorList();
                });
            });
        });
    </script>
</body>
</html>