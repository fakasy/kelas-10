<?php 
include "koneksi.php";


$kode_buku= $_GET['kode_buku'];
$isbn = $_POST['isbn'];
$judul= $_POST['Judul'];
$pengarang = $_POST['Pengarang'];
$penerbit = $_POST['Penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$jumlah = $_POST['jumlah'];

$sql = $pdo->prepare("UPDATE tbl_buku SET kode_buku=:kb, isbn=:isbn, Judul=:Judul, Pengarang=:pengarang, Penerbit=:penerbit, tahun_terbit=:tahun_terbit, jumlah=:jumlah WHERE kode_buku=:kode_buku");
$sql->bindParam(':kb', $kode_buku);
$sql->bindParam(':isbn', $isbn);
$sql->bindParam(':Judul', $judul);
$sql->bindParam(':pengarang', $pengarang);
$sql->bindParam(':penerbit', $penerbit);
$sql->bindParam(':tahun_terbit', $tahun_terbit);
$sql->bindParam(':jumlah', $jumlah);
$sql->bindParam(':kode_buku', $kode_buku);

$execute = $sql->execute();

if ($execute){
    header("location: index.php");
}else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_edit.php'>Kembali Ke Form</a>";
}
?>