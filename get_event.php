<?php
// get_event.php

// Include config file
require_once 'config.php';

// Set proper header to indicate the content type is JSON
header('Content-Type: application/json');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(array("success" => false, "message" => "Connection failed: " . $conn->connect_error)));
}

// Check if the ID parameter is set
if (!isset($_GET['id'])) {
    echo json_encode(array("success" => false, "message" => "Event ID not provided"));
    exit();
}

// Get the event ID from the URL
$eventId = intval($_GET['id']);

// Prepare the SQL statement to prevent SQL injection
$stmt = $conn->prepare("SELECT id, name, description, date, location FROM events WHERE id = ?");
$stmt->bind_param("i", $eventId);

// Execute the statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Check if the event exists
if ($result->num_rows > 0) {
    // Fetch the event data
    $event = $result->fetch_assoc();
    echo json_encode(array("success" => true, "event" => $event));
} else {
    echo json_encode(array("success" => false, "message" => "Event not found"));
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
