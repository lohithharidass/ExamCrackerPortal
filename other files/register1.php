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
    <title>Register - Dream Career</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <div class="container">
        <h2>Register</h2>
        <form method="POST" action="register.php" class="form">
            <label>Username:</label>
            <input type="text" name="username" required><br>

            <label>Password:</label>
            <input type="password" name="password" required><br>

            <label>Name:</label>
            <input type="text" name="name" required><br>

            <label>Email:</label>
            <input type="email" name="email" required><br>

            <label>Mobile Number:</label>
            <input type="text" name="mobile_number" required><br>

            <label>Date of Birth:</label>
            <input type="date" name="dob" required><br>

            <label>Education Level:</label>
            <select name="education_level" required>
		<option value="choose">Select your education level</option>
                <option value="SSLC">SSLC</option>
                <option value="HSC">HSC</option>
                <option value="UG">UG</option>
                <option value="PG">PG</option>
                <option value="Doctorate">Doctorate</option>
		<option value="Others">Others</option>
            </select><br>

            <label>Group Type:</label>
            <select name="group_type">
		<option value="choose">Select your group exam choice</option>
                <option value="Group 1">Group 1</option>
                <option value="Group 2">Group 2</option>
                <option value="Group 3">Group 3</option>
                <option value="Group 4">Group 4</option>
		<option value="Others">Others</option>
		
            </select><br>

            <input type="submit" value="Register" class="button">
        </form>

        <p>Already registered? <a href="login.php">Login</a></p>
    </div>
</body>
</html>

        