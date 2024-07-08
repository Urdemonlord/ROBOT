<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Enthusiasts Community</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.5/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <header>
        <div class="header-content">
            <img src="ambatron.png" alt="Logo" class="logo">
            <h1 class="title">Welcome to the Robot Enthusiasts Community</h1>
            <div class="user-info">
                <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
                <a href="logout.php" class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Logout</a>
            </div>
        </div>
    </header>

    <main>
        <div class="carousel w-full">
            <div id="item1" class="carousel-item w-full h-96">
                <div>
                    <h2 class="text-3xl font-bold">Learning Robotics</h2>
                    <p class="mb-5">Learn about the latest developments in robotics technology and how to build your own robots.</p>
                    <a class="bg-black text-white py-3 px-3" href="learning.html">Learn More</a>
                </div>
                
            </div> 
            <div id="item2" class="carousel-item w-full">
               <div>
                <h2 class="text-3xl font-bold">Discussion Forum</h2>
                <p class="mb-5">Join the community and discuss all things robotics with other enthusiasts.</p>
                <a class="bg-black text-white py-3 px-3" href="forum.html">Join the Discussion</a>
               </div>
            </div> 
            <div id="item3" class="carousel-item w-full">
              <div class="">
                <h2 class="text-3xl font-bold">Events and Competitions</h2>
                <p class="mb-5">Find out about upcoming robotics events and competitions in your area.</p>
                <a class="bg-black text-white py-3 px-3" href="events.html">View Events</a>
              </div>
            </div> 
            <div id="item4" class="carousel-item w-full">
            <div class="">
                <h2 class="text-3xl font-bold">Project Gallery</h2>
                <p class="mb-5">Explore a gallery of robotics projects and get inspired to build your own.</p>
                <a class="bg-black text-white py-3 px-3" href="gallery.html">View Gallery</a>                </div>
          </div> 
          <div id="item5" class="carousel-item w-full">
            <div class="">
                <h2 class="text-3xl font-bold">Online Component Store</h2>
                <p class="mb-5">Shop for robotics components and build your own robots.</p>
                <a class="bg-black text-white py-3 px-3" href="store.html">Shop Now</a>
            </div>
          </div> 
          <div id="item6" class="carousel-item w-full">
            <div class="">
                <h2 class="text-3xl font-bold">Training and Workshop Schedules</h2>
                <p class="mb-5">Check the schedule for upcoming training and workshop sessions.</p>
                <a class="bg-black text-white py-3 px-3" href="schedule.html">View Schedule</a>
            </div>
          </div> 
          <div id="item7" class="carousel-item w-full">
            <div class="">
                <h2 class="text-3xl font-bold">Member and Alumni Profiles</h2>
                <p class="mb-5">View profiles of current members and alumni of the robotics community.</p>
                <a class="bg-black text-white py-3 px-3" href="profiles.html">View Profiles</a>
            </div>
          </div> 
          <div id="item8" class="carousel-item w-full">
            <div class="">
                <h2 class="text-3xl font-bold">Blog and Tips</h2>
                <p class="mb-5">Read the latest blog posts and tips from the robotics community.</p>
                <a class="bg-black text-white py-3 px-3" href="blog.html">Read Blog</a>
            </div>
          </div> 
          </div>
          <div class="flex justify-center w-full py-2 gap-2">
          <a class="bg-black text-white py-3 px-3" href="learning.php">Learn More</a>
<a class="bg-black text-white py-3 px-3" href="forum.php">Join the Discussion</a>
<a class="bg-black text-white py-3 px-3" href="events.php">View Events</a>
<a class="bg-black text-white py-3 px-3" href="gallery.php">View Gallery</a>
<a class="bg-black text-white py-3 px-3" href="store.php">Shop Now</a>
<a class="bg-black text-white py-3 px-3" href="schedule.php">View Schedule</a>
<a class="bg-black text-white py-3 px-3" href="profiles.php">View Profiles</a>
<a class="bg-black text-white py-3 px-3" href="blog.php">Read Blog</a>

        </div>
    </main>
    
    <footer>
        <p>Copyright © 2024 Robot Enthusiasts Community</p>
    </footer>
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
