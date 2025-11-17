<?php
// model.php - File untuk mengelola operasi database

include 'config.php';

class BukuTamuModel {
    private $pdo;
    
    public function __construct($database_connection) {
        $this->pdo = $database_connection;
    }
    
    // Fungsi untuk mendapatkan semua pesan
    public function getAllPesan() {
        $sql = "SELECT * FROM buku_tamu ORDER BY tanggal DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    // Fungsi untuk mendapatkan pesan berdasarkan ID
    public function getPesanById($id) {
        $sql = "SELECT * FROM buku_tamu WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    // Fungsi untuk menambah pesan baru
    public function tambahPesan($nama, $email, $pesan) {
        $sql = "INSERT INTO buku_tamu (nama, email, pesan) VALUES (:nama, :email, :pesan)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pesan', $pesan);
        return $stmt->execute();
    }
    
    // Fungsi untuk memperbarui pesan
    public function updatePesan($id, $nama, $email, $pesan) {
        $sql = "UPDATE buku_tamu SET nama = :nama, email = :email, pesan = :pesan WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pesan', $pesan);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    
    // Fungsi untuk menghapus pesan
    public function hapusPesan($id) {
        $sql = "DELETE FROM buku_tamu WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>