<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Important Notifications - Dream Career</title>
    <style>
        /* Universal and Body Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.8;
        }

        /* Header Styles */
        header {
            background-color: #0056b3;
            color: #fff;
            padding: 15px;
            text-align: center;
           
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        header h1 {
            margin: 0;
            font-size: 60px;
            flex: 1;
            text-align: center;
        }
        header img {
            width: 100px;
            height: auto;
            margin-left: 0px;
            border-radius: 50%;
        }

        /* Navigation Styles */
        nav {
            width: 100%;
            background-color: #0056b3;
            padding: 10px 0;
            margin-top: 15px;
        }
        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            margin: 0 auto;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            background-color: #004080;
        }
        nav ul li a:hover {
            background-color: #003366;
        }

        /* Container Styles */
        .container {
            margin: 100px auto 50px auto;
            width: 80%;
            padding: 20px;
        }

        /* Carousel Styles */
        .carousel-item {
            background-color: #0056b3;
            color: #fff;
            border-radius: 10px;
            padding: 40px 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            min-height: 300px; /* Set a uniform height for all carousel items */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 100%; /* Set to 100% width to match the container */
        }
        .carousel-item h3 {
            font-size: 1.7rem;
            font-weight: 700;
        }
        .carousel-item p {
            font-size: 1.2rem;
        }

        /* Footer Styles */
        footer {
            text-align: center;
            margin-top: 50px;
            padding: 10px;
            background-color: #0056b3;
            color: #fff;
        }
    </style>
    <!-- Bootstrap CSS for Carousel -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<header>
    <!-- Logo at the top-left corner -->
    <img src="logo.jpeg" alt="Dream Career Logo"> <!-- Replace 'logo.jpeg' with your logo file path -->
    
    <!-- Title centered -->
    <h1>Dream Career</h1>
    
    <!-- Navigation inside header -->
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="syllabus.php">Syllabus</a></li>
            <li><a href="materials.php">Materials</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>

<!-- Container for Content -->
<div class="container">
    <h1 class="text-center mb-4">Important Exam Notifications</h1>
    <h5 class="text-center mb-4">TN Government Group Exam Dates</h5>

    <!-- Carousel for Exam Notifications -->
    <div id="examDatesCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <!-- First Item -->
            <div class="carousel-item active">
                <div>
                    <h3>TNPSC Group 1 Exam</h3>
                    <p>Preliminary Exam Date: <strong>November 14, 2024</strong></p>
                    <p>Main Exam Date: <strong>January 10, 2025</strong></p>
                    <p>Interview Date: <strong>March 15, 2025</strong></p>
                </div>
            </div>
            <!-- Second Item -->
            <div class="carousel-item">
                <div>
                    <h3>TNPSC Group 2 Exam</h3>
                    <p>Preliminary Exam Date: <strong>February 21, 2025</strong></p>
                    <p>Main Exam Date: <strong>May 25, 2025</strong></p>
                </div>
            </div>
            <!-- Third Item -->
            <div class="carousel-item">
                <div>
                    <h3>TNPSC Group 4 Exam</h3>
                    <p>Exam Date: <strong>July 7, 2025</strong></p>
                </div>
            </div>
            <!-- Additional Items as Needed -->
        </div>
        <!-- Carousel Controls -->
        <a class="carousel-control-prev" href="#examDatesCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#examDatesCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<footer>
    <p>&copy; 2024 Dream Career. All rights reserved.</p>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
