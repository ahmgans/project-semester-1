<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD dengan PPHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
<element class="h2">
<span class="navbar-brand mb-0 h2">Ubah Data Siswa</span>
</nav>
    <?php
    include"koneksi.php";
    
    $id=$_GET['id'];
    
    $sql = $pdo->prepare("SELECT * FROM siswa WHERE id=:id");
    $sql->bindParam(':id',$id);
    $sql->execute();
    $data = $sql->fetch();
    ?>

    <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>">
    <table cellpadding="8">
        <tr>
            <td>NIS</td>
            <td><input type="text" name="nis" value="<?php echo $data['nis'];?>"></td> 
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td> 
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
        <td>
        <?php
        if($data['jenis_kelamin']=="Laki-laki"){
            echo "<input type='radio' name='jenis_kelamin'value='Laki-laki' cheked='cheked'>Laki-laki";
            echo "<input type='radio' name='jenis_kelamin'value='Perempuan'>Perempuan";
        }else{
            echo "<input type='radio' name='jenis_kelamin' value='Laki-laki'>Laki-laki";
            echo "<input type='radio' name='jenis_kelamin' value=Perempuan' checked='checked'>Perempuan";
        }
    ?>
    </td>
    </tr>
    <tr>
        <td>Telepon</td>
        <td><input type="text" name="telp" value="<?php echo $data['telp'];?>"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><textarea name="alamat"><?php echo $data['alamat'];?></textarea></td>
    </tr>
    </table>
    <hr>
    <input type="submit" value="Ubah">
    <a href="index.php"><input type="button" value="Batal"></a>
    </form>
</body>
</html>