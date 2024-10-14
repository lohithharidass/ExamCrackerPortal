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
    <title>Home - Dream Career</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Welcome to Dream Career</h2>
        <ul>
            <li><a href="important_notifications.php">Important Notifications</a></li>
            <li><a href="last_year_papers.php">Last Year's Question Papers</a></li>
            <li><a href="answer_keys.php">Answer Keys</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</body>
</html>
