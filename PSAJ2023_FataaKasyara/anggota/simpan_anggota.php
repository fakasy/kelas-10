<?php 
include "connect.php";

$kode_anggota = $_POST['kode_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];
$telpon = $_POST['telpon'];
$alamat = $_POST['alamat'];

$sql = $pdo->prepare("INSERT INTO tbl_anggota(kode_anggota, nama_anggota, jenis_kelamin, kelas, telpon ,alamat) VALUES(:kode_anggota,:nama_anggota,:jenis_kelamin,:kelas,:telpon,:alamat)");
$sql->bindParam(':kode_anggota', $kode_anggota);
$sql->bindParam(':nama_anggota', $nama_anggota);
$sql->bindParam(':jenis_kelamin', $jenis_kelamin);
$sql->bindParam(':kelas', $kelas);
$sql->bindParam(':telpon', $telpon);
$sql->bindParam(':alamat', $alamat);
$sql->execute();

if ($sql){
    header("location: view_anggota.php");
}else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database";
    echo "<br><a href='simpan_anggota.php'>Kembali Ke Form</a>";
}