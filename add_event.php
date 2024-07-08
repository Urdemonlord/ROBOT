<?php
include 'config.php';

// Ambil data dari body request JSON
$data = json_decode(file_get_contents('php://input'), true);

// Escape data untuk menghindari SQL Injection
$title = $conn->real_escape_string($data['title']);
$description = $conn->real_escape_string($data['description']);
$date = $conn->real_escape_string($data['date']);

// Query untuk menyimpan event ke database
$sql = "INSERT INTO events (title, description, date) VALUES ('$title', '$description', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "Event added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
