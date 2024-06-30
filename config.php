<?php
$servername = "localhost";
$username = "root";
$password = "123"; // Ganti dengan password MySQL Anda
$dbname = "robotenthusiastscommunity";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($stmt->execute()) {
    header("Location: login.php"); // Redirect to login page after successful registration
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
