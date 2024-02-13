<?php
include "koneksi.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];

$sql = $pdo->prepare("INSERT INTO siswa(nis, nama, jenis_kelamin, telp, alamat)
    VALUES(:nis,:nama,:jk,:telp,:alamat)");
    $sql->bindParam(':nis',$nis);
    $sql->bindParam(':nama',$nama);
    $sql->bindParam(':jk',$jenis_kelamin);
    $sql->bindParam(':telp',$telp);
    $sql->bindParam(':alamat',$alamat);
    $sql->execute();

    if($sql){
        header("location: index.php");
    }else{
        echo"Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke data base.";
        echo"<br><a href='form_simpanan.php'>Kembali Ke Form</a>";    
    }