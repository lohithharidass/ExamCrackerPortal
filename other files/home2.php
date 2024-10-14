<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Assuming the username is stored in the session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Dream Career</title>
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
            line-height: 1.6;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #2c3e50;
            color: #fff;
            padding: 10px 20px;
            border-bottom: 4px solid #1abc9c;
        }
        header h1 {
            font-size: 24px;
        }
        .user-info {
            display: flex;
            align-items: center;
        }
        .user-info p {
            margin-right: 20px;
        }
        .user-info a {
            color: #fff;
            background-color: #e74c3c;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .user-info a:hover {
            background-color: #c0392b;
        }
        ul {
            list-style: none;
            margin-top: 50px;
        }
        ul li {
            margin-bottom: 15px;
        }
        ul li a {
            display: inline-block;
            background-color: #1abc9c;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        ul li a:hover {
            background-color: #16a085;
        }
        footer {
            text-align: center;
            margin-top: 50px;
            padding: 10px;
            background-color: #2c3e50;
            color: #fff;
        }
    </style>
</head>
<body>

<header>

    <h1>Dream Career</h1>

    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Exams</a></li>
        <li><a href="#">Notifications</a></li>
        <li class="login-register">
          <?php
            session_start();
            if(isset($_SESSION['user'])) {
              echo '<span>Welcome, '.$_SESSION['user']['name'].'</span> | <a href="logout.php">Logout</a>';
            } else {
              echo '<a href="login.php">Login</a> | <a href="register.php">Register</a>';
            }
          ?>
        </li>
      </ul>
    </nav>
 
    <div class="user-info">
        <p>Welcome, <?php echo htmlspecialchars($username); ?>!</p>
        <a href="logout.php">Logout</a>
    </div>
</header>

<div class="container">
    <h2>Explore Resources</h2>
    <ul>
        <li><a href="important_notifications.php">Important Notifications</a></li>
        <li><a href="last_year_papers.php">Last Year's Question Papers</a></li>
        <li><a href="answer_keys.php">Answer Keys</a></li>
        <li><a href="about_us.php">About Us</a></li>
    </ul>
</div>

<footer>
    <p>&copy; 2024 Dream Career. All rights reserved.</p>
</footer>

</body>
</html>
