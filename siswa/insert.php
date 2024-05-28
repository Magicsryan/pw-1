<?php
include "koneksi.php";

// Mengambil data dari form
$nm = $_POST['nama'];
$email = $_POST['mail'];

// Set timezone
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');

// Query untuk memasukkan data ke tabel MAHASISWA
$sql = "INSERT INTO mahasiswa (nama_mahasiswa, email_mahasiswa, tanggal) VALUES ('$nm', '$email', '$tanggal')";
$query = mysqli_query($koneksi, $sql);

// Memeriksa apakah query berhasil dijalankan
if ($query) {
    echo "Data berhasil di insert!";
    header('Location: tampil-data.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>
