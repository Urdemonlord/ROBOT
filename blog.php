<?php
include 'session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog and Tips</title>
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
            margin-bottom: 20px;
        }
        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            color: #ffffff;
            margin-bottom: 10px;
        }
        p {
            color: #666;
            margin-bottom: 20px;
        }
        .post {
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .post h2 {
            color: #333;
            margin-bottom: 10px;
        }
        .post p {
            color: #666;
            margin-bottom: 20px;
        }
        .post video {
            width: 100%;
            border-radius: 5px;
        }
        .post iframe {
            width: 100%;
            border: none;
            border-radius: 5px;
        }
        .post .content {
            margin-top: 10px;
        }
        .post .content p {
            margin-bottom: 10px;
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
        <h1>Blog and Tips</h1>
        <a href="index.php" class="home-link">Home</a>
        <a href="add.html" class="update-link">+</a>
    </header>
    <div class="content">
        <div class="post">
            <h2>How to Build a Robot Arm</h2>
            <video controls>
                <source src="robot_arm.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="content">
                <p>Learn step-by-step how to build your own robot arm using common materials.</p>
                <p>Posted by: RoboticsEnthusiast | Date: May 1, 2024</p>
            </div>
        </div>

        <div class="post">
            <h2>Top 10 Tips for Programming Robots</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen></iframe>
            <div class="content">
                <p>Discover essential tips for programming robots efficiently and effectively.</p>
                <p>Posted by: RoboPro | Date: April 25, 2024</p>
            </div>
        </div>

        <!-- Add more posts as needed -->
    </div>
</body>
</html>
