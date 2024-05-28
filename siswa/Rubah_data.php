<html>
<head>
    <title>Rubah Data</title>
</head>
<body>
    <h3>Rubah Data</h3>

    <?php
        include "koneksi.php";

        $ide = $_GET("rubah_id");

        $sql = "SELECT * FROM mahasiswa WHERE id_mhs=$ide";
        $query = mysqli_query($koneksi, $sql) or die (mysqli_error());

        if(mysqli_num_rows($query) > 0) {
            $data=mysqli_fetch_array($query);
        }
    ?>
    <form action="update.php" method = "POST">

    <input name="id" value="<?php echo $date["id_mhs"];?>">

    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $data["nama_mahasiswa"];?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="mail" value="<?php echo $data["email_mahasiswa"];?>"></td>
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