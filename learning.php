<?php
include 'session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Robotics</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            max-width: 600px;
            margin: 20px auto 0;
        }
        h1 {
            color: #ffffff;
            margin-bottom: 10px;
        }
        p {
            color: #666;
            margin-bottom: 20px;
        }
        .tutorial {
            border-top: 1px solid #ccc;
            padding-top: 20px;
            margin-top: 20px;
        }
        .tutorial h2 {
            color: #333;
            margin-bottom: 10px;
        }
        .tutorial p {
            color: #666;
            margin-bottom: 20px;
        }
        .tutorial a {
            color: #007bff;
            text-decoration: none;
        }
        .tutorial a:hover {
            text-decoration: underline;
        }
        .home-link {
            float: left;
            margin-right: 20px;
            margin-top: -15px;
        }
        footer {
            margin-top: 50px;
            text-align: center;
            color: #666;
            position: relative;
            z-index: 1;
            /* Menempatkan footer di atas konten */
        }

        footer a {
            color: #333;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Tambahkan gaya untuk kotak Kirim Proyek Baru */
        .update-link {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            z-index: 2;
            /* Menempatkan link di atas header */
        }

        .update-link:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Learning Robotics</h1>
        <a href="index.php" class="home-link">Home</a>
        <a href="add.html" class="update-link">+</a>
    </header>
    <div class="content">
        <div class="tutorial">
            <h2>Tutorial 1: Introduction to Robotics</h2>
            <p>Explore the basics of robotics and understand the fundamental concepts.</p>
            <a href="#">Read More</a>
        </div>

        <div class="tutorial">
            <h2>Tutorial 2: Robot Design and Mechanics</h2>
            <p>Learn about the design principles and mechanical components used in robotics.</p>
            <a href="#">Read More</a>
        </div>

        <div class="tutorial">
            <h2>Tutorial 3: Programming Robots</h2>
            <p>Discover the programming languages and techniques used to control robots.</p>
            <a href="#">Read More</a>
        </div>
    </div>
</body>
</html>

