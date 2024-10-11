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
     <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- SweetAlert JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

        .content {
            max-width: 550px; /* Limit the width */
            margin: 50px auto; /* Center the form */
            padding: 20px;
            background-color: transparent; /* Make the background transparent */
            border-radius: 8px; /* Rounded corners (still active but won't be visible) */
            box-shadow: none; /* Remove the shadow */
        }


        .settings-title {
            text-align: center; /* Center title */
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        h3 {
            font-size: 20px;
            margin-bottom: 15px;
            text-align: center; /* Center the section title */
        }

        .form-group {
            margin-bottom: 15px; /* Space between inputs */
        }

        label {
            font-weight: bold; /* Bold labels */
        }

        .form-control {
            width: 100%; /* Full width input */
            padding: 10px; /* Padding for inputs */
            border: 1px solid #ccc; /* Light gray border */
            border-radius: 5px; /* Rounded corners */
        }

        .btn {
            width: 100%; /* Full width button */
            padding: 10px; /* Padding for buttons */
            border: none; /* Remove default border */
            border-radius: 5px; /* Rounded corners */
            font-size: 16px; /* Font size */
            cursor: pointer; /* Pointer cursor */
        }

        .btn-update {
            background-color: green; /* Green background for update button */
            color: white; /* White text */
            margin-top: 10px; /* Space above the button */
        }

        .btn-logout {
            background-color: red; /* Red background for logout button */
            color: white; /* White text */
            margin-top: 10px; /* Space above the button */
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
                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link contact-link">CONTACT</a></li>
                <li class="nav-item"><a href="#" class="nav-link contact-link active">SETTINGS</a></li>
            </ul>
        </div>
    </nav>
</header>

<!-- Content Section -->
<div class="content">
    <h2 class="settings-title">SETTINGS</h2>

    <!-- Change Password Section -->
    <h3>Change Password</h3>

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form id="changePasswordForm" action="{{ url('/change-password') }}" method="POST" onsubmit="return validatePassword();">
        @csrf

        <div class="form-group">
            <label for="current_password">OLD PASSWORD</label>
            <input type="password" name="current_password" class="form-control" required>
            @error('current_password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="new_password">NEW PASSWORD</label>
            <input type="password" name="new_password" id="password" class="form-control" required oninput="validatePassword();">
            @error('new_password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <!-- Password strength checklist -->
            <div id="passwordChecklist" style="display: none;">
                <ul>
                    <li>
                        <input type="checkbox" id="upperCaseCheck"> At least one uppercase letter
                    </li>
                    <li>
                        <input type="checkbox" id="specialCharCheck"> At least one special character
                    </li>
                    <li>
                        <input type="checkbox" id="lengthCheck"> At least 8 characters long
                    </li>
                </ul>
            </div>
            <div id="strengthMessage"></div>
        </div>

        <div class="form-group">
            <label for="new_password_confirmation">CONFIRM PASSWORD</label>
            <input type="password" name="new_password_confirmation" class="form-control" required oninput="hideStrength();">
        </div>

        <button type="submit" class="btn btn-update">UPDATE</button>
    </form>

    <!-- Log-Out Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="button" class="btn btn-logout" id="logoutButton">LOG-OUT</button>
    </form>
</div>

<!-- SweetAlert JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Change Password Confirmation
    document.getElementById('changePasswordForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting normally

        Swal.fire({
            title: 'Are you sure?',
            text: "You want to change your password?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, change it!'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit(); // Submit the form if confirmed
            }
        });
    });

    // Log-Out Confirmation
    document.getElementById('logoutButton').addEventListener('click', function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to log out?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, log out!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('logout-form').submit(); // Submit the logout form if confirmed
            }
        });
    });

    // Password validation script
    function validatePassword() {
        const password = document.getElementById('password').value;
        const upperCaseCheck = document.getElementById('upperCaseCheck');
        const specialCharCheck = document.getElementById('specialCharCheck');
        const lengthCheck = document.getElementById('lengthCheck');
        const passwordChecklist = document.getElementById('passwordChecklist');
        const strengthMessage = document.getElementById('strengthMessage');

        // Show checklist when user types a password
        passwordChecklist.style.display = 'block';

        // Check for uppercase letter
        upperCaseCheck.checked = /[A-Z]/.test(password);
        // Check for special character
        specialCharCheck.checked = /[!@#$%^&*(),.?":{}|<>]/.test(password);
        // Check for minimum length
        lengthCheck.checked = password.length >= 8;

        // Change the color of the checklist items based on whether the conditions are met
        upperCaseCheck.parentElement.style.color = upperCaseCheck.checked ? 'green' : 'red';
        specialCharCheck.parentElement.style.color = specialCharCheck.checked ? 'green' : 'red';
        lengthCheck.parentElement.style.color = lengthCheck.checked ? 'green' : 'red';

        // Determine password strength
        let strength = 'Weak';
        if (upperCaseCheck.checked && specialCharCheck.checked && lengthCheck.checked) {
            strength = 'Strong';
        } else if (upperCaseCheck.checked || specialCharCheck.checked || lengthCheck.checked) {
            strength = 'Medium';
        }
        
        // Display password strength
        strengthMessage.textContent = `Password Strength: ${strength}`;
        strengthMessage.style.color = strength === 'Strong' ? 'green' : (strength === 'Medium' ? 'orange' : 'red');

        // Allow form submission regardless of password validity
        return true; // Allow form submission
    }

    function hideStrength() {
        // Hide the password strength message when the confirm password input is used
        const strengthMessage = document.getElementById('strengthMessage');
        strengthMessage.textContent = ''; // Clear the strength message
        document.getElementById('passwordChecklist').style.display = 'none'; // Hide the checklist
    }
</script>

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
