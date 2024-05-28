<?php
    include "koneksi.php";
    $idh=$_GET("hapus_id");
    
    //query sql
    $sql="DELETE FROM mahasiswa WHERE id nis='$idh'";
    $query=mysli_
