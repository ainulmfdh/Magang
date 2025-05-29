<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
.mobile-navbar {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #00b3b3;
    display: flex;
    justify-content: space-around;
    z-index: 1000;
    box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
}

.mobile-navbar a {
    color: white;
    text-decoration: none;
    padding: 10px 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex: 1;
    font-size: 14px;
    text-align: center;
}

.mobile-navbar a:hover, .mobile-navbar a.active {
    background-color: #008080;
}

.mobile-navbar i {
    font-size: 24px;
    margin-bottom: 4px;
}

.mobile-navbar .nav-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 8px 0;
}

.nav-divider {
    width: 1px;
    background-color: rgba(255, 255, 255, 0.3);
    height: 100%;
}

/* Hide navbar on larger screens */
@media (min-width: 768px) {
    .mobile-navbar {
        display: none;
    }
    
    .content-area {
        padding-bottom: 0;
    }
}

/* Add padding to main content area to prevent content from being hidden under navbar */
.content-area {
    padding-bottom: 80px;
}
.text_nav {
	color: #fafafa;
}
</style>
</head>
<body>
<div class="mobile-navbar">
    <a href="#hero">
        <div class="nav-item">
		<i class="fa-solid fa-house" style="color: #fafafa;"></i>
            <span class="text_nav">Home</span>
        </div>
    </a>
    <div class="nav-divider"></div>
    <a href="#service">
        <div class="nav-item">
		<i class="fa-solid fa-user-doctor" style="color: #fafafa;"></i>
            <span class="text_nav">Layanan</span>
        </div>
    </a>
    <div class="nav-divider"></div>
    <a href="#bookingModal" data-bs-toggle="modal" data-bs-target="#bookingModal">
        <div class="nav-item">
		<i class="fa-solid fa-clipboard-list" style="color: #fafafa;"></i>
		<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
            <span class="text_nav">Booking</span>
        </div>
    </a>
    <div class="nav-divider"></div>
    <a href="#jam">
		<div class="nav-item">
		<i class="fa fa-calendar" style="color: #fafafa;"></i>
            <span class="text_nav">Jadwal</span>
        </div>
    </a>
    <div class="nav-divider"></div>
    <a href="https://maps.app.goo.gl/mSZo6wBJFN3CzFD1A">
        <div class="nav-item">
		<i class="fa-solid fa-location-dot" style="color: #fafafa;"></i>
            <span class="text_nav">Alamat</span>
        </div>
    </a>
</div>
</body>
</html>
