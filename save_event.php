<?php
include 'config.php';

// Ambil data event dari request JSON
$data = json_decode(file_get_contents('php://input'), true);

if (!empty($data['id'])) {
    // Update event jika ID ditemukan
    $id = $data['id'];
    $title = $data['title'];
    $description = $data['description'];
    $date = $data['date'];

    $sql = "UPDATE events SET title = ?, description = ?, date = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssi', $title, $description, $date, $id);
} else {
    // Tambah event baru jika tidak ada ID
    $title = $data['title'];
    $description = $data['description'];
    $date = $data['date'];

    $sql = "INSERT INTO events (title, description, date) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $title, $description, $date);
}

// Eksekusi statement SQL
if ($stmt->execute()) {
    echo 'Event saved successfully';
} else {
    echo 'Error saving event: ' . $stmt->error;
}

$stmt->close();
$conn->close();
?>
