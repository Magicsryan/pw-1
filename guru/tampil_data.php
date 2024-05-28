<html>
<head>
    <title> tampil data </title>
</head>
<body>
    <a href="tambah_data.php">tambah data <a>
    <h3>tampil data</h3>
    
    <table border="1">
        <thead>
            <th>No</th>
            <th>Nama Guru</th>
            <th>Jenis Kelamiin</th>
            <th>Mata Pelajaran</th>
            <th>Tanggal Masuk</th>
            <th colspan="2">Aksi</th>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            
            //query sql
            $sql="SELECT* FROM guru ORDER BY id_guru ASC";
            $query=mysqli_query($koneksi,sql) or die (mysqli_error ());

            $no =1; //no.urut
            while ($data= mysqli_fetch_array($query)){
                $id=$data["id_guru"];
                $nm=$data["nama_guru"];
                $id=$data["mapel"];
                $id=$data["tgl_masuk"];
            
            echo "<tr>
                  <td>$no<td>
                  <td>$nm<td>
                  <td>$jenis<td>
                  <td>$mp<td>
                  <td>$tanggal<td>
                  <td>
                  <a href='rubah_data.php?rubah_id=$id'>
                  rubah </a>
                  <a href='hapus_data.php?hapus_id=$id'>
                  hapus </a>
                  <td>
                  </tr>;"

                  $no++;
        } 
?>
</tbody>
</table>
</body>
</html>

