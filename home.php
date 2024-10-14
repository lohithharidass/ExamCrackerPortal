<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Smart Government Exam Preparation Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        .tab-buttons {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }
        .tab-buttons button {
            padding: 12px 30px;
            margin-right: 15px;
            border: none;
            background-color: #1e3c72;
            color: white;
            font-size: 18px;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .tab-buttons button.active {
            background-color: #ffdd57;
            color: #1e3c72;
        }

        /* Centering the carousel */
        .carousel-container {
            margin: 50px auto;
            width: 80%;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .carousel-item {
            text-align: center;
            background-color: #ffffff; /* White background for carousel items */
            padding: 40px;
            border-radius: 15px;
        }
        .carousel-item h3 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #1e3c72;
            font-weight: 700;
        }
        .carousel-item p {
            font-size: 18px;
            margin: 5px 0;
            color: #555; /* Darker text for better readability */
        }

        /* Change the color of carousel buttons */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: blue; /* Change the button icons to blue */
            border-radius: 50%;
        }

        .carousel-control-prev,
        .carousel-control-next {
            background-color: rgba(0, 0, 255, 0.3); /* Semi-transparent blue background for button */
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }

        /* Add a footer */
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

        /* Add a responsive image */
        @media (max-width: 768px) {
            header h1 {
                font-size: 30px;
            }
            .carousel-container {
                width: 90%;
            }
            .carousel-item h3 {
                font-size: 20px;
            }
            .carousel-item p {
                font-size: 16px;
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
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="important_notifications.php">Notifications</a></li>
            <li><a href="syllabus.php">Syllabus</a></li>
            <li><a href="materials.php">Materials</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>
<br>
<!-- Carousel Section -->
<div class="carousel-container">
    <div id="examCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
                // Connect to the database
                $conn = new mysqli('localhost', 'root', '', 'dream_career');

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch all exams
                $sql = "SELECT * FROM exams";
                $result = $conn->query($sql);

                $activeClass = 'active';
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="carousel-item ' . $activeClass . '">';
                        echo '<h3>' . $row['exam_name'] . '</h3>';
                        echo '<p><strong>Conducting Body:</strong> ' . $row['conducting_body'] . '</p>';
                        echo '<p><strong>Exam Date:</strong> ' . $row['exam_date'] . '</p>';
                        echo '</div>';
                        $activeClass = ''; // Remove active class after the first item
                    }
                } else {
                    echo '<div class="carousel-item active">';
                    echo '<h3>No Exams Available</h3>';
                    echo '</div>';
                }

                // Close connection
                $conn->close();
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#examCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#examCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<br>
<!-- Footer Section -->
<footer>
    <p>&copy; 2024 Smart Government Exam Preparation Portal. All rights reserved.</p>
</footer>

<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
