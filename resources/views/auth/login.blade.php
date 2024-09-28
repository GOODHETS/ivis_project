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

        .sign-up-btn {
            font-family: 'Saira Condensed', sans-serif !important;
            border-radius: 0 !important;
            width: 100px;
            font-weight: bold !important;
        }

        .cta-buttons a {
            font-family: 'Saira Condensed', sans-serif !important;
            font-weight: bold !important;
            border-radius: 3 !important;
            width: 100px;
            font-size: 20px;
            margin: 10px;
            padding: 10px 20px;
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

        .content {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    padding: 90px;
    background-color: #D7D7D7;
}

.content-flex {
    display: flex;
    align-items: flex-start;
    gap: 20px;
}

.logo-container {
    display: flex;
    align-items: flex-start;
}

.content-image {
    max-width: 800px;
    height: auto;
    margin-top: 60px; /* Adjust this value to control how far down you want the image */
}

.login-container {
    display: flex;
    flex-direction: column;
}

.login-text {
    text-align: center; /* Center the text within the div */
    margin-bottom: 20px; /* Adjust spacing between text and form */
}

.login-form {
    border: 4px solid #ccc;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    width: 500px;
    max-width: 100%;    
}

.form-group {
    font-size: 25px; /* Corrected property name for text size */
    font-weight: bold; /* Makes the font bold */
    margin-bottom: 20px;
    color: #000000;
}

p {
    margin-top: 0;
    margin-bottom: 0rem;
}

label {
    font-family: 'Saira Condensed', sans-serif;
    font-weight: bold;
    font-size: 20px;
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}
    </style>
</head>
<body>
    <!-- Header Section with Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ url('/') }}">INTELLIGENT VEHICLE IDENTIFICATION SYSTEM</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{ url('/signup') }}" class="nav-link btn btn-danger text-white sign-up-btn">SIGN UP</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main Content Section -->
    <section class="content">
        <div class="content-flex">
            <div class="logo-container">
                <img src="{{ asset('image/ivislogo.png') }}" alt="IVIS Logo" class="content-image">
            </div>
            <div class="login-container">
                <div class="login-text">
                    <h2>LOG-IN</h2>
                </div>
                <form action="{{ route('login.submit') }}" method="POST" class="login-form">
                    @csrf
                    <div class="form-group">
                        <center><label for="email">EMAIL</label></center>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
                        <center><label for="password">PASSWORD</label></center>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
                    </div>
                    <!-- Display validation errors if any -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="login-prompt">
                        <center>DON'T YOU HAVE AN ACCOUNT? <a href="{{ route('signup') }}" class="login">SIGN UP</a></center>
                    </div>
                    <div class="cta-buttons">
                        <center><button type="submit" class="btn btn-success">LOGIN</button></center>
                    </div>
                </form>
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
