<?php
// index.php - Main file for displaying all messages
include 'config.php';
include 'model.php';

$model = new BukuTamuModel($pdo);

// Jika edit action, ambil data yang akan diedit
$edit_data = null;
if (isset($_GET['action']) && $_GET['action'] == 'edit' && !empty($_GET['id'])) {
    $edit_data = $model->getPesanById($_GET['id']);
}

// Mengambil semua pesan dari database
$pesan_list = $model->getAllPesan();

// Handle messages from redirects
$success = $_GET['success'] ?? null;
$error = $_GET['error'] ?? null;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Buku Tamu Sederhana</h1>

        <?php if ($success): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="alert alert-error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <?php include 'form.php'; ?>

        <h2>Daftar Pesan</h2>
        <?php if (count($pesan_list) > 0): ?>
            <?php foreach ($pesan_list as $pesan): ?>
                <div class="pesan">
                    <div class="pengirim"><?php echo htmlspecialchars($pesan['nama']); ?></div>
                    <?php if (!empty($pesan['email'])): ?>
                        <div class="email"><?php echo htmlspecialchars($pesan['email']); ?></div>
                    <?php endif; ?>
                    <div class="tanggal"><?php echo date('d M Y H:i', strtotime($pesan['tanggal'])); ?></div>
                    <div class="isi"><?php echo nl2br(htmlspecialchars($pesan['pesan'])); ?></div>
                    <div class="pesan-actions">
                        <a href="index.php?action=edit&id=<?php echo $pesan['id']; ?>" class="edit-btn">Edit</a>
                        <a href="delete.php?id=<?php echo $pesan['id']; ?>" class="delete-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">Hapus</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Belum ada pesan di buku tamu.</p>
        <?php endif; ?>
    </div>
</body>
</html>