<?php
include 'session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion Forum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #ffffff;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .post {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
        }
        .post h2 {
            margin-top: 0;
        }
        .comments {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }
        .comment {
            border-bottom: 1px solid #ccc;
            margin-bottom: 10px;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Discussion Forum</h1>
        <a href="index.php" class="buttons-container">Home</a>
    </header>
    <div class="container">
        <h2>Add a Discussion</h2>
        <form id="discussionForm">
            <textarea id="discussionText" rows="4" cols="50" placeholder="Write your discussion here..."></textarea><br>
            <button type="submit">Submit</button>
        </form>
        <h2>Posts about Robots</h2>
        <div class="post">
            <h2>Robotics Advancements</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend, nisl nec aliquet varius, ligula
                lorem suscipit neque, vel ultrices velit velit non nulla.</p>
            <div class="comments">
                <div class="comment">
                    <p>User1: I agree! Robotics is the future.</p>
                </div>
                <div class="comment">
                    <p>User2: What are some recent breakthroughs?</p>
                </div>
            </div>
        </div>
        <div class="post">
            <h2>Robotics Advancements</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eleifend, nisl nec aliquet varius, ligula
                lorem suscipit neque, vel ultrices velit velit non nulla.</p>
            <div class="comments">
                <div class="comment">
                    <p>User1: I agree! Robotics is the future.</p>
                </div>
                <div class="comment">
                    <p>User2: What are some recent breakthroughs?</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('discussionForm').addEventListener('submit', function (event) {
            event.preventDefault();
            var discussionText = document.getElementById('discussionText').value;
            var post = document.createElement('div');
            post.className = 'post';
            post.innerHTML = '<h2>New Discussion</h2><p>' + discussionText + '</p><div class="comments"></div>';
            document.body.insertBefore(post, document.querySelector('.container'));
            document.getElementById('discussionText').value = '';
        });
    </script>
</body>
</html>
