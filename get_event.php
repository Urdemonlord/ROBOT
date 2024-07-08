<?php
include 'config.php';

// Ambil ID event dari query string
$eventId = $_GET['id'];

// Query untuk mengambil detail event berdasarkan ID
$sql = "SELECT * FROM events WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $eventId);
$stmt->execute();
$result = $stmt->get_result();

// Ambil data event
if ($result->num_rows > 0) {
    $event = $result->fetch_assoc();
    // Return data event dalam format JSON
    echo json_encode($event);
} else {
    echo json_encode(null); // Jika event tidak ditemukan
}

$stmt->close();
$conn->close();
?>
