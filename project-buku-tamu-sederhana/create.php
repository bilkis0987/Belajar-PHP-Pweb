<?php
// create.php - Handle create operation
include 'config.php';
include 'model.php';

$model = new BukuTamuModel($pdo);

// Menangani form submission untuk create
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    if ($model->tambahPesan($nama, $email, $pesan)) {
        $success = "Pesan berhasil ditambahkan!";
    } else {
        $error = "Terjadi kesalahan saat menyimpan pesan.";
    }
}

// Redirect ke index.php dengan pesan
$redirect_url = "index.php";
if (isset($success)) {
    $redirect_url .= "?success=" . urlencode($success);
} elseif (isset($error)) {
    $redirect_url .= "?error=" . urlencode($error);
}

header("Location: $redirect_url");
exit();
?>