<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Database connection
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "dream_career"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve data from the syllabus table
$sql = "SELECT id, exam_name, posts, eligibility_criteria, selection_process, exam_pattern, syllabus FROM syllabus";
$result = $conn->query($sql);

// Check for errors in the query
if (!$result) {
    die("Error retrieving data: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syllabus - Smart Government Exam Preparation Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            color: #333;
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

        .container {
            width: 100%;  /* Full width for table */
            margin: 20px auto;
        }

        h2 {
            text-align: center;
            color: #1e3c72;
            margin-bottom: 20px;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 50px;
            table-layout: fixed;

        }

        th, td {
            padding: 20px;
            text-align: left;
            border: 1px solid #ddd;
            font-size: 18px;
            word-wrap: break-word;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:nth-child(odd) {
            background-color: #fff;
        }

        footer {
            text-align: center;
            padding: 15px;
            background-color: #1e3c72;
            color: #fff;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<!-- Navbar Section (copied from home.php) -->
<header>
    <img src="logo.jpeg" alt="Smart Government Exam Preparation Portal Logo">
    <h1>Smart Government Exam Preparation Portal</h1>
    <nav>
        <ul>
<li><a href="home.php">Home</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="important_notifications.php">Notifications</a></li>
            <li><a href="materials.php">Materials</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>

<!-- Syllabus Page Content -->
<div class="container">
    <h2>Syllabus Details</h2>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Exam Name</th>
                <th>Posts</th>
                <th>Eligibility Criteria</th>
                <th>Selection Process</th>
                <th>Exam Pattern</th>
                <th>Syllabus</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . ($row["id"]) . "</td>
                            <td>" . ($row["exam_name"]) . "</td>
                            <td>" . ($row["posts"]) . "</td>
                            <td>" . ($row["eligibility_criteria"]) . "</td>
                            <td>" . ($row["selection_process"]) . "</td>
                            <td>" . ($row["exam_pattern"]) . "</td>
                            <td>" . ($row["syllabus"]) . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7' class='text-center'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
// Close the database connection
$conn->close();
?>

<!-- Footer Section -->
<footer>
    <p>&copy; 2024 Smart Government Exam Preparation Portal. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
