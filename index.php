<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Government Exam Preparation Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #1e3c72;
            background-image: linear-gradient(315deg, #1e3c72 0%, #2a5298 74%);
            color: white;
            padding: 15px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header img {
            width: 80px;
            height: auto;
            border-radius: 50%;
        }
        header h1 {
            margin: 0;
            font-size: 45px;
            font-weight: 700;
        }
        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            padding: 0;
        }
        nav ul li {
            margin: 0 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
        }
        nav ul li a:hover {
            color: #ffdd57;
        }
        .content {
            padding: 30px;
        }
        h2 {
            color: #1e3c72;
            font-weight: 700;
            font-size: 36px;
            text-align: center;
            margin-bottom: 20px;
        }
        .about-us {
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 60%;
            margin: 50px auto;
            border-radius: 15px;
        }
        .about-us h2 {
            color: #1e3c72;
            font-weight: 700;
            font-size: 45px;
        }
        .about-us p {
            text-align: justify;
            color: #555;
            font-size: 18px;
            line-height: 1.5;
        }
        footer {
            background-color: #1e3c72;
            color: white;
            text-align: center;
            padding: 15px 0;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 30px;
        }
        footer p {
            margin: 0;
            font-size: 16px;
        }

        .buttons {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .buttons .button {
            background-color: #ffdd57;
            color: #1e3c72;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-left: 10px;
            transition: background-color 0.3s ease;
        }
        .buttons .button:hover {
            background-color: #ffd700;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 45px;
            }
            .about-us {
                width: 90%;

            }
            .about-us h2 {
                font-size: 25px;
            }
        }
    </style>
</head>
<body>

<header>
    <img src="logo.jpeg" alt="Smart Government Exam Preparation Portal Logo">
    <h1>Smart Government Exam Preparation Portal</h1>
    <nav>
        <ul>
            <li><a href="login.php">Login</a></li>
	    <li><a href="register.php">Register</a></li>
        </ul>
    </nav>

    
</header>

<div class="about-us">
    <h2>About Us</h2>
    <p>Smart Government Exam Preparation Portal is dedicated to helping individuals find their path to success in their desired career. 
       We offer comprehensive resources, including exam schedules, last year's papers, notifications, 
       and guidance to help students achieve their dreams. Whether you're preparing for competitive exams 
       or looking for expert career advice, Smart Government Exam Preparation Portal is your one-stop solution to unlock opportunities 
       and build a successful future.</p>
</div>
<br>
<footer>
    <p>© 2024 Smart Government Exam Preparation Portal. All rights reserved.</p>
</footer>

</body>
</html>
