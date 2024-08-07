<?php
include 'session_check.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member and Alumni Profiles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            min-height: 100vh;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
            /* Menempatkan header di atas konten */
        }
        .home-link {
            float: left;
            margin-right: 20px;
            margin-top: -15px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
            position: relative;
            z-index: 0;
            /* Menempatkan konten di bawah header */
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
            color: #ffffff;
        }

        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }

        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }

        .profile-info {
            flex: 1;
            padding: 10px;
            text-align: left;
            justify-content: flex-start;
        }

        .profile h2 {
            margin: 5px 0;
        }

        .profile p {
            margin: 5px 0;
        }

        input[type="text"] {
            width: 30%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Menandai alumni */
        .profile.alumni h2::after {
            content: " (Alumni)";
            color: gold;
            font-size: 12px;
            margin-top: -10px;
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
        <h1>Member and Alumni Profiles</h1>
        <a href="index.php" class="home-link">Home</a>
        <a href="add.html" class="update-link">+</a> <!-- Tautan "Kirim Proyek Baru" di sebelah kanan header -->
    </header>
    <div class="container">
        <input type="text" id="search" onkeyup="searchProfiles()" placeholder="Search profiles...">

        <div id="profiles">
            <div class="profile member">
                <img src="profile1.jpg" alt="Profile Picture">
                <div class="profile-info">
                    <h2>John Doe</h2>
                    <p>Joined: 2020</p>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <!-- Add more member profiles as needed -->
            <div class="profile alumni">
                <img src="profile2.jpg" alt="Profile Picture">
                <div class="profile-info">
                    <h2>Jane Smith</h2>
                    <p>Joined: 2018</p>
                    <p>Description: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <!-- Add more alumni profiles as needed -->
        </div>
    </div>

    <script>
        function searchProfiles() {
            var input, filter, profiles, profile, name, i;
            input = document.getElementById('search');
            filter = input.value.toUpperCase();
            profiles = document.getElementById("profiles").getElementsByClassName('profile');
            for (i = 0; i < profiles.length; i++) {
                profile = profiles[i];
                name = profile.querySelector("h2").innerText.toUpperCase();
                if (name.indexOf(filter) > -1) {
                    profile.style.display = "";
                } else {
                    profile.style.display = "none";
                }
            }
        }
    </script>
</body>

</html>