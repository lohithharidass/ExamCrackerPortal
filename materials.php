<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Materials - Smart Government Exam Preparation Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
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
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 10px;
        }
        .syllabus-card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .syllabus-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .syllabus-card i {
            font-size: 40px;
            color: #1e3c72;
            margin-bottom: 10px;
        }
        .syllabus-card h5 {
            font-size: 20px;
            color: #1e3c72;
            margin-bottom: 15px;
        }
        .syllabus-card a {
            text-decoration: none;
            color: #ffdd57;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .syllabus-card a:hover {
            color: #ff9900;
        }
        .materials {
            display: none;
        }
        .materials.active {
            display: grid;
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
            <li><a href="important_notifications.php">Important Notifications</a></li>
            <li><a href="syllabus.php">Syllabus</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>

<div class="content">
    <h2>Study Materials</h2>

    <div class="tab-buttons">
        <button id="highSchoolBtn" class="active">High School Syllabus (6th to 10th)</button>
        <button id="secondarySchoolBtn">Secondary School Syllabus (11th & 12th)</button>
    </div>

    <!-- High School Syllabus (6th to 10th) -->
    <div id="highSchool" class="materials active">
        <div class="card-container">
            <!-- Card for 6th to 10th Standard -->

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>6th Standard - English</h5>
                <a href="data/6/6engt1.pdf" target="_blank">Download</a>
</div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>6th Standard - Tamil</h5>
                <a href="data/6/6tamt1.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>6th Standard - Mathematics</h5>
                <a href="data/6/6matt1.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>6th Standard - Science</h5>
                <a href="data/6/6scit1.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>6th Standard - Social Science</h5>
                <a href="data/6/6sst1.pdf" target="_blank">Download</a>
            </div>

<!--- -->
<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>7th Standard - English</h5>
                <a href="data/7/7engt1.pdf" target="_blank">Download</a>
</div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>7th Standard - Tamil</h5>
                <a href="data/7/7tamt1.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>7th Standard - Mathematics</h5>
                <a href="data/7/7matt1.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>7th Standard - Science</h5>
                <a href="data/7/7scit1.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>7th Standard - Social Science</h5>
                <a href="data/7/7sst1.pdf" target="_blank">Download</a>
            </div>
<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>8th Standard - English</h5>
                <a href="data/8/8eng.pdf" target="_blank">Download</a>
</div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>8th Standard - Tamil</h5>
                <a href="data/8/8tam.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>8th Standard - Mathematics</h5>
                <a href="data/8/8mat.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>8th Standard - Science</h5>
                <a href="data/8/8sci.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>8th Standard - Social Science</h5>
                <a href="data/8/8ss.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>9th Standard - English</h5>
                <a href="data/9/9eng.pdf" target="_blank">Download</a>
</div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>9th Standard - Tamil</h5>
                <a href="data/9/9tam.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>9th Standard - Mathematics</h5>
                <a href="data/9/9mat.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>9th Standard - Science</h5>
                <a href="data/9/9sci.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>9th Standard - Social Science</h5>
                <a href="data/9/9ss.pdf" target="_blank">Download</a>
            </div>
<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>10th Standard - English</h5>
                <a href="data/10/10eng.pdf" target="_blank">Download</a>
</div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>10th Standard - Tamil</h5>
                <a href="data/10/10tam.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>10th Standard - Mathematics</h5>
                <a href="data/10/10mat.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>10th Standard - Science</h5>
                <a href="data/10/10sci.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>10th Standard - Social Science</h5>
                <a href="data/10/10ss.pdf" target="_blank">Download</a>
            </div>




            
<!-- Add more cards for other syllabus like this -->
        </div>
    </div>

    <!-- Secondary School Syllabus (11th and 12th) -->
    <div id="secondarySchool" class="materials">
        <div class="card-container">
            <!-- Card for 11th and 12th Standard -->
           <div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>11th Standard - English</h5>
                <a href="data/11/11eng.pdf" target="_blank">Download</a>
</div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>11th Standard - Tamil</h5>
                <a href="data/11/11tam.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>11th Standard - Mathematics</h5>
                <a href="data/11/11mat.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>11th Standard - Physics</h5>
                <a href="data/11/11phy.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>11th Standard - Chemistry</h5>
                <a href="data/11/11che.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>11th Standard - History</h5>
                <a href="data/11/11his.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>11th Standard - Geography</h5>
                <a href="data/11/11geo.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>11th Standard - Economics</h5>
                <a href="data/11/11eco.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>11th Standard - Political Science</h5>
                <a href="data/11/11psci.pdf" target="_blank">Download</a>
            </div>
       
           <div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>12th Standard - English</h5>
                <a href="data/12/12eng.pdf" target="_blank">Download</a>
</div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>12th Standard - Tamil</h5>
                <a href="data/12/12tam.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>12th Standard - Mathematics</h5>
                <a href="data/12/12mat.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>12th Standard - Physics</h5>
                <a href="data/12/12phy.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>12th Standard - Chemistry</h5>
                <a href="data/12/12che.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>12th Standard - History</h5>
                <a href="data/12/12his.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>12th Standard - Geography</h5>
                <a href="data/12/12geo.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>12th Standard - Economics</h5>
                <a href="data/12/12eco.pdf" target="_blank">Download</a>
            </div>

<div class="syllabus-card">
                <i class="fas fa-book"></i>
                <h5>12th Standard - Political Science</h5>
                <a href="data/12/12psci.pdf" target="_blank">Download</a>
            </div>

        </div>
    </div>
</div>

<script>
    const highSchoolBtn = document.getElementById('highSchoolBtn');
    const secondarySchoolBtn = document.getElementById('secondarySchoolBtn');
    const highSchool = document.getElementById('highSchool');
    const secondarySchool = document.getElementById('secondarySchool');

    highSchoolBtn.addEventListener('click', function() {
        highSchoolBtn.classList.add('active');
        secondarySchoolBtn.classList.remove('active');
        highSchool.classList.add('active');
        secondarySchool.classList.remove('active');
    });

    secondarySchoolBtn.addEventListener('click', function() {
        secondarySchoolBtn.classList.add('active');
        highSchoolBtn.classList.remove('active');
        secondarySchool.classList.add('active');
        highSchool.classList.remove('active');
    });
</script>

</body>
</html>
