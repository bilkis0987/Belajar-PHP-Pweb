-- Database: buku_tamu
CREATE DATABASE IF NOT EXISTS buku_tamu;
USE buku_tamu;

-- Table structure for table buku_tamu
CREATE TABLE IF NOT EXISTS buku_tamu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    pesan TEXT NOT NULL,
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Sample data
INSERT INTO buku_tamu (nama, email, pesan) VALUES
('Bilkis', 'bilkis@gmail.com', 'Ini adalah contoh pesan pertama di buku tamu.'),
('piko', 'piko@gmail.com', 'Halo semua, senang bisa berkunjung ke sini!'),
('sani', 'sani@gmail.com', 'Terima kasih atas informasinya, sangat bermanfaat.');