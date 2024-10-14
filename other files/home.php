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
    <title>Home - Dream Career</title>
    <style>
         {
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
        header {
            background-color: #0056b3;
            color: #fff;
            padding: 15px;
            text-align: center;
            position: ;
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
            width: 100px; /* Increased size */
            height: auto;
            margin-left: 30px;
            border-radius: 50%;
        }
        nav {
            width: 100%; /* Full width navigation bar */
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
        .container {
            margin: 100px auto 50px auto;
            width: 80%;
            padding: 20px;
        }
        .info-box {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            margin: 50px auto;
            width: 80%; /* Match table width to container */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        table {
            width: 100%; /* Full width for the table inside the container */
            top: 0;
	    border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }
        th {
            background-color: #0056b3;
            color: white;
        }
        td {
            background-color: #f4f4f9;
        }
        footer {
            text-align: center;
            margin-top: 50px;
            padding: 10px;
            background-color: #0056b3;
            color: #fff;
        }
    </style>
</head>
<body>

<header>
    <!-- Logo at the top-left corner -->
    <img src="logo.jpeg" alt="Dream Career Logo">
    
    <!-- Title centered -->
    <h1>Dream Career</h1>
    
    <!-- Navigation inside header -->
    <nav>
        <ul>
	    <li><a href="about_us.php">About Us</a></li>
            <li><a href="important_notifications.php">Important Notifications</a></li>
            <li><a href="syllabus.php">Syllabus</a></li>
	    <li><a href="materials.php">Materials</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <div class="info-box">
        <h3>Latest Information, News & Timetable</h3>
        <p>Welcome to Dream Career, where you can stay updated with the latest exam schedules, announcements, and news relevant to your educational journey.</p>
        <ul>
            <li><strong>Group 1:</strong> Scheduled on 03rd October, 2024.</li>
            <li><strong>Group 4:</strong> Scheduled on 06th October, 2024.</li>
            <li>New notification regarding syllabus updates will be published soon.</li>
            <li>Check back for further announcements.</li>
        </ul>

        <!-- Example table for the information -->
        <table>
            <thead>
                <tr>
                    <th>Exam</th>
                    <th>Date</th>
                    <th>Subject</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Group 1</td>
                    <td>03rd October, 2024</td>
                    <td>Mathematics</td>
                </tr>
                <tr>
                    <td>Group 4</td>
                    <td>06th October, 2024</td>
                    <td>Social Science</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<footer>
    <p>&copy; 2024 Dream Career. All rights reserved.</p>
</footer>

</body>
</html>
