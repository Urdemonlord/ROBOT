<?php
include 'config.php';

// Ambil ID event dari request POST
$eventId = $_POST['id'];

// Query untuk menghapus event berdasarkan ID
$sql = "DELETE FROM events WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $eventId);

// Eksekusi statement SQL
if ($stmt->execute()) {
    echo 'Event deleted successfully';
} else {
    echo 'Error deleting event: ' . $stmt->error;
}

$stmt->close();
$conn->close();
?>
