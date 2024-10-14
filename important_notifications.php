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
    <title>Exam Details - Smart Government Exam Preparation Portal</title>
    
    <!-- Bootstrap for Responsive Design (Optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Reset Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

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

        /* Exam Details Section */
        .exam-details {
            padding: 30px;
            margin: 40px auto;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            width: 90%;
            max-width: 1200px;
            border-radius: 8px;
        }

        .exam-details h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 36px;
            color: #1e3c72;
        }

        .exam-details table {
            width: 100%;
            border-collapse: collapse;
        }

        .exam-details table th, 
        .exam-details table td {
            padding: 20px;
            border: 1px solid #ddd;
            text-align: ;
            font-size: 16px;
        }

        .exam-details table th {
            background-color: #f2f2f2;
            color: #1e3c72;
            font-size: 18px;
        }

        .exam-details table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Footer Styles */
        footer {
            text-align: center;
            margin-top: 50px;
            padding: 15px;
            background-color: #1e3c72;
            color: #fff;
            font-size: 16px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            header h1 {
                font-size: 40px;
            }

            nav ul li {
                margin: 0 10px;
            }

            nav ul li a {
                padding: 10px 20px;
                font-size: 16px;
            }

            .exam-details {
                padding: 20px;
                margin: 20px auto;
                width: 95%;
            }

            .exam-details h2 {
                font-size: 28px;
            }

            .exam-details table th, 
            .exam-details table td {
                padding: 15px;
                font-size: 14px;
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
       	<li><a href="home.php">Home</a></li>
            <li><a href="about_us.php">About Us</a></li>
            <li><a href="syllabus.php">Syllabus</a></li>
            <li><a href="materials.php">Materials</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>


    <!-- Content Section: Exam Details -->
    <div class="exam-details">
        <h2>Exam Details</h2>
        <table>
            <thead>
                <tr>
                    <th>Exam Name</th>
                    <th>Category</th>
                    <th>Conducting Body</th>
                    <th>Frequency</th>
                    <th>Type</th>
                    <th>Exam Date</th>
<th>Website for Reference</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Connect to the database
                    $conn = new mysqli('localhost', 'root', '', 'dream_career');

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch Central Government Exams
                    $sql_central = "SELECT * FROM exams WHERE exam_type = 'Central'";
                    $result_central = $conn->query($sql_central);

                    if ($result_central->num_rows > 0) {
                        while($row = $result_central->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['exam_name']}</td>
                                    <td>{$row['category']}</td>
                                    <td>{$row['conducting_body']}</td>
                                    <td>{$row['exam_frequency']}</td>
                                    <td>{$row['exam_type']}</td>
                                    <td>{$row['exam_date']}</td>
<td>{$row['link']}</td>
                                  </tr>";
                        }
                    }

                    // Fetch Tamil Nadu State Government Exams
                    $sql_state = "SELECT * FROM exams WHERE exam_type = 'State'";
                    $result_state = $conn->query($sql_state);

                    if ($result_state->num_rows > 0) {
                        while($row = $result_state->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['exam_name']}</td>
                                    <td>{$row['category']}</td>
                                    <td>{$row['conducting_body']}</td>
                                    <td>{$row['exam_frequency']}</td>
                                    <td>{$row['exam_type']}</td>
                                    <td>{$row['exam_date']}</td>
<td>{$row['link']}</td>
                                  </tr>";
                        }
                    }

                    // Close connection
                    $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Smart Government Exam Preparation Portal. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS CDN (Optional for Enhanced Functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
