<?php
include 'config.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['id']) || !isset($data['name']) || !isset($data['description']) || !isset($data['date']) || !isset($data['location'])) {
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit;
}

$id = (int)$data['id'];
$name = $conn->real_escape_string($data['name']);
$description = $conn->real_escape_string($data['description']);
$date = $conn->real_escape_string($data['date']);
$location = $conn->real_escape_string($data['location']);

$sql = "UPDATE events SET name = ?, description = ?, date = ?, location = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi", $name, $description, $date, $location, $id);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Event updated successfully']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error updating event: ' . $stmt->error]);
}

$stmt->close();
$conn->close();