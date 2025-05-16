<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Mata dr Sjamsu - Jadwal Dokter Mobile</title>
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
            font-size: 14px;
            max-width: 100%;
            overflow-x: hidden;
        }
        
        .menu-icon {
            color: #00b7c2;
            font-size: 24px;
            cursor: pointer;
        }
        
        .breadcrumb {
            background-color: #F2FBFB;
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
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
        }
        
        .doctor-select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 14px;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23333' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 16px;
        }
        
        .calendar-header-mobile {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .month-year {
            font-weight: bold;
            font-size: 16px;
        }
        
        .calendar-controls {
            display: flex;
            align-items: center;
        }
        
        .today-btn {
            padding: 5px 12px;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            border-radius: 3px;
            margin-right: 10px;
            font-size: 13px;
        }
        
        .nav-btn {
            width: 28px;
            height: 28px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 3px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 2px;
        }
        
        .calendar-mobile {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            table-layout: fixed;
        }
        
        .calendar-mobile th {
            background-color: #00b7c2;
            color: white;
            text-align: center;
            padding: 8px 0;
            font-size: 12px;
            font-weight: normal;
        }
        
        .calendar-mobile td {
            border: 1px solid #e0e0e0;
            text-align: center;
            padding: 8px 0;
            height: 36px;
            font-size: 13px;
        }
        
        .calendar-mobile .other-month {
            color: #ccc;
        }
        
        .calendar-mobile .today {
            background-color: #e6f7f8;
            font-weight: bold;
        }
        
        .calendar-mobile .highlight {
            color: #ff0000;
        }
        
        .register-btn {
            display: block;
            background-color: #00b7c2;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            margin: 15px 0 30px;
            font-weight: bold;
        }
        
        .doctor-schedule-title {
            font-size: 18px;
            font-weight: bold;
            margin: 25px 0 15px;
        }
        
        .schedule-table-mobile {
            width: 100%;
            border-collapse: collapse;
        }
        
        .schedule-table-mobile th {
            background-color: #00b7c2;
            color: white;
            text-align: center;
            padding: 8px;
            font-size: 13px;
            font-weight: normal;
        }
        
        .schedule-table-mobile td {
            border: 1px solid #e0e0e0;
            padding: 10px 8px;
            font-size: 13px;
        }
        
        .schedule-table-mobile tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .doctor-name {
            color: #00b7c2;
            text-decoration: none;
            display: block;
            margin-bottom: 3px;
        }
        
        .time-slot {
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="#">Beranda</a> &gt; <span class="active">Detail Dokter</span>
    </div>
    
    <!-- Main Content -->
    <div class="main-content">
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
        </select>
        
        <!-- Calendar Header with Controls -->
        <div class="calendar-header-mobile">
            <div class="month-year">Mei 2025</div>
            <div class="calendar-controls">
                <button class="today-btn">Today</button>
                <button class="nav-btn">&lt;</button>
                <button class="nav-btn">&gt;</button>
            </div>
        </div>
        
        <!-- Calendar for Mobile -->
        <table class="calendar-mobile" id="calendarTable">
            <thead>
                <tr>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="other-month">30</td>
                    <td class="other-month">31</td>
                    <td>1</td>
                    <td class="highlight">2</td>
                    <td>3</td>
                    <td>4</td>
                    <td class="highlight">5</td>
                </tr>
                <tr>
                    <td class="highlight">6</td>
                    <td>7</td>
                    <td>8</td>
                    <td class="highlight">9</td>
                    <td>10</td>
                    <td>11</td>
                    <td class="highlight">12</td>
                </tr>
                <tr>
                    <td class="highlight">13</td>
                    <td>14</td>
                    <td>15</td>
                    <td class="highlight">16</td>
                    <td>17</td>
                    <td class="highlight">18</td>
                    <td class="highlight">19</td>
                </tr>
                <tr>
                    <td class="highlight">20</td>
                    <td>21</td>
                    <td>22</td>
                    <td class="highlight">23</td>
                    <td>24</td>
                    <td>25</td>
                    <td class="highlight">26</td>
                </tr>
                <tr>
                    <td class="highlight">27</td>
                    <td>28</td>
                    <td>29</td>
                    <td class="highlight">30</td>
                    <td class="other-month">1</td>
                    <td class="other-month">2</td>
                    <td class="other-month">3</td>
                </tr>
                <tr>
                    <td class="other-month">4</td>
                    <td class="other-month">5</td>
                    <td class="other-month">6</td>
                    <td class="other-month">7</td>
                    <td class="other-month">8</td>
                    <td class="other-month">9</td>
                    <td class="other-month">10</td>
                </tr>
            </tbody>
        </table>
        
        <!-- Register Button -->
        <a href="#" class="register-btn">Daftar</a>
        
        <!-- Schedule Title -->
        <h2 class="doctor-schedule-title">Jadwal Harian Dokter</h2>
        
        <!-- Doctor Schedule Table for Mobile -->
        <table class="schedule-table-mobile">
            <thead>
                <tr>
                    <th style="width: 50%;">Doctor</th>
                    <th style="width: 50%;">Monday</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#" class="doctor-name">Prof. dr. Sjamsu Budiono, Sp.M(K)</a></td>
                    <td class="time-slot">17:30 - 20:30</td>
                </tr>
                <tr>
                    <td><a href="#" class="doctor-name">dr. M. Firmansyah, Sp.M(K)</a></td>
                    <td class="time-slot">19:30 - 20:00</td>
                </tr>
                <tr>
                    <td><a href="#" class="doctor-name">dr. Ria Sandy Demeska, Sp.M(K)</a></td>
                    <td class="time-slot">-</td>
                </tr>
                <tr>
                    <td><a href="#" class="doctor-name">dr. Maha Atma Dian Ishwara, Sp.M</a></td>
                    <td class="time-slot">-</td>
                </tr>
                <tr>
                    <td><a href="#" class="doctor-name">dr. Vinca Deopardhi, Sp.M</a></td>
                    <td class="time-slot">8:40 - 12:00</td>
                </tr>
                <tr>
                    <td><a href="#" class="doctor-name">dr. Aqurina Caesari Putri, Sp.M</a></td>
                    <td class="time-slot">-</td>
                </tr>
                <tr>
                    <td><a href="#" class="doctor-name">dr. Fitrika Wahyu Listari, Sp.M</a></td>
                    <td class="time-slot">-</td>
                </tr>
                <tr>
                    <td><a href="#" class="doctor-name">dr. Astrid Pricilia Syulianti, SpM</a></td>
                    <td class="time-slot">14:00 - 16:00</td>
                </tr>
                <tr>
                    <td><a href="#" class="doctor-name">dr. Valeri Al Hakim, Sp.M</a></td>
                    <td class="time-slot">-</td>
                </tr>
                <tr>
                    <td><a href="#" class="doctor-name">dr. Sylva Dranindi T, Sp.M, M.Ked.Klin</a></td>
                    <td class="time-slot">-</td>
                </tr>
                <tr>
                    <td><a href="#" class="doctor-name">dr. Indrani Kartika Dewi, Sp.M</a></td>
                    <td class="time-slot">-</td>
                </tr>
                <tr>
                    <td><a href="#" class="doctor-name">dr. Amir Surya, Sp.M</a></td>
                    <td class="time-slot">16:45 - 18:45</td>
                </tr>
                <tr>
                    <td><a href="#" class="doctor-name">dr. Daya Banyu Bening, Sp.M</a></td>
                    <td class="time-slot">12:40 - 14:40</td>
                </tr>
                <tr>
                    <td><a href="#" class="doctor-name">dr. Citra Dewi Maharani, Sp.M</a></td>
                    <td class="time-slot">8:40 - 14:40</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Calendar day click functionality
            const calendarCells = document.querySelectorAll('.calendar-mobile td');
            calendarCells.forEach(cell => {
                cell.addEventListener('click', function() {
                    // Remove selected class from all cells
                    calendarCells.forEach(c => c.classList.remove('today'));
                    // Add selected class to clicked cell
                    this.classList.add('today');
                });
            });
            
            // Calendar navigation
            const monthYearDisplay = document.querySelector('.month-year');
            const prevBtn = document.querySelectorAll('.nav-btn')[0];
            const nextBtn = document.querySelectorAll('.nav-btn')[1];
            const todayBtn = document.querySelector('.today-btn');
            
            let currentMonth = 4; // May (0-indexed)
            let currentYear = 2025;
            
            function updateCalendarTitle() {
                const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                monthYearDisplay.textContent = `${months[currentMonth]} ${currentYear}`;
            }
            
            prevBtn.addEventListener('click', function() {
                currentMonth--;
                if (currentMonth < 0) {
                    currentMonth = 11;
                    currentYear--;
                }
                updateCalendarTitle();
                // In a real implementation, you would regenerate the calendar here
                // For this demo, we're just updating the title
            });
            
            nextBtn.addEventListener('click', function() {
                currentMonth++;
                if (currentMonth > 11) {
                    currentMonth = 0;
                    currentYear++;
                }
                updateCalendarTitle();
                // In a real implementation, you would regenerate the calendar here
            });
            
            todayBtn.addEventListener('click', function() {
                const today = new Date();
                currentMonth = today.getMonth();
                currentYear = today.getFullYear();
                updateCalendarTitle();
                // In a real implementation, you would regenerate the calendar and highlight today
            });
            
            // Doctor selection change
            const doctorSelect = document.getElementById('doctorSelect');
            doctorSelect.addEventListener('change', function() {
                const selectedDoctor = this.value;
                console.log('Selected doctor:', selectedDoctor);
                
                // In a real implementation, you would update the schedule table
                // based on the selected doctor
                
                // For this demo, we're just logging the selected doctor
            });
            
            // Swipe functionality for calendar navigation (optional)
            let touchStartX = 0;
            let touchEndX = 0;
            
            const calendarTable = document.getElementById('calendarTable');
            
            calendarTable.addEventListener('touchstart', function(e) {
                touchStartX = e.changedTouches[0].screenX;
            });
            
            calendarTable.addEventListener('touchend', function(e) {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            });
            
            function handleSwipe() {
                const swipeThreshold = 50;
                if (touchEndX < touchStartX - swipeThreshold) {
                    // Swipe left - next month
                    nextBtn.click();
                } else if (touchEndX > touchStartX + swipeThreshold) {
                    // Swipe right - previous month
                    prevBtn.click();
                }
            }
        });
    </script>
</body>
</html>