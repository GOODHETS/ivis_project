<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IVIS</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Russo+One&family=Saira+Condensed:wght@400;700&display=swap" rel="stylesheet"> 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            position: relative;
            padding-bottom: 2px;
            margin-left: 35px;
        }
        .navbar-brand::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 10px;
            left: 0;
            background-color: red;
            transition: width 0.3s ease-in-out;
        }
        .navbar-brand:hover::after {
            width: 100%;
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
        .footer-content {
            display: flex;
            justify-content: space-between;
            width: 100%;
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
        .email-link:hover::after {
            width: 100%;
        }
        .footer-right {
            display: flex;
            align-items: center;
        }
        .footer-link {
            font-family: 'Saira Condensed', sans-serif;
            font-weight: medium;
            font-size: 14px;
            color: white !important;
            text-decoration: none !important;
            margin-left: 25px;
            position: relative;
            padding-bottom: 2px;
        }
        .footer-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: white;
            transition: width 0.3s ease-in-out;
        }
        .footer-link:hover::after {
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Header Section with Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ url('/') }}">INTELLIGENT VEHICLE IDENTIFICATION SYSTEM</a>
        </nav>
    </header>

    <!-- Main Content Section -->
    <section class="content">
        <img src="{{ asset('image/ivislogo.png') }}" alt="IVIS Logo" class="content-image">
        <div class="container">
            <h2>INTELLIGENT VEHICLE IDENTIFICATION SYSTEM</h2>
            <p>THE INTELLIGENT VEHICLE IDENTIFICATION SYSTEM (IVIS) IS A SIMPLE YET EFFECTIVE SCHOOL PROJECT DESIGNED TO IDENTIFY VEHICLES AND THEIR OWNERS BY ALLOWING USERS TO MANUALLY ENTER THE LICENSE PLATE NUMBER. UNLIKE MORE COMPLEX SYSTEMS THAT RELY ON IMAGE PROCESSING, IVIS SIMPLIFIES THE IDENTIFICATION PROCESS BY FOCUSING ON USER INPUT. ONCE THE PLATE NUMBER IS TYPED IN, THE SYSTEM CROSS-REFERENCES IT WITH A SMALL DATABASE OF REGISTERED VEHICLES, INSTANTLY IDENTIFYING THE VEHICLE OWNER.</p>
            <div class="cta-buttons">
                <a href="{{ route('signup') }}" class="btn btn-danger">SIGN IN</a>
                <a href="{{ route('login') }}" class="btn btn-success">LOGIN</a>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-left">
                    <div class="footer-text">Get in Touch</div>
                    <div class="footer-email">
                        <img src="{{ asset('image/email.png') }}" alt="Email Icon" class="email-icon">
                        <a href="mailto:email@address.com" class="email-link">IVIS.SECURITY@GMAIL.COM</a>
                    </div>
                </div>
                <div class="footer-right">
                    <a href="#" class="footer-link">Terms of Service</a>
                    <a href="#" class="footer-link">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
