<?php
include 'session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training and Workshop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form label {
            margin-right: 10px;
        }
        form select {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }
        form button {
            padding: 8px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
        }
        .back-link {
            position: fixed;
            top: 20px;
            left: 20px;
            font-size: 16px;
            color: #007bff;
            text-decoration: none;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <a href="index.php" class="back-link">&lt; Home</a>
    <div class="container">
        <h1>Training and Workshop</h1>
        <form id="search-form">
            <label for="month-year">Month/Year:</label>
            <select name="month-year" id="month-year">
                <option value="1/2024">January 2024</option>
                <option value="2/2024">February 2024</option>
                <option value="3/2024">March 2024</option>
                <option value="4/2024">April 2024</option>
                <option value="5/2024">May 2024</option>
                <option value="6/2024">June 2024</option>
                <option value="7/2024">July 2024</option>
                <option value="8/2024">August 2024</option>
                <option value="9/2024">September 2024</option>
                <option value="10/2024">October 2024</option>
                <option value="11/2024">November 2024</option>
                <option value="12/2024">December 2024</option>
            </select>
            <button type="submit">Search</button>
        </form>
        <div id="schedule-list">
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Event</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="visible">
                        <td>May 15, 2024</td>
                        <td>Robotics Summer Camps</td>
                        <td>Virtual</td>
                    </tr>
                    <tr class="visible">
                        <td>May 22, 2024</td>
                        <td>Robotics Conventions</td>
                        <td>City Hall Auditorium</td>
                    </tr>
                    <tr class="visible">
                        <td>June 5, 2024</td>
                        <td>Robotics Workshops</td>
                        <td>Virtual</td>
                    </tr>
                    <!-- Add more rows for additional events -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.getElementById("search-form").addEventListener("submit", function(event){
            event.preventDefault(); // Prevent default form submission
            var monthYear = document.getElementById('month-year').value;
            var month = monthYear.split('/')[0];
            var year = monthYear.split('/')[1];
            var scheduleRows = document.querySelectorAll('#schedule-list tbody tr');
            scheduleRows.forEach(function(row) {
                var date = row.querySelector('td:first-child').textContent;
                var eventDate = new Date(date);
                if (eventDate.getMonth() + 1 === parseInt(month) && eventDate.getFullYear() === parseInt(year)) {
                    row.classList.remove('hidden');
                } else {
                    row.classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>
