<!DOCTYPE html>
<html>
<head>
    <title>Rubah Data</title>
</head>
<body>
    <h3>Rubah Data</h3>
    <?php
    include "Koneksi.php";

    // Inisialisasi data kosong
    $data = [
        'id_mhs' => '',
        'nama_mahasiswa' => '',
        'email_mahasiswa' => ''
    ];

    // Periksa apakah parameter GET rubah_id ada
    if (isset($_GET['rubah_id'])) {
        $id = $_GET['rubah_id'];

        // Query untuk mendapatkan data mahasiswa berdasarkan id
        $sql = "SELECT * FROM mahasiswa WHERE id_mhs = '$id'";
        $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

        // Periksa apakah data ditemukan
        if (mysqli_num_rows($query) > 0) {
            $data = mysqli_fetch_array($query);
        } else {
            echo "<br>Data tidak ditemukan!";
        }
    }
    ?>
    <form action="update.php" method="POST">
        <table>
            <tr>
                <td>ID Mahasiswa</td>
                <td>:</td>
                <td>
                    <input type="text" id="idInput" name="id" value="<?php echo $data['id_mhs']; ?>" oninput="fetchData()" required>
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama_mahasiswa']; ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="mail" value="<?php echo $data['email_mahasiswa']; ?>" required></td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="edit" value="Rubah">
                    <input type="button" name="clear" value="Batal" onclick="window.history.back();">
                </td>
            </tr>
        </table>
    </form>
</body>
<script>
        function fetchData() {
            var id = document.getElementById("idInput").value;
            if (id) {
                window.location.href = 'rubah-data.php?rubah_id=' + id;
            }
        }
    </script>
</html>
