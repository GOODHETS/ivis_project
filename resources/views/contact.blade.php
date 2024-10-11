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

    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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
        .container {
            display: flex;
            width: 70%;
            margin: 80px auto;
            background-color: transparent;
            border: 1px solid #000000;
            height: auto;
            padding: 40px 20px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }

        .left-side, .right-side {
            padding: 20px;
        }

        .left-side {
            width: 50%;
            background-color: transparent;
            border-right: 1px solid #000000;
        }

        .right-side {
            width: 50%;
            background-color: transparent;
        }

        .logo, .logo-form {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 250px;
            margin: 0 auto 15px;
            display: block;
        }

        .email-form {
            text-align: center;
        }

        .email-form img {
            width: 250px;
            margin: 0 auto 15px;
            display: block;
        }

        .contact-info p {
            padding-top: 15px;
            font-weight: bold;
            margin: 20px 60px;
            font-size: 18px;
            display: flex;
            align-items: center;
        }

        .contact-info img {
            width: 20px;
            margin-right: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        label {
            margin-bottom: 10px;
            font-size: 16px;
            width: 90%;
        }

        input, textarea {
            margin-bottom: 20px;
            padding: 15px;
            font-size: 14px;
            border: 1px solid #000000;
            border-radius: 4px;
            width: 90%;
            background: transparent;
            transition: background-color 0.3s ease;
        }

        input:hover, textarea:hover {
            background-color: rgba(255, 255, 255, 0.8);
        }

        button {
            padding: 15px;
            background-color: #026906;
            color: white;
            border: none;
            border-radius: 4px;
            width: 90%;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #004c04;
        }

        .footer {
            background-color: #000000;
            color: white;
            font-weight: bold;
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
                <li class="nav-item"><a href="{{ route('settings') }}" class="nav-link">SETTINGS</a></li>
            </ul>
        </div>
    </nav>
</header>

<div class="container">
    <div class="left-side">
        <div class="logo">
            <img src="{{ asset('image/12m.png') }}" alt="Logo">
        </div>
        <div class="contact-info">
            <p><img src="{{ asset('image/img3.svg') }}" alt="Email-econ"> ivis.company.og@gmail.com</p>
            <p><img src="{{ asset('image/img8.svg') }}" alt="Facebook Icon"> ivis.company.facebook.com</p>
            <p><img src="{{ asset('image/img5.svg') }}" alt="Phone Icon"> 044-524-125</p>
            <p><img src="{{ asset('image/img6.svg') }}" alt="Mobile Icon"> 63+9854785415</p>
        </div>
    </div>
    <div class="right-side">
        <div class="email-form">
            <img src="{{ asset('image/12.png') }}" alt="Logo">
        </div>
        <form id="contactForm" action="{{ route('contact.store') }}" method="POST">
            @csrf
            <label for="name">NAME:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">EMAIL:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">MESSAGE:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</div>

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
            <a href="{{ route('main.landing.page') }}" class="nav-link home">Home</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Contact Us</a>
        </div>
    </div>
</footer>

<!-- SweetAlert JavaScript -->
<script>
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting normally

    const formData = new FormData(this);

    fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest', // Optional, can be useful to identify AJAX requests
        },
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show SweetAlert if the message was sent successfully
            Swal.fire({
                icon: 'success',
                title: 'Thank You!',
                text: data.success,
            });
            this.reset(); // Reset the form after successful submission
        }
    })
    .catch(error => {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
        });
    });
});
</script>

</body>
</html>


