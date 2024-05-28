<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h3>Tambah Data</h3>
    <form action="insert.php" method="post">
        <table>
            <tr>
                <td>Nama Lengkap:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="mail" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="kirim" value="Simpan">
                    <input type="button" name="clear" value="Batal" onclick="window.history.back();">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
