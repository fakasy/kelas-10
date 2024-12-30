<?php 
include "connect.php";


$kode_anggota = $_GET['kode_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];


$sql = $pdo->prepare("UPDATE tbl_anggota SET kode_anggota=:kode_anggota, nama_anggota=:nama_anggota, jenis_kelamin=:jenis_kelamin, kelas=:kelas, telpon=:telpon, alamat=:alamat WHERE kode_anggota=:kode_anggota");
$sql->bindParam(':kode_anggota', $kode_anggota);
$sql->bindParam(':nama_anggota', $nama_anggota);
$sql->bindParam(':jenis_kelamin', $jenis_kelamin);
$sql->bindParam(':kelas', $kelas);
$sql->bindParam(':telpon', $telpon);
$sql->bindParam(':alamat', $alamat);


$execute = $sql->execute();

if ($execute){
    header("location: view_anggota.php");
}else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_editanggota.php'>Kembali Ke Form</a>";
}
?>