<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Smart Government Exam Preparation Portal</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

       
        nav {
            background-color: #1e3c72;
            color: white;
            padding: 30px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav .logo {
            display: flex;

            align-items: center;
        }

        nav .logo img {
            margin-right: 15px;
	    border-radius: 50px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: #003366;
            border-radius: 5px;
        }

        /* Main About Us Section */
        .about-us-section {
            padding: 60px 20px;
            text-align: center;
            background-color: ;
            color: black;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            margin-bottom: 40px;
        }

        .about-us-section h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #003366;
        }

        .about-us-section p {
            font-size: 18px;
            line-height: 1.8;
            margin: 0 auto;
            max-width: 800px;
        }

        /* Mission & Vision Styles */
        .mission-vision {
            display: flex;
            justify-content: center;
color: black;
            gap: 50px;
            margin: 40px 0;
        }

        .mission-vision div {
            background-color: white;
            color: #003366;
            padding: 30px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .mission-vision h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #0056b3;
        }

        .mission-vision p {
            font-size: 16px;
            line-height: 1.6;
        }

        /* Creators Section */
        .creator-section {
            display: flex;
            justify-content: center;
            gap: 50px;
            flex-wrap: wrap;
            padding: 40px 0;
            background-color: #f9f9f9;
        }

        .creator {
            background-color: white;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 250px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .creator:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .creator img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .creator h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }

        .creator p {
            font-size: 16px;
            color: #555;
        }

        /* Footer Styles */
        footer {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 15px;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <div class="logo">
            <img src="logo.jpeg" alt="Smart Government Exam Preparation Portal Logo" height="50px">
            <span style="font-size: 24px; font-weight: bold;">Smart Government Exam Preparation Portal</span>
        </div>
        <ul class="nav-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="important_notifications.php">Notifications</a></li>
            <li><a href="syllabus.php">Syllabus</a></li>
            <li><a href="materials.php">Materials</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <!-- About Us Section -->
    <div class="about-us-section">
        <h1>About Smart Government Exam Preparation Portal</h1>
        <p>
            At Smart Government Exam Preparation Portal, our mission is to empower students and job seekers by providing comprehensive information and resources for government exams. We are committed to helping aspirants achieve their dreams by offering the most relevant and up-to-date content on one convenient platform.
        </p>
    </div>

    <!-- Mission and Vision Section -->
    <div class="mission-vision">
        <div class="mission">
            <h2>Our Mission</h2>
            <p>
                To empower students and job seekers by providing comprehensive resources, guidance, and tools to help them succeed in their career aspirations, particularly in government examinations.
            </p>
        </div>
        <div class="vision">
            <h2>Our Vision</h2>
            <p>
                To become the leading educational platform that simplifies learning and exam preparation for students across the country, making education and career success more accessible to everyone.
            </p>
        </div>
    </div>

    <!-- Creators Section -->
    <div class="creator-section">
        <div class="creator">
            <img src="creator1.jpg" alt="Lohith H">
            <h3>Lohith H</h3>
            <p>B.Sc Computer Science, Final Year<br>Bishop Heber College</p>
        </div>
        <div class="creator">
            <img src="creator2.jpg" alt="Kesavan S">
            <h3>Kesavan S</h3>
            <p>B.Sc Computer Science, Final Year<br>Bishop Heber College</p>
        </div>
        <div class="creator">
            <img src="creator3.jpg" alt="Balaji S">
            <h3>Balaji S</h3>
            <p>B.Sc Computer Science, Final Year<br>Bishop Heber College</p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Smart Government Exam Preparation Portal. All rights reserved.</p>
    </footer>

</body>
</html>
