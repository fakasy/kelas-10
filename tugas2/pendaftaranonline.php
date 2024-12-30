<?php
$jalur = $_POST['jalur'];
$sekolah1 = $_POST['sekolah1'];
$sekolah2 = $_POST['sekolah2'];
$sekolah3 = $_POST['sekolah3'];
$nik = $_POST['nik'];
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];

$kelamin = $_POST['kelamin'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah'];
$ortu = $_POST['ortu'];
$jalan = $_POST['jalan'];
$dusun = $_POST['dusun'];
$rt = $_POST['rt'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$kota = $_POST['kota'];
$koordinat = $_POST['koordinat'];
$jarak = $_POST['jarak'];

echo "Jalur Pendaftaran : $jalur <br>
Sekolah Pilihan Pertama : $sekolah1 <br>
Sekolah Pilihan Kedua : $sekolah2 <br>
Sekolah Pilihan Ketiga : $sekolah3 <br>
NIK : $nik<br>
NISN : $nisn<br>
Nama : $nama <br>
Tempat Lahir : $tempat <br>
Jenis Kelamin : $kelamin <br>
Agama : $agama <br>
Sekolah Asal : $sekolah <br>
Nama Orang Tua / Wali : $ortu <br>
Alamat : $jalan,$dusun,$rt,$desa,$kecamatan,$kota,$koordinat<br>
Jarak Ke SMKN 2 Magelang : $jarak Km";


?>