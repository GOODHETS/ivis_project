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
            border-radius: 2 !important;
            width: 100px;
            font-weight: bold !important;
            background-color:green;
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
    display: flex;
    align-items: flex-start;
    justify-content: center;
    padding: 50px;
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
    padding-top:15vh;
    max-width: 800px;
    height: auto;
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

/* Styles for the checklist */
.checklist {
        margin-top: 10px;
        padding-left: 0;
    }

    .checklist-item {
        font-size: small;
        display: flex;
        align-items: center;
        margin: 5px 0;
    }

    .checklist-item input[type="checkbox"] {
        margin-right: 5px;
        accent-color: green; /* Change checkbox color */
    }

    /* Responsive design adjustments */
    @media (max-width: 600px) {
        .checklist-item {
            font-size: 12px; /* Smaller font on smaller screens */
        }
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
                <li class="nav-item">
                    <a href="{{ url('login') }}" class="nav-link btn text-white sign-up-btn" style="background-color: green;">LOGIN</a>
                </li>
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
                <h2>SIGN IN</h2>
            </div>

            <!-- Error Handling Block -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST" class="login-form" onsubmit="return validatePassword()">
                @csrf <!-- CSRF token for form security -->

                <div class="form-group">
                    <center><label for="username">Username</label></center>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username" required>
                </div>

                <div class="form-group">
                    <center><label for="email">Email</label></center>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email" required>
                </div>

                <div class="form-group">
                    <center><label for="password">Password</label></center>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required oninput="validatePassword()">
                    <small id="passwordError" class="form-text text-danger" style="display:none;"></small>

                    <!-- Checklist for Password Requirements -->
                    <div id="passwordChecklist" class="checklist" style="display:none; margin-top: 10px;">
                        <ul style="list-style-type: none; padding-left: 0;">
                            <li class="checklist-item">
                                <input type="checkbox" id="upperCaseCheck" disabled>
                                Password must contain at least 1 uppercase letter.
                            </li>
                            <li class="checklist-item">
                                <input type="checkbox" id="specialCharCheck" disabled>
                                Password must contain at least 1 special character.
                            </li>
                            <li class="checklist-item">
                                <input type="checkbox" id="lengthCheck" disabled>
                                Password must be at least 8 characters long.
                            </li>
                        </ul>
                        <div id="passwordStrength" style="margin-top: 10px; font-weight: bold;">
                            <span id="strengthMessage" style="font-size: 12px;"></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <center><label for="confirm-password">Confirm Password</label></center>
                    <input type="password" id="confirm-password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required oninput="hideStrength()">
                </div>

                <div class="login-prompt">
                    <center>
                        <p>Do you have an account? 
                            <a href="{{ route('login') }}" class="login">Login</a>
                        </p>
                    </center>
                </div>

                <div class="cta-buttons">
                    <center><button type="submit" id="signin-btn" class="btn btn-success">Sign In</button></center>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- JavaScript to show/hide checklist and validate password -->
<script>
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
                <img src="{{asset('image/email.png')}}" alt="email icon" class="email-icon"> 
                <a class="email-link" href="mailto:ivisupport@gmail.com">ivisupport@gmail.com</a>
            </div>
        </div>
        <div class="footer-right">
            <a href="#">Privacy Policy</a>
            <a href="#">Contact Us</a>
        </div>
    </div>
</footer>
</body>
</html>