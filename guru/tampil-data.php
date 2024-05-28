<html>
<head>
    <title>Tampil Data</title>
</head>
<body>
    <a href="tambah_data.php">Tambah Data</a>
    <h3>Tampil Data</h3>
    
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>Jenis Kelamin</th>
                <th>Mata Pelajaran</th>
                <th>Tanggal Masuk</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            
            // Query SQL
            $sql = "SELECT * FROM guru ORDER BY id_guru ASC";
            $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

            $no = 1; // No. urut
            while ($data = mysqli_fetch_array($query)) {
                $id = $data["id_guru"];
                $nm = $data["nama_guru"];
                $jenis = $data["jenis_kelamin"];
                $mp = $data["mapel"];
                $tanggal = $data["tgl_masuk"];
            
                echo "<tr>
                        <td>$no</td>
                        <td>$nm</td>
                        <td>$jenis</td>
                        <td>$mp</td>
                        <td>$tanggal</td>
                        <td>
                            <a href='rubah_data.php?rubah_id=$id'>Rubah</a>
                        </td>
                        <td>
                            <a href='hapus_data.php?hapus_id=$id'>Hapus</a>
                        </td>
                      </tr>";
                $no++;
            } 
            ?>
        </tbody>
    </table>
</body>
</html>
