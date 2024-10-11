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

        .profile-header h2 {
            text-align: center;
            font-family: 'Saira Condensed', sans-serif !important; /* Same font */
            font-weight: bold;
            font-size: 36px;
            padding-top: 5%;
        }

        .profile-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            width: 90%; /* Adjust the width to make it wider, you can also use a fixed width */
            max-width: 1200px; /* Set a maximum width to prevent it from being too wide on larger screens */
            margin: 0 auto; /* Center the container within the viewport */
            padding-top: 6%;
        }

        .profile-image {
            text-align: center;
            margin-right: 15%;
        }

        .image-placeholder {
            width: 400px;
            height: 400px;
            border-radius: 50%;
            border: 2px solid #000;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
        }

        .image-placeholder img {
            width: 80%;
            height: auto;
            border-radius: 50%;
        }

        .profile-image h3 {
            padding-top: 4%;
            font-size: 18px;
            font-weight: bold;
            padding-bottom: 10%;
        }

        .profile-form {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        .form-group label {
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input, 
        .form-group select {
            padding: 8px;
            border: 1px solid #000;
            border-radius: 4px;
            font-size: 14px;
        }

        button[type="submit"] {
            grid-column: span 2;
            padding: 10px 20px;
            background-color: #00FF00;
            color: #000;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #00CC00;
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
                <li class="nav-item"><a href="#" class="nav-link profile-link active">PROFILE</a></li>
                <li class="nav-item"><a href="{{ route('contact') }}"class="nav-link">CONTACT</a></li>
                <li class="nav-item"><a href="#" class="nav-link">SETTINGS</a></li>
            </ul>
        </div>
    </nav>
</header>

<section class="third-content"></section>
    <div class="profile-header">
        <h2>PROFILE</h2>
    </div>
    <div class="profile-container">
        <div class="profile-image">
            <div class="image-placeholder">
                <img src="" alt="Profile Image">
            </div>
            <h3>username</h3>
        </div>
        <div class="profile-form">
            <div class="form-group">
                <label for="last-name">LAST NAME:</label>
                <input type="text" id="last-name" placeholder="Enter last name">

                <label for="first-name">ID NUMBER:</label>
                <input type="text" id="id-number" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label for="id-number">FIRST NAME:</label>
                <input type="text" id="first-namer" placeholder="Enter ID number">

                <label for="plate-number">PLATE NUMBER:</label>
                <input type="text" id="plate-number" placeholder="Enter plate number">
            </div>
            <div class="form-group">
                <label for="gmail">GMAIL:</label>
                <input type="text" id="gmail" placeholder="Enter Gmail">

                <label for="facebook">FACEBOOK LINK:</label>
                <input type="text" id="facebook" placeholder="Enter Facebook link">
            </div>
            <div class="form-group">
                <label for="course">COURSE:</label>
                <select id="course">
                    <option value="">Select course</option>
                    <option>BSIT</option>
                    <option>BSCS</option>
                    <option>BSBA</option>
                    <option>BSTM</option>
                    <option>BSHM</option>
                    <option>BSAC</option>
                </select>

                <label for="year">YEAR:</label>
                <select id="year">
                    <option value="">Select year</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>

                <label for="shift">SHIFT:</label>
                <select id="shift">
                    <option value="">Select shift</option>
                    <option>A</option>
                    <option>B</option>
                    <option>c</option>
                </select>
            </div>
            <button type="submit">CREATE</button>
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
