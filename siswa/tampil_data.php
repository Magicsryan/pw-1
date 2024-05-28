<html>
<head>
    <title> tampil data </title>
</head>
<body>
    <a href="tambah_data.php">tambah data <a>
    <h3>tampil data</h3>
    
    <table border="1">
        <thead>
            <th>no</th>
            <th>nama mahasiswa</th>
            <th>email mahasiwswa</th>
            <th>tanggal</th>
            <th colspan="2">aksi</th>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            
            //query sql
            $sql="SELECT* FROM mahasiswa ORDER BY id_mhs ASC";
            $query=mysqli_query($koneksi,sql) or die (mysqli_error ());

            $ no =1; //no.urut
            while ($data= mysqli_fetch_array($query)){
                $id=$data["id_mhs"];
                $nm=$data["nama_mahasiswa"];
                $id=$data["email_mahasiswa"];
                $id=$data["tanggal"];
            
            echo "<tr>
                  <td>$no<td>
                  <td>$nm<td>
                  <td>$em<td>
                  <td>$tg<td>
                  <td>
                  <a href='rubah_data.php?rubah_id=$id'>
                  rubah </a>
                  <a href='hapus_data.php?hapus_id=$id'>
                  hapus </a>
                  <td>
                  </tr>;"

            $noot;
        } 
?>
</tbody>
</table>
</body>
</html>

