<?php
include "koneksi.php";

// Mengambil data dari form
$nm = $_POST["nama"];
$jenis = $_POST["jenis"];
$mp = $_POST["mapel"];
$id = $_POST["id"];

// Set timezone
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');

// Query untuk mengupdate data guru (not mahasiswa)
$sql = "UPDATE guru SET nama_guru = '$nm', jenis_kelamin = '$jenis', mapel = '$mp', tgl_masuk = '$tanggal' WHERE id_guru = '$id'";
$query = mysqli_query($koneksi, $sql);

// Memeriksa apakah query berhasil dijalankan
if ($query) {
    echo "Data berhasil dirubah!";
    header('Location: tampil-data.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>
