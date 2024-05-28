<?php
include "Koneksi.php";

// Mengambil id dari parameter GET
$id = $_GET['hapus_id'];

// Query untuk menghapus data mahasiswa
$sql = "DELETE FROM mahasiswa WHERE id_mhs = '$id'";
$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

// Memeriksa apakah query berhasil dijalankan
if ($query) {
    echo "Data berhasil dihapus!";
    header('Location: tampil-data.php');
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>
