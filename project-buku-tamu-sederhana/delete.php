<?php
// delete.php - Handle delete operation
include 'config.php';
include 'model.php';

$model = new BukuTamuModel($pdo);

// Menangani delete
if (!empty($_GET['id']) || !empty($_POST['id'])) {
    $id = !empty($_GET['id']) ? $_GET['id'] : $_POST['id'];
    
    if ($model->hapusPesan($id)) {
        $success = "Pesan berhasil dihapus!";
    } else {
        $error = "Terjadi kesalahan saat menghapus pesan.";
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