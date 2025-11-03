<?php
session_start();

// Jika user sudah login, langsung ke halaman utama
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

// Saat form dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Contoh login sederhana (username & password statis)
    if ($username == "bilkis" && $password == "321") {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Website Session</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Masuk</button>
        </form>
        <p style="font-size: 13px; color:#777;">Gunakan <b>bilkis</b> / <b>321</b></p>
    </div>
</body>
</html>
<?php