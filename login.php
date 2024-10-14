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
    <title>Login - Smart Government Exam Preparation Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('background-drawing.jpg'); /* Add a drawing-themed background */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Transparent background for form */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .logo img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        h2 {
            font-size: 30px;
            font-weight: bold;
            color: #0056b3;
            margin-bottom: 30px;
        }
        .form label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }
        .form input[type="text"],
        .form input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .button {
            width: 100%;
            padding: 12px;
            background-color: #0056b3;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #004080;
        }
        p {
            margin-top: 15px;
            font-size: 14px;
        }
        p a {
            color: #0056b3;
            text-decoration: none;
        }
        p a:hover {
            text-decoration: underline;
        }
        /* Mobile-friendly */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="logo.jpeg" alt="Smart Government Exam Preparation Portal Logo">
        </div>
        <h2>Welcome to Smart Government Exam Preparation Portal</h2>

        <form method="POST" action="login.php" class="form">
            <label>Username</label>
            <input type="text" name="username" required placeholder="Enter your username">
            <label>Password</label>
            <input type="password" name="password" required placeholder="Enter your password">
           <input type="submit" value="Login" class="button">
        </form>
        <p>New here? <a href="register.php">Create an account</a></p>
    </div>
</body>
</html>
