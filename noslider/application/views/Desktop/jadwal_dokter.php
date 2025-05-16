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
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #ffffff;
            color: #333;
        }
        
        .breadcrumb {
            background-color: #F2FBFB;
            padding: 15px 40px;
        }
        
        .breadcrumb a {
            text-decoration: none;
            color: #333;
        }
        
        .breadcrumb .active {
            color: #00b7c2;
        }
        
        .main-content {
            padding: 30px 40px;
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
            color: #ff0000;
        }
    </style>
</head>
<body>
    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="<?= base_url('/') ; ?>">Beranda</a> &gt; <span class="active">Jadwal Dokter</span>
    </div>
    
    <!-- Main Content -->
    <div class="main-content">
        <!-- Left Side -->
        <div class="left-side">
            <h2 class="section-title">Jadwal Berdasarkan Dokter</h2>
            
            <!-- Doctor Selection Dropdown -->
            <select class="doctor-select" id="doctorSelect">
                <option value="dr. Ria Sandy, Sp.M(K)">dr. Ria Sandy, Sp.M(K)</option>
                <option value="Prof. dr. Sjamsu Budiono, Sp.M(K)">Prof. dr. Sjamsu Budiono, Sp.M(K)</option>
                <option value="dr. M. Firmansyah, Sp.M(K)">dr. M. Firmansyah, Sp.M(K)</option>
                <option value="dr. Maha Arina Dian Ishriani, Sp.M">dr. Maha Arina Dian Ishriani, Sp.M</option>
                <option value="dr. Vinca Deopardhi, Sp.M">dr. Vinca Deopardhi, Sp.M</option>
                <option value="dr. Agaprina Caesari Putri, Sp.M">dr. Agaprina Caesari Putri, Sp.M</option>
                <option value="dr. Finika Wahyu Lestari, Sp.M">dr. Finika Wahyu Lestari, Sp.M</option>
                <option value="dr. Astrid Pricilla Syarifudin, SpM">dr. Astrid Pricilla Syarifudin, SpM</option>
                <option value="dr. Valeri Al Hakim, Sp.M">dr. Valeri Al Hakim, Sp.M</option>
                <option value="dr. Sylvia Dharmaji T, Sp.M, M.Ked.Klin">dr. Sylvia Dharmaji T, Sp.M, M.Ked.Klin</option>
                <option value="dr. Indrani Kartika Dewi, Sp.M">dr. Indrani Kartika Dewi, Sp.M</option>
                <option value="dr. Amir Surya, Sp.M">dr. Amir Surya, Sp.M</option>
                <option value="dr. Daya Ranyu Renang, Sp.M">dr. Daya Ranyu Renang, Sp.M</option>
                <option value="dr. Cilra Dewi Maharani, Sp.M">dr. Cilra Dewi Maharani, Sp.M</option>
            </select>
            
            <!-- Calendar -->
            <div class="calendar">
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
            
            <a href="#" class="register-btn">Daftar</a>
        </div>
        
        <!-- Right Side -->
        <div class="right-side">
            <h2 class="section-title">Jadwal Harian Dokter</h2>
            
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
                <tbody>
                    <tr>
                        <td><a href="#" class="doctor-name">Prof. dr. Sjamsu Budiono, Sp.M(K)</a></td>
                        <td>17:30 - 20:30</td>
                        <td>17:30 - 20:30</td>
                        <td>17:30 - 20:30</td>
                        <td>17:30 - 20:30</td>
                        <td>18:30 - 20:30</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="doctor-name">dr. M. Firmansyah, Sp.M(K)</a></td>
                        <td>19:30 - 20:00</td>
                        <td>15:30 - 16:00</td>
                        <td>-</td>
                        <td>18:00 - 20:00</td>
                        <td>18:00 - 20:00</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="doctor-name">dr. Ria Sandy Demetria, Sp.M(K)</a></td>
                        <td>-</td>
                        <td>15:15 - 19:05</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="doctor-name">dr. Maha Arina Dian Ishriani, Sp.M</a></td>
                        <td>-</td>
                        <td>8:40 - 11:40</td>
                        <td>-</td>
                        <td>9:00 - 11:40</td>
                        <td>8:40 - 12:00</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="doctor-name">dr. Vinca Deopardhi, Sp.M</a></td>
                        <td>8:40 - 12:00</td>
                        <td>9:40 - 11:40</td>
                        <td>8:40 - 11:30</td>
                        <td>8:40 - 9:30</td>
                        <td>13:00 - 15:00</td>
                        <td>9:40 - 11:40</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="doctor-name">dr. Agaprina Caesari Putri, Sp.M</a></td>
                        <td>-</td>
                        <td>18:00 - 20:00</td>
                        <td>14:30 - 16:30</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="doctor-name">dr. Finika Wahyu Lestari, Sp.M</a></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="doctor-name">dr. Astrid Pricilla Syarifudin, SpM</a></td>
                        <td>14:00 - 16:00</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="doctor-name">dr. Valeri Al Hakim, Sp.M</a></td>
                        <td>-</td>
                        <td>-</td>
                        <td>14:30 - 16:30</td>
                        <td>14:45 - 16:15</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="doctor-name">dr. Sylvia Dharmaji T, Sp.M, M.Ked.Klin</a></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>14:30 - 16:30</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="doctor-name">dr. Indrani Kartika Dewi, Sp.M</a></td>
                        <td>-</td>
                        <td>14:30 - 16:30</td>
                        <td>-</td>
                        <td>17:00 - 19:00</td>
                        <td>17:00 - 19:00</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="doctor-name">dr. Amir Surya, Sp.M</a></td>
                        <td>16:45 - 18:45</td>
                        <td>-</td>
                        <td>16:45 - 18:45</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="doctor-name">dr. Daya Ranyu Renang, Sp.M</a></td>
                        <td>12:40 - 14:40</td>
                        <td>-</td>
                        <td>8:40 - 14:40</td>
                        <td>12:40 - 14:40</td>
                        <td>13:00 - 15:00</td>
                        <td>9:40 - 11:40</td>
                    </tr>
                    <tr>
                        <td><a href="#" class="doctor-name">dr. Cilra Dewi Maharani, Sp.M</a></td>
                        <td>8:40 - 14:40</td>
                        <td>12:40 - 14:40</td>
                        <td>-</td>
                        <td>-</td>
                        <td>8:40 - 11:40</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Calendar functionality
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
                const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
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
            
            // Doctor selection change
            const doctorSelect = document.getElementById('doctorSelect');
            doctorSelect.addEventListener('change', function() {
                // Here you can add logic to filter the schedule based on selected doctor
                const selectedDoctor = this.value;
                console.log('Selected doctor:', selectedDoctor);
                
                // Highlight the selected doctor in the table
                document.querySelectorAll('.doctor-name').forEach(name => {
                    if (name.textContent === selectedDoctor) {
                        name.parentElement.parentElement.style.background = '#f0f9fa';
                    } else {
                        name.parentElement.parentElement.style.background = '';
                    }
                });
            });
            
            // Initialize with the first doctor highlighted
            document.querySelector('.doctor-name').parentElement.parentElement.style.background = '#f0f9fa';
        });
    </script>
</body>
</html>