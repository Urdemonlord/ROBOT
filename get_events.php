<?php
include 'config.php';

header('Content-Type: application/json');

$sql = "SELECT id, name, description, date, location FROM events ORDER BY date DESC";
$result = $conn->query($sql);

$events = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $events[] = [
            'id' => (int)$row['id'],
            'name' => htmlspecialchars($row['name']),
            'description' => htmlspecialchars($row['description']),
            'date' => $row['date'],
            'location' => htmlspecialchars($row['location'])
        ];
    }
}

echo json_encode(['success' => true, 'events' => $events]);

$conn->close();