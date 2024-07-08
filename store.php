<?php
include 'session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Component Store for Robotics</title>
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
            padding: 20px 0;
            text-align: center;
        }
        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
        }
        nav a:hover {
            background-color: #555;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .product {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 20px;
            margin: 10px;
            width: 300px;
        }
        .product img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Component Store</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="#">Components</a>
        <a href="#">Build Your Robot</a>
        <a href="#">Contact</a>
    </nav>
    <div class="container">
        <div class="product">
            <img src="robot_part1.jpg" alt="Robot Part 1">
            <h2>Robot Part 1</h2>
            <p>Description of the robot part. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Price: $XX.XX</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="robot_part2.jpg" alt="Robot Part 2">
            <h2>Robot Part 2</h2>
            <p>Description of the robot part. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Price: $XX.XX</p>
            <button>Add to Cart</button>
        </div>
        <!-- Add more product divs as needed -->
    </div>
    <footer>
        <div class="container">
            <p>&copy; 2024 Online Component Store for Robotics</p>
        </div>
    </footer>
</body>
</html>
