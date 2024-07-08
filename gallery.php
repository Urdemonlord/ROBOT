<?php
include 'session_check.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jelajahi Galeri Proyek Robotika</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Menautkan file CSS terpisah -->
</head>
<body>
    <header>
        <h1>Galeri Proyek Robotika</h1>
        <a href="index.php" class="buttons-container">Home</a>
        <a href="add.html" class="update-link">+</a> <!-- Tautan "Kirim Proyek Baru" di sebelah kanan header -->
    </header>   

    <div class="gallery">
        <div class="gallery-item">
            <img src="gambar 1.jpeg" alt="Proyek 1">
            <div class="description">Deskripsi Proyek 1</div> <!-- Deskripsi untuk Proyek 1 -->
        </div>
        <div class="gallery-item">
            <img src="gambar 2.jpeg" alt="Proyek 2">
            <div class="description">Deskripsi Proyek 2</div> <!-- Deskripsi untuk Proyek 2 -->
        </div>
        <div class="gallery-item">
            <img src="gambar 3.jpeg" alt="Proyek 3">
            <div class="description">Deskripsi Proyek 3</div> <!-- Deskripsi untuk Proyek 3 -->
        </div>
        <div class="gallery-item">
            <img src="gambar 4.jpeg" alt="Proyek 4">
            <div class="description">Deskripsi Proyek 4</div> <!-- Deskripsi untuk Proyek 4 -->
        </div>
        <div class="gallery-item">
            <img src="gambar 5.jpg" alt="Proyek 5">
            <div class="description">Deskripsi Proyek 5</div> <!-- Deskripsi untuk Proyek 5 -->
        </div>
        <div class="gallery-item">
            <img src="gambar 6.jpg" alt="Proyek 6">
            <div class="description">Deskripsi Proyek 6</div> <!-- Deskripsi untuk Proyek 6 -->
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Galeri Proyek Robotika. Hak cipta dilindungi.</p>
    </footer>
</body>
</html>
