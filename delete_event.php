<?php
include 'config.php';

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['id'])) {
    echo json_encode(['success' => false, 'message' => 'Missing event ID']);
    exit;
}

$id = (int)$data['id'];

$sql = "DELETE FROM events WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Event deleted successfully']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error deleting event: ' . $stmt->error]);
}

$stmt->close();
$conn->close();