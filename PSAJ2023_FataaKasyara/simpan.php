<?php 
include "koneksi.php";

$kode_buku = $_POST['kode_buku'];
$isbn = $_POST['isbn'];
$judul= $_POST['Judul'];
$pengarang = $_POST['Pengarang'];
$penerbit = $_POST['Penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$jumlah = $_POST['jumlah'];

$sql = $pdo->prepare("INSERT INTO tbl_buku(kode_buku, isbn, Judul, Pengarang, Penerbit ,tahun_terbit ,jumlah) VALUES(:kode_buku,:isbn,:Judul,:Pengarang,:Penerbit,:tahun_terbit,:jumlah)");
$sql->bindParam(':kode_buku', $kode_buku);
$sql->bindParam(':isbn', $isbn);
$sql->bindParam(':Judul', $judul);
$sql->bindParam(':Pengarang', $pengarang);
$sql->bindParam(':Penerbit', $penerbit);
$sql->bindParam(':tahun_terbit', $tahun_terbit);
$sql->bindParam(':jumlah', $jumlah);
$sql->execute();

if ($sql){
    header("location: index.php");
}else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database";
    echo "<br><a href='simpan.php'>Kembali Ke Form</a>";
}