<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Halaman Utama</h2>
        <p class="welcome">Selamat datang, <strong><?= $_SESSION['username'] ?></strong> 👋</p>
        <p>Ini adalah halaman utama website session sederhana.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
