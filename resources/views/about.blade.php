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

        .about-link {
            color: red !important;
        }

        .second-class {
            background-color: #d9d9d9;
            padding: 50px;
            text-align: center;
        }

        .about-us {
            margin-bottom: 50px;
        }

        .about-us h2 {
            padding-top: 2%;
            text-align: center;
            font-family: 'Saira Condensed', sans-serif !important;
            font-size: 36px;
            font-weight: bold;
            color: #000000;
        }
        .content-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 30px;
        }

        .description {
            width: 50%;
            text-align: left;
        }

        .description h3 {
            font-family: 'Saira Condensed', sans-serif !important;
            font-size: 24px;
            font-weight: bold;
            color: #000000;
            margin-bottom: 10px;
        }

        .description p {
            font-size: 20px;
            line-height: 1.5;
        }

        .icon {
            width: 35%;
        }

        .icon img {
            width: 100%;
            height: auto;
            padding-left: 3%;
        }

        .mission-vision {
            display: flex;
            justify-content: space-around;
            text-align: left;
            margin-top: 60px;
        }

        .mission, .vision {
            width: 40%;
            margin-right: 20px;
        }

        .mission h4, .vision h4 {
            font-family: 'Saira Condensed', sans-serif !important;
            font-size: 24px;
            font-weight: bold;
            color: #000000;
            margin-bottom: 10px;
        }

        .mission p, .vision p {
            font-size: 20px;
            line-height: 1.5;
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
                <li class="nav-item"><a href="#" class="nav-link about-link active" >ABOUT</a></li>
                <li class="nav-item"><a href="{{ route('profile') }}" class="nav-link">PROFILE</a></li>
                <li class="nav-item"><a href="{{ route('contact') }}"class="nav-link">CONTACT</a></li>
                <li class="nav-item"><a href="#" class="nav-link">SETTINGS</a></li>
            </ul>
        </div>
    </nav>
</header>

<!-- About Us Section -->
<section class="about-us">
    <h2>About Us</h2>
    <div class="content-container">
        <div class="description">
            <h3>Intelligent Vehicle Identification System</h3>
            <p>
                The Intelligent Vehicle Identification System (IVIS) is a school project 
                that simplifies vehicle identification by allowing users to manually enter 
                license plate numbers, cross-referencing them with a database of registered 
                vehicles. Ideal for managing parking and access control in schools, IVIS enhances 
                security with an easy-to-use interface for managing vehicle data and tracking activity, 
                while providing students hands-on experience in database management and UI design.
            </p>
        </div>
        <div class="icon">
        <img src="{{ asset('image/ivislogo.png') }}"alt="IVIS Logo" class="img-fluid content-image">
        </div>
    </div>
    
    <div class="mission-vision">
        <div class="mission">
            <h4>Mission</h4>
            <p>
                Our mission is to make school environments safer and more efficient by offering a simple, affordable vehicle identification system. 
                We want to make it easy for schools to manage vehicle access and improve security through technology that’s both effective and efficient.
            </p>
        </div>
        <div class="vision">
            <h4>Vision</h4>
            <p>
                Our vision is to be the top choice for schools around the world when it comes to vehicle identification systems. 
                We see a future where our technology helps schools keep their campuses safe and integrates smoothly with other school management tools, 
                making daily operations easier and more secure.
            </p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-left">
            <p class="footer-text">Intelligent Vehicle Identification System</p>
            <div class="footer-email">
                <img src="{{asset('image/email.png')}}" alt="email icon" class="email-icon"> 
                <a class="email-link" href="mailto:ivisupport@gmail.com">ivisupport@gmail.com</a>
            </div>
        </div>
        <div class="footer-right">
            <a href="{{ route('main.landing.page') }}" class="nav-link home-link active">Home</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Contact Us</a>
        </div>
    </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
