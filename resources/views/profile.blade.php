<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IVIS</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Saira+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        /* Header Section */
        header {
            position: relative;
            height: 150px;
            background-image: url('{{ asset('image/parklot.jpg') }}');
            background-size: cover;
            background-position: center;
        }
        header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
        }
        .navbar {
            background-color: transparent !important;
            position: absolute;
            width: 100%;
            top: 30px;
        }
        .navbar-brand {
            font-family: 'Russo One', sans-serif;
            font-size: 35px;
            color: white !important;
            margin-left: 35px;
            position: relative;
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

        /* Content Section */
        .content {
            background-color: #D7D7D7;
            padding: 50px;
            text-align: center;
        }
        .content h2 {
            font-family: 'Saira Condensed', sans-serif;
            font-size: 36px;
            font-weight: bold;
            color: #000000;
        }
        .content p {
            font-family: 'Saira Condensed', sans-serif;
            font-size: 19px;
            color: #000000;
        }

        /* Footer Section */
        .footer {
            background-color: #000000;
            color: white;
            padding: 40px 0;
            display: flex;
            align-items: center;
        }
        .footer .container {
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
            text-decoration: none;
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
            font-size: 14px;
            color: white !important;
            text-decoration: none;
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

        .profile-container {
    background-color: #e3e3e3;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    width: 500px;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

.profile-form {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.profile-pic {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-right: 20px;
}

.pic-circle {
    width: 100px;
    height: 100px;
    border: 2px solid #333;
    border-radius: 50%;
    margin-bottom: 10px;
}

p {
    font-size: 18px;
    font-weight: bold;
}

.form-fields {
    width: 100%;
}

.row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

.field {
    display: flex;
    flex-direction: column;
    width: 48%;
}

.field label {
    font-size: 14px;
    margin-bottom: 4px;
}

.field input, .field select {
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.form-buttons {
    margin-top: 20px;
}

.save-btn, .cancel-btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin: 0 10px;
}

.save-btn {
    background-color: #28a745;
    color: #fff;
}

.cancel-btn {
    background-color: #dc3545;
    color: #fff;
}

.save-btn:hover {
    background-color: #218838;
}

.cancel-btn:hover {
    background-color: #c82333;
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


    <div class="profile-container">
        <h2>PROFILE</h2>
        <div class="profile-form">
            <div class="profile-pic">
                <div class="pic-circle">
                    <!-- Placeholder for profile picture -->
                </div>
                <p>USERNAME</p>
            </div>
            <div class="form-fields">
                <div class="row">
                    <div class="field">
                        <label for="lastName">Last Name:</label>
                        <input type="text" id="lastName">
                    </div>
                    <div class="field">
                        <label for="firstName">First Name:</label>
                        <input type="text" id="firstName">
                    </div>
                </div>
                <div class="row">
                    <div class="field">
                        <label for="idNumber">ID Number:</label>
                        <input type="text" id="idNumber">
                    </div>
                    <div class="field">
                        <label for="course">Course:</label>
                        <input type="text" id="course">
                    </div>
                    <div class="field">
                        <label for="year">Year:</label>
                        <input type="text" id="year">
                    </div>
                </div>
                <div class="row">
                    <div class="field">
                        <label for="shift">Shift:</label>
                        <select id="shift">
                            <option value="morning">Morning</option>
                            <option value="afternoon">Afternoon</option>
                            <option value="evening">Evening</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="contactNumber">Contact Num#:</label>
                        <input type="text" id="contactNumber">
                    </div>
                </div>
                <div class="row">
                    <div class="field">
                        <label for="gmail">Gmail:</label>
                        <input type="text" id="gmail">
                    </div>
                    <div class="field">
                        <label for="plateNumber">Plate Number:</label>
                        <input type="text" id="plateNumber">
                    </div>
                </div>
                <div class="row">
                    <div class="field">
                        <label for="vehicleBrand">Brand of Vehicle:</label>
                        <input type="text" id="vehicleBrand">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-buttons">
            <button class="save-btn">SAVE</button>
            <button class="cancel-btn">CANCEL</button>
        </div>
    </div>

        
    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer-left">
                <div class="footer-text">Get in Touch</div>
                <div class="footer-email">
                    <img src="{{ asset('image/email.png') }}" alt="Email Icon" class="email-icon">
                    <a href="mailto:IVIS.SECURITY@GMAIL.COM" class="email-link">IVIS.SECURITY@GMAIL.COM</a>
                </div>
            </div>
            <div class="footer-right">
                <a href="#" class="footer-link">Terms of Service</a>
                <a href="#" class="footer-link">Privacy Policy</a>
            </div>
        </div>
    </footer>
</body>
</html>
