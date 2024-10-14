<?php
include 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $hashed_password);
    
    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            echo "<script>alert('Login successful!'); window.location.href = 'home.php';</script>";
        } else {
            echo "<script>alert('Invalid credentials! Please try again.');</script>";
        }
    } else {
        echo "<script>alert('No user found! Please register first.');</script>";
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Career</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        header {
            background-color: #0056b3;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: relative;
        }
        header h1 {
            display: inline-block;
            font-size: 45px;
        }
        header img {
            width: 60px;
            height: 60px;
            position: absolute;
            left: 20px;
            top: 20px;
            border-radius: 50%;
        }
        .container {
            display: flex;
            flex: 1;
            padding: 20px;
            justify-content: space-betweem;
        }
        .about-us {
            flex: 1;
            background-color: #fff;
            padding: 40px;
            margin-right: 50px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
        }
        .about-us h2 {
            color: #0056b3;
            margin-bottom: 30px;
        }
        .login-box {
            width: 500px;
            background-color: #fff;
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 2px 1px rgba(0,0,0,0.1);
        }
        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .form label {
            margin-bottom: 5px;
            color: #555;
        }
        .form input[type="text"],
        .form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .button {
            width: 100%;
            padding: 10px;
            background-color: #0056b3;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #004080;
        }
        footer {
            padding: 10px;
            background-color: #0056b3;
            color: #fff;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <img src="logo.jpeg" alt="Logo">
        <h1><b>Dream Career</b></h1>
    </header>

    <div class="container">
        <!-- About Us section -->
        <div class="about-us">
            <h2>About Us</h2>
            <p>Dream Career is dedicated to helping individuals find their path to success in their desired career. 
               We offer comprehensive resources, including exam schedules, last year's papers, notifications, 
               and guidance to help students achieve their dreams. Whether you're preparing for competitive exams 
               or looking for expert career advice, Dream Career is your one-stop solution to unlock opportunities 
               and build a successful future.</p>
        </div>

        <!-- Login Box -->
        <div class="login-box">
            <h2>Login</h2>
            <form method="POST" action="" class="form">
                <label>Username:</label>
                <input type="text" name="username" required>
                <label>Password:</label>
                <input type="password" name="password" required>
                <input type="submit" value="Login" class="button">
            </form>
            <p style="text-align: center;">New User? <a href="register.php">Register</a></p>
        </div>
    </div>

    <footer>
        <p>© 2024 Dream Career. All rights reserved.</p>
    </footer>
</body>
</html>
