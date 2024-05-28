<?php
include "koneksi.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nm = $_POST['nama_guru'];
    $jenis = $_POST['jenis_kelamin'];
    $mp = $_POST['mapel'];

    // Set timezone
    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date('Y-m-d');

    // Query untuk memasukkan data ke tabel GURU
    $sql = "INSERT INTO guru (nama_guru, jenis_kelamin, mapel, tgl_masuk) VALUES ('$nm', '$jenis', '$mp', '$tanggal')";
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
} else {
    echo "Form not submitted properly.";
}
?>
