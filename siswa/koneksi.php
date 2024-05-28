<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbase = "db_crudku";

// Create connection
$koneksi = new mysqli($servername, $username, $password, $dbase);

// Check connection
if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
// echo "Koneksi berhasil!!!!!!";
?>