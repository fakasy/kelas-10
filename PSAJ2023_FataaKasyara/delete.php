<?php 
include "koneksi.php";

$kode_buku = $_GET['kode_buku'];

$sql = $pdo->prepare("DELETE FROM tbl_buku WHERE kode_buku=:kode_buku");
$sql->bindParam(':kode_buku', $kode_buku);
$execute = $sql ->execute();

if($execute){
    header("location: index.php");
}else{
    echo "Data gagal dihapus. <a href='index.php'> Kembali</a>";
}
?>