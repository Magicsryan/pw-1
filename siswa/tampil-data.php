<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data</title>
</head>
<body>
    <a href="tambah-data.php">Tambah Data</a>
    <h3>Tampil Data</h3>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Email Mahasiswa</th>
                <th>Tanggal</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "Koneksi.php";
            $sql = "SELECT * FROM mahasiswa ORDER BY id_mhs ASC";
            $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
                $id = $data['id_mhs'];
                $nm = $data['nama_mahasiswa'];
                $email = $data['email_mahasiswa'];
                $tgl = $data['tanggal'];
                echo "<tr>
                        <td>$no</td>
                        <td>$nm</td>
                        <td>$email</td>
                        <td>$tgl</td>
                        <td><a href='rubah-data.php?rubah_id=$id'>Rubah</a></td>
                        <td><a href='hapus-data.php?hapus_id=$id'>Hapus</a></td>
                      </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>
