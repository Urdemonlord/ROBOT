<?php
include 'config.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['name']) || !isset($data['description']) || !isset($data['date']) || !isset($data['location'])) {
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit;
}

$name = $conn->real_escape_string($data['name']);
$description = $conn->real_escape_string($data['description']);
$date = $conn->real_escape_string($data['date']);
$location = $conn->real_escape_string($data['location']);

$sql = "INSERT INTO events (name, description, date, location) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $description, $date, $location);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Event added successfully', 'id' => $stmt->insert_id]);
} else {
    echo json_encode(['success' => false, 'message' => 'Error adding event: ' . $stmt->error]);
}

$stmt->close();
$conn->close();