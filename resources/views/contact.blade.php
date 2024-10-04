<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IVIS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Russo+One&family=Saira+Condensed:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        header {
            position: relative;
            height: 150px;
            background-image: url('{{ asset('image/parklot.jpg') }}');
            background-size: cover;
            background-position: center;
            z-index: 1;
        }

        header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: -1;
        }
        .navbar {
            background-color: transparent !important;
            position: absolute;
            width: 100%;
            top: 30px;
        }
        .navbar-brand {
            font-family: 'Russo One', sans-serif;
            font-size: 35px !important;
            color: white !important;
            text-decoration: none !important;
            margin-left: 35px;
        }
        .navbar-nav a {
            font-family: 'Roboto Condensed', sans-serif;
            color: white;
            margin-right: 20px;
            font-size: 16px;
            letter-spacing: 1px;
            font-weight: bold;
            position: relative;
        }
        .navbar-nav .nav-link {
            color: white;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: red;
        }
        .home-link {
            color: red !important;
        }
        .content {
            background-color: #D7D7D7; 
            padding: 50px;
            text-align: center;
        }
        .content h2 {
            font-family: 'Saira Condensed', sans-serif !important;
            font-size: 36px;
            font-weight: bold;
            color: #000000;
        }
        .content p {
            font-family: 'Saira Condensed', sans-serif !important;
            font-size: 19px;
            color: #000000;
        }
        .footer {
            background-color: #000000;
            color: white;
            font-weight: bold;
            padding: 40px 0;
            display: flex;
            align-items: center;
        }
        .footer .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
        }
        .footer-left {
            display: flex;
            flex-direction: column;
        }
        .footer-text {
            font-family: 'Saira Condensed', sans-serif;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .footer-email {
            display: flex;
            align-items: center;
        }
        .email-icon {
            width: 28px;
            margin-right: 10px;
        }
        .email-link {
            font-family: 'Saira Condensed', sans-serif;
            font-size: 16px;
            color: white !important;
            text-decoration: none !important;
            position: relative;
            padding-bottom: 2px;
        }
        .email-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: white;
            transition: width 0.3s ease-in-out;
        }
        .email-link:hover {
            text-decoration: underline;
        }
        .email-link:hover::after {
            width: 100%; 
        }
        .footer-right {
            display: flex;
            align-items: center;
        }
        .footer-right a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
        }
        .footer-right a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<!-- Header Section with Navbar -->
<header>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand">INTELLIGENT VEHICLE IDENTIFICATION SYSTEM</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ route('main.landing.page') }}" class="nav-link">HOME</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">ABOUT</a></li>
                <li class="nav-item"><a href="{{ route('profile') }}" class="nav-link">PROFILE</a></li>
                <li class="nav-item"><a href="#" class="nav-link contact-link active">CONTACT</a></li>
                <li class="nav-item"><a href="#" class="nav-link">SETTINGS</a></li>
            </ul>
        </div>
    </nav>
</header>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-left">
            <p class="footer-text">Intelligent Vehicle Identification System</p>
            <div class="footer-email">
                <img class="email-icon" src="{{asset('image/email.png')}}" alt="Email Icon">
                <a class="email-link" href="mailto:ivis.company.og@gmail.com">ivis.company.og@gmail.com</a>
            </div>
        </div>
        <div class="footer-right">
            <a href="{{ route('main.landing.page') }}">Home</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Contact Us</a>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
