<!DOCTYPE html>
<html>
<head>
    <title>Rubah Data</title>
</head>
<body>
    <h3>Rubah Data</h3>
    <?php
    include "koneksi.php";

    // Inisialisasi data kosong
    $data = [
        'id_guru' => '',
        'jenis_kelamin' => '',
        'mapel' => ''
    ];

    // Periksa apakah parameter GET rubah_id ada
    if (isset($_GET['rubah_id'])) {
        $id = $_GET['rubah_id'];

        // Query untuk mendapatkan data mahasiswa berdasarkan id
        $sql = "SELECT * FROM guru WHERE id_guru = '$id'";
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
                <td>ID Guru</td>
                <td>:</td>
                <td>
                    <input type="text" id="idInput" name="id" value="<?php echo $data['id_guru']; ?>" oninput="fetchData()" required>
                </td>
            </tr>
            <tr>
                <td>Nama Guru</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama_guru']; ?>" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jenis" value="<?php echo $data['jenis_kelamin']; ?>" required></td>
            </tr>
            <tr>
                <td>Mata Pelajaran</td>
                <td>:</td>
                <td><input type="text" name="mapel" value="<?php echo $data['mapel']; ?>" required></td>
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
