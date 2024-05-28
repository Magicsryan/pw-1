<html>
<head>
    <title>Insert Data</title>
</head>
<body>
    <form action="insert.php" method="POST">
        <label for="nama_guru">Nama Guru:</label>
        <input type="text" id="nama_guru" name="nama_guru"><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select id="jenis_kelamin" name="jenis_kelamin">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>

        <label for="mapel">Mata Pelajaran:</label>
        <input type="text" id="mapel" name="mapel"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
