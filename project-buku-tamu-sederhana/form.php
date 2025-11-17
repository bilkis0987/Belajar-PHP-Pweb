<?php
// form.php - View untuk form tambah/edit pesan

// Parameter untuk menentukan apakah dalam mode edit atau tambah
$edit_data = $edit_data ?? null;
?>

<form method="POST" action="<?php echo $edit_data ? 'edit.php' : 'create.php'; ?>">
    <?php if ($edit_data): ?>
        <input type="hidden" name="id" value="<?php echo $edit_data['id']; ?>">
        <h2>Edit Pesan</h2>
    <?php else: ?>
        <h2>Tulis Pesan Baru</h2>
    <?php endif; ?>

    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $edit_data ? htmlspecialchars($edit_data['nama']) : ''; ?>" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $edit_data ? htmlspecialchars($edit_data['email']) : ''; ?>">
    </div>

    <div class="form-group">
        <label for="pesan">Pesan:</label>
        <textarea id="pesan" name="pesan" placeholder="Tulis pesan Anda di sini..." required><?php echo $edit_data ? htmlspecialchars($edit_data['pesan']) : ''; ?></textarea>
    </div>

    <?php if ($edit_data): ?>
        <button type="submit">Perbarui Pesan</button>
        <a href="index.php" class="btn-cancel">Batal</a>
    <?php else: ?>
        <button type="submit">Kirim Pesan</button>
    <?php endif; ?>
</form>