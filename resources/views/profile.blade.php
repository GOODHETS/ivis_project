<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IVIS</title>
    <link rel="stylesheet" href="styles_profile.css">
    <!-- Textfonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Russo+One&family=Saira+Condensed:wght@400;700&display=swap" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>


<style>
html, body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}
.wrapper {
    display: flex;
    flex-direction: column;
    min-height: 100vh; /* Ensures the wrapper takes up at least the full viewport height */
}
header {
    position: relative;
    height: 150px;
    background-image: url('{{ asset('image/parklot.jpg') }}');
    background-size: cover;
    background-position: center;
    z-index: 1; /* Ensure the content is above the overlay */
}
header::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent black */
    z-index: -1; /* Place the overlay behind the content */
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
    position: relative; /* Required for ::after positioning */
    padding-bottom: 2px; /* Space for the line */
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

.navbar-brand:hover {
    text-decoration: underline;
}

.navbar-brand:hover::after {
    width: 100%; /* Line expands to the full width on hover */
}

.navbar-nav a {
    font-family: 'Roboto Condensed', sans-serif;
    color: white;
    margin-right: 20px;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: bold;
}

.navbar-nav .nav-link {
    position: relative;
    color: white;
    margin-right: 20px;
    font-size: 16px;
    letter-spacing: 1px;
    font-weight: bold;
    text-decoration: none; /* Disable the default underline */
}

/* Apply red underline hover effect to ABOUT, PROFILE, and CONTACT */
.navbar-nav .nav-item:nth-child(2) .nav-link::after, /* ABOUT */
.navbar-nav .nav-item:nth-child(3) .nav-link::after, /* PROFILE */
.navbar-nav .nav-item:nth-child(4) .nav-link::after { /* CONTACT */
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    bottom: 6px; /* Adjust the position of the underline */
    height: 2px; /* The thickness of the underline */
    background-color: red; /* The color of the underline */
    transform: scaleX(0); /* Initially, hide the underline */
    transform-origin: right; /* The underline starts from the right */
    transition: transform 0.3s ease; /* Smooth transition effect */
}

.navbar-nav .nav-item:nth-child(2) .nav-link:hover::after, /* ABOUT */
.navbar-nav .nav-item:nth-child(3) .nav-link:hover::after, /* PROFILE */
.navbar-nav .nav-item:nth-child(4) .nav-link:hover::after { /* CONTACT */
    transform: scaleX(1); /* Show the underline on hover */
    transform-origin: left; /* The underline grows from left to right */
}

.home-link {
    color: red !important;
}

.home-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: 6px;
    left: 0;
    background-color: red !important;
    transition: width 0.3s ease-in-out;
}

.home-link:hover {
    color: white !important;
    text-decoration: underline;
}

.home-link:hover::after {
    width: 100%; /* Line expands to the full width on hover */
}

.sign-up-btn {
    font-family: 'Saira Condensed', sans-serif !important;
    border-radius: 0 !important;
    width: 100px;
    font-weight: bold !important;
}
.cta-buttons a {
    font-family: 'Inter', sans-serif !important;
    font-weight: normal !important;
    color: black;
    border-radius: 0 !important;
    width: 101px;
    font-size: 16px;
    margin: 10px;
    padding: 10px 20px;
}
.content {
    flex: 1; /* This makes the content take up remaining space */
    background-color: #D7D7D7; 
    padding: 50px;
    text-align: center;
}
/* Flex container for aligning image and button */
.content-flex {
    display: flex;                /* Flexbox layout */
    justify-content: space-between; /* Align items to the sides (left and right) */
    align-items: center;           /* Vertically center-align the items */
    width: 100%;
    gap: 20px;
    padding: 20px;
}
/* Styling for form container */
.sign-in-form {
    margin-top: 20px; /* Delete? */
    max-width: 400px;  /* Limit form width */
    margin-left: auto;
    margin-right: auto;
}
.login-prompt{
    font-family: 'Saira Condensed', sans-serif;
}
.login{
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: bold;
}
/* Form field styling */
.form-group {
    margin-bottom: 20px;
    color: #000000;
}
.row {
    text-align: left;
}
label {
    font-family: 'Inter', sans-serif;
    font-weight: normal;
    font-size: 16px;
    display: block;
    margin-bottom: 1px !important;
    margin-top: 7px !important;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}
/* Image styling */
.content-image {
    max-width: 500px;  /* Set a reasonable width for the image */
    height: auto;      /* Maintain aspect ratio */
    margin-left: 10px;
}

/* Button container styling */
.cta-buttons {
    margin-left: auto; /* Push button to the right */
}

/* Optional: Add some space between elements */
.content-flex > * {
    margin: 0 20px; /* Adds space between the image and button */
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
    position: relative; /* Required for ::after positioning */
    padding-bottom: 2px; /* Space for the line */
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
    width: 100%; /* Line expands to the full width on hover */
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
    position: relative; /* Required for ::after positioning */
    padding-bottom: 2px; /* Space for the line */
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


.footer-link:hover {
    text-decoration: underline;
}

.footer-link:hover::after {
    width: 100%; /* Line expands to the full width on hover */
}

.footer .container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
}

</style>


<body>
    <div class="wrapper">
<!-- Header Section with Navbar -->
<header>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.html">IVIS</a>
        <div class="collapse navbar-collapse" id="navbarNav">
        </div>
    </nav>
</header>



<section class="content">
    <h2>PROFILE</h2>
    <div class="content-flex">
        <div class="logo-container">
        <img src="{{ asset('image/ivislogo.png') }}" alt="IVIS Logo" class="content-image">
            <h2>{{ Auth::user()->username }}</h2>
        </div>

        <div class="container">
            <!-- Success and Error Messages -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form to Update User Profile -->
            <form action="{{ route('profile.update') }}" method="POST" class="sign-in-form">
                @csrf <!-- CSRF token for security -->
                @method('PUT') <!-- Method override for PUT request -->
                
                <div class="row">
                    <div class="col">
                        <label for="lastname">LAST NAME:</label>
                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Enter Last Name" value="{{ old('lastname', Auth::user()->lastname) }}" required>
                    </div>
                    <div class="col">
                        <label for="firstname">FIRST NAME:</label>
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Enter First Name" value="{{ old('firstname', Auth::user()->firstname) }}" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="IDNumber">ID NUMBER:</label>
                        <input type="text" id="IDNumber" name="IDNumber" class="form-control" value="{{ old('IDNumber', Auth::user()->IDNumber) }}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Course">COURSE:</label>
                        <select id="Course" name="course" class="form-control">
                            <option value="BSIT" {{ old('course', Auth::user()->course) == 'BSIT' ? 'selected' : '' }}>BSIT</option>
                            <option value="BSCE" {{ old('course', Auth::user()->course) == 'BSCE' ? 'selected' : '' }}>BSCE</option>
                            <option value="BSE" {{ old('course', Auth::user()->course) == 'BSE' ? 'selected' : '' }}>BSE</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Year">YEAR:</label>
                        <select id="Year" name="year" class="form-control">
                            <option value="1st" {{ old('year', Auth::user()->year) == '1st' ? 'selected' : '' }}>1st</option>
                            <option value="2nd" {{ old('year', Auth::user()->year) == '2nd' ? 'selected' : '' }}>2nd</option>
                            <option value="3rd" {{ old('year', Auth::user()->year) == '3rd' ? 'selected' : '' }}>3rd</option>
                            <option value="4th" {{ old('year', Auth::user()->year) == '4th' ? 'selected' : '' }}>4th</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="Shift">SHIFT:</label>
                        <select id="Shift" name="shift" class="form-control">
                            <option value="A" {{ old('shift', Auth::user()->shift) == 'A' ? 'selected' : '' }}>A</option>
                            <option value="B" {{ old('shift', Auth::user()->shift) == 'B' ? 'selected' : '' }}>B</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="Contact">CONTACT NUM#:</label>
                        <input type="text" id="Contact" name="contact" class="form-control" value="{{ old('contact', Auth::user()->contact) }}" required>
                    </div>
                    <div class="col">
                        <label for="Gmail">GMAIL:</label>
                        <input type="email" id="Gmail" name="email" class="form-control" value="{{ old('email', Auth::user()->email) }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="PlateNum">PLATE NUMBER:</label>
                        <input type="text" id="PlateNum" name="plate_num" class="form-control" value="{{ old('plate_num', Auth::user()->plate_num) }}" required>
                    </div>
                    <div class="col">
                        <label for="Brand">BRAND OF VEHICLE:</label>
                        <input type="text" id="Brand" name="vehicle_brand" class="form-control" value="{{ old('vehicle_brand', Auth::user()->vehicle_brand) }}" required>
                    </div>
                </div>

                <div class="cta-buttons">
                    <button type="submit" class="btn btn-success">SAVE</button>
                    <a href="{{ route('profile') }}" class="btn btn-danger">CANCEL</a>
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
                <p class="footer-text">YOUR CAMPUS GATEWAY TO SECURE AND SEAMLESS PARKING</p>
                <div class="footer-email">
                    <img src="crop-0-0-1000-1080-0-email-icon-outline-email-icon-isolated-on-white-vector-21742596.png" alt="email icon" class="email-icon"> 
                    <a href="mailto:ivis.company.og@gmail.com" class="email-link">IVIS.COMPANY.OG@GMAIL.COM</a>
                </div>
            </div>
            <div class="footer-right">
                <a href="#" class="footer-link">Private Policy</a>
                <a href="#" class="footer-link">Terms & Condition</a>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>