<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Materials - Dream Career</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            background-color: #0056b3;
            color: white;
            padding: 15px;
            text-align: center;
        }
        header img {
            width: 50px;
            height: 50px;
            vertical-align: middle;
            margin-right: 10px;
        }
        header h1 {
            display: inline-block;
            vertical-align: middle;
        }
        nav {
            background-color: #333;
            overflow: hidden;
        }
        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        .content {
            padding: 20px;
        }
        h2 {
            color: #0056b3;
            margin-bottom: 10px;
        }
        .materials {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .materials div {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            width: calc(33.333% - 40px);
            box-sizing: border-box;
        }
        .materials div h3 {
            margin-bottom: 15px;
            color: #333;
        }
        .materials div ul {
            list-style-type: none;
            padding: 0;
        }
        .materials div ul li {
            margin-bottom: 10px;
        }
        .materials div ul li a {
            text-decoration: none;
            color: #0056b3;
            transition: color 0.3s ease;
        }
        .materials div ul li a:hover {
            color: #003d7a;
        }
    </style>
</head>
<body>

<header>
    <img src="logo.jpeg" alt="Dream Career Logo">
    <h1>Dream Career</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="materials.php">Materials</a>
    <a href="about.php">About Us</a>
    <a href="contact.php">Contact</a>
</nav>

<div class="content">
    <h2>Study Materials</h2>
    
    <div class="materials">
        <!-- 6th Standard -->
        <div>
            <h3>6th Standard</h3>
            <ul>
		<li><a href="data\6\6engt1.pdf" target="_blank">English</a></li>
		<li><a href="data\6\6tamt1.pdf" target="_blank">Tamil</a></li>
                <li><a href="data\6\6scit1.pdf" target="_blank">Science</a></li>
                <li><a href="data\6\6matt1.pdf" target="_blank">Mathematics</a></li>
                <li><a href="data\6\6sst1.pdf" target="_blank">Social Studies</a></li>
            </ul>
        </div>

        <!-- 7th Standard -->
        <div>
            <h3>7th Standard</h3>
            <ul>
               <li><a href="data\7\7engt1.pdf" target="_blank">English</a></li>
		<li><a href="data\7\7tamt1.pdf" target="_blank">Tamil</a></li>
                <li><a href="data\7\7scit1.pdf" target="_blank">Science</a></li>
                <li><a href="data\7\7matt1.pdf" target="_blank">Mathematics</a></li>
                <li><a href="data\7\7sst1.pdf" target="_blank">Social Studies</a></li>
            </ul>
        </div>

        <!-- 8th Standard -->
        <div>
            <h3>8th Standard</h3>
            <ul>
                <li><a href="data\8\8eng.pdf" target="_blank">English</a></li>
		<li><a href="data\8\8tam.pdf" target="_blank">Tamil</a></li>
                <li><a href="data\8\8sci.pdf" target="_blank">Science</a></li>
                <li><a href="data\8\8mat.pdf" target="_blank">Mathematics</a></li>
                <li><a href="data\8\8ss.pdf" target="_blank">Social Studies</a></li>
            </ul>
        </div>

        <!-- 9th Standard -->
        <div>
            <h3>9th Standard</h3>
            <ul>
                 <li><a href="data\9\9eng.pdf" target="_blank">English</a></li>
		<li><a href="data\9\9tam.pdf" target="_blank">Tamil</a></li>
                <li><a href="data\9\9sci.pdf" target="_blank">Science</a></li>
                <li><a href="data\9\9mat.pdf" target="_blank">Mathematics</a></li>
                <li><a href="data\9\9ss.pdf" target="_blank">Social Studies</a></li>
            </ul>
        </div>

        <!-- 10th Standard -->
        <div>
            <h3>10th Standard</h3>
            <ul>
                <li><a href="data\10\10eng.pdf" target="_blank">English</a></li>
		<li><a href="data\10\10tam.pdf" target="_blank">Tamil</a></li>
                <li><a href="data\10\10sci.pdf" target="_blank">Science</a></li>
                <li><a href="data\10\10mat.pdf" target="_blank">Mathematics</a></li>
                <li><a href="data\10\10ss.pdf" target="_blank">Social Studies</a></li>
            </ul>
        </div>

        <!-- 11th Standard -->
        <div>
            <h3>11th Standard</h3>
            <ul>
                <li><a href="data\11\11eng.pdf" target="_blank">English</a></li>
                <li><a href="data\11\11tam.pdf" target="_blank">Tamil</a></li>
		<li><a href="data\11\11mat.pdf" target="_blank">Mathematics</a></li>
		<li><a href="data\11\11che.pdf" target="_blank">Chemistry</a></li>
		<li><a href="data\11\11phy.pdf" target="_blank">Physics</a></li>
		<li><a href="data\11\11his.pdf" target="_blank">History</a></li>
		<li><a href="data\11\11geo.pdf" target="_blank">Geography</a></li>
		<li><a href="data\11\11eco.pdf" target="_blank">Economy</a></li>
		<li><a href="data\11\11psci.pdf" target="_blank">Political Science</a></li>
            </ul>
        </div>

        <!-- 12th Standard -->
        <div>
            <h3>12th Standard</h3>
            <ul>
                <li><a href="data\12\12eng.pdf" target="_blank">English</a></li>
                <li><a href="data\12\12tam.pdf" target="_blank">Tamil</a></li>
		<li><a href="data\12\12mat.pdf" target="_blank">Mathematics</a></li>
		<li><a href="data\12\12che.pdf" target="_blank">Chemistry</a></li>
		<li><a href="data\12\12phy.pdf" target="_blank">Physics</a></li>
		<li><a href="data\12\12his.pdf" target="_blank">History</a></li>
		<li><a href="data\12\12geo.pdf" target="_blank">Geography</a></li>
		<li><a href="data\12\12eco.pdf" target="_blank">Economy</a></li>
		<li><a href="data\12\12psci.pdf" target="_blank">Political Science</a></li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>
