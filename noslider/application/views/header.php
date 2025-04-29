<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Fixed dengan Logo dan Menu</title>
    <style>
        /* Reset dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        /* Navbar */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            height: 70px;
            background-color: #333;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            z-index: 999;
        }

        .navbar .logo {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }

        .navbar ul {
            list-style: none;
            display: flex;
        }

        .navbar ul li {
            margin-left: 25px;
        }

        .navbar ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .navbar ul li a:hover {
            color: #ff9800;
        }

        /* Supaya konten tidak ketutup navbar */
        .content {
            padding-top: 100px;
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="#" class="logo">MyLogo</a>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <div class="content">
        <h1>Welcome to My Website</h1>
        <p>Ini adalah contoh konten di bawah navbar.</p>
        <p>Scroll untuk melihat efek navbar tetap di atas.</p>
        <div style="height: 2000px;"></div>
    </div>

</body>
</html>
