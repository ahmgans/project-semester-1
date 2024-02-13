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
<element class="body">
    <nav class="navbar navbar-dark bg-dark">
<element class="h2">
<span class="navbar-brand mb-0 h2">Data Siswa</span>
</nav>
    <button>
        <a href="form_simpan.php">Tambah Data</a><br></button>
        <element class="table">
    <table border="2" width="100%">
        <tr>
        <th><center>NIS</center></th>
            <th><center>NAMA</center></th>
            <th><center>JENIS-KELAMIN</center></th>
            <th><center>TELEPON</center></th>
            <th><center>ALAMAT</center></th>
            <th colspan="2"><center>AKSI</center></th>
        </tr>
        <?php
        include "koneksi.php";
        $sql=$pdo->prepare("SELECT*FROM siswa");
        $sql->execute();
        
        
        while($data=$sql->fetch()){
            echo"<tr>";
            echo"<td>".$data['nis']."</td>";
            echo"<td>".$data['nama']."</td>";
            echo"<td>".$data['jenis_kelamin']."</td>";
            echo"<td>".$data['telp']."</td>";
            echo"<td>".$data['alamat']."</td>";
            echo"<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
            echo"<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
            echo"<tr>";
        }
        ?>
    </table>
</body>
</html>