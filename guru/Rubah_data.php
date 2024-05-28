<html>
<head>
    <title>Rubah Data</title>
</head>
<body>
    <h3>Rubah Data</h3>

    <?php
        include "koneksi.php";

        $ide = $_GET["rubah_id"]; // Correct syntax for $_GET

        $sql = "SELECT * FROM guru WHERE id_guru=$ide";
        $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

        if(mysqli_num_rows($query) > 0) {
            $data = mysqli_fetch_array($query);
        }
    ?>
    <form action="update.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $data["id_guru"]; ?>">

    <table>
        <tr>
            <td>Nama Guru</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $data["nama_guru"]; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="jenis" value="Laki-Laki" <?php if($data["jenis_kelamin"] == 'Laki-Laki') echo 'checked'; ?>> Laki-Laki
                <input type="radio" name="jenis" value="Perempuan" <?php if($data["jenis_kelamin"] == 'Perempuan') echo 'checked'; ?>> Perempuan
            </td>
        </tr>
        <tr>
            <td>Mata Pelajaran</td>
            <td>:</td>
            <td><input type="text" name="mapel" value="<?php echo $data["mapel"]; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="Edit" value="RUBAH">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>
