<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $dob = $_POST['dob'];
    $education_level = $_POST['education_level'];
    $group_type = $_POST['group_type'];

    $stmt = $conn->prepare("INSERT INTO users (username, password, name, email, mobile_number, dob, education_level, group_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $username, $password, $name, $email, $mobile_number, $dob, $education_level, $group_type);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful! You can now login.'); window.location.href = 'login.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
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
    <title>Register - Smart Government Exam Preparation Portal</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: ##f0f2f5;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: 40px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        header {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        header img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 20px;
        }
        header h1 {
            font-weight: bold;
            color: #333;
            font-size: 36px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td, th {
            padding: 10px;
            border: 1px solid #ddd;
        }
        td {
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="date"],
        select {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .button {
            background-color: #0056b3;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .button:hover {
            background-color: #0056b3;
        }
        p {
            text-align: center;
            margin-top: 20px;
            color: #777;
        }
        a {
            color: #0056b3;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <img src="logo.jpeg" alt="Logo">
            <h1>Smart Government Exam Preparation Portal</h1>
        </header>

        <form method="POST" action="">
            <table>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <h2 style="margin: 0;">Register</h2>
                    </td>
                </tr>
                <tr>
                    <td><label>Username:</label></td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td><label>Password:</label></td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td><label>Name:</label></td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td><label>Email:</label></td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td><label>Mobile Number:</label></td>
                    <td><input type="text" name="mobile_number" required></td>
                </tr>
                <tr>
                    <td><label>Date of Birth:</label></td>
                    <td><input type="date" name="dob" required></td>
                </tr>
                <tr>
                    <td><label>Education Level:</label></td>
                    <td>
                        <select name="education_level" required>
                            <option value="choose">Select your education level</option>
                            <option value="SSLC">SSLC</option>
                            <option value="HSC">HSC</option>
                            <option value="UG">UG</option>
                            <option value="PG">PG</option>
                            <option value="Doctorate">Doctorate</option>
                            <option value="Others">Others</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Group Type:</label></td>
                    <td>
                        <select name="group_type">
                            <option value="choose">Select your group type</option>
                            <option value="TNPSC">TNPSC</option>
                            <option value="TNUSRB">TNUSRB</option>
                            <option value="TNTET">TNTET</option>
                            <option value="TNEB">TNEB</option>
                            <option value="IBPS ">IBPS </option>
                             <option value="RBI">RBI</option>
                             <option value="NET">NET</option>
                            <option value="Others">Others</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" value="Register" class="button">
                    </td>
                </tr>
            </table>
        </form>
        <p>Already registered? <a href="login.php">Login</a></p>
    </div>
</body>
</html>
tml>
