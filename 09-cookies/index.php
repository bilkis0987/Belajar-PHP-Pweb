<?php
// Cek apakah cookie sudah ada
if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
} else {
    $username = "";
}

// Jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];

    // Simpan ke cookie selama 1 jam (3600 detik)
    setcookie("username", $username, time() + 3600);

    // Refresh halaman agar cookie langsung terbaca
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Cookie Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0054fcff;
            text-align: center;
            margin-top: 200px;
        }
        .container {
            background: white;
            display: inline-block;
            padding: 30px 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="text"] {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 8px 15px;
            border: none;
            background: #007bff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="container">
    <?php if ($username): ?>
        <h2>Selamat datang, <?php echo htmlspecialchars($username); ?>!</h2>
        <p>Cookie Anda disimpan selama 1 jam.</p>
        <a href="logout.php">Hapus Cookie</a>
    <?php else: ?>
        <h2>Masukkan Nama Anda</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Nama Anda" required>
            <button type="submit">Simpan</button>
        </form>
    <?php endif; ?>
</div>

</body>
</html>
