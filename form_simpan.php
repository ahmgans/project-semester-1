<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD dengan PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
<span class="navbar-brand mb-0 h2">Tambah Data Siswa</span>
</nav>
    </div>
    <form method="post" action="proses_simpan.php">
        <table cellpadding="8">
            <tr>
                <td>NIS</td>
                <td><input type="text" name="nis"></td>
</tr>
<tr>
    <td>Nama</td>
    <td><input type="text" name="nama"></td>
</tr>
<tr>
    <td>jenis kelamin</td>
    <td>
        <input type="radio" name="jenis_kelamin"value="Laki-laki">Laki-laki
        <input type="radio" name="jenis_kelamin"value="perempuan">perempuan
</td>
</tr>
<tr>
    <td>Telepon</td>
    <td><input type="text" name="telp"></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><textarea name="alamat"></textarea></td>
</tr>
</table>

<hr>
<input type="submit" value="simpan">
<a href="index.php"><input type="button"value="Batal"></a>
</form>
</body>
</html>
