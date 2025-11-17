<?php
// edit.php - Handle edit operation
include 'config.php';
include 'model.php';

$model = new BukuTamuModel($pdo);

// Menangani form submission untuk update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    if ($model->updatePesan($id, $nama, $email, $pesan)) {
        $success = "Pesan berhasil diperbarui!";
    } else {
        $error = "Terjadi kesalahan saat memperbarui pesan.";
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