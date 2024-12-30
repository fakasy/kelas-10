<?php
$nama = $_POST['Nama'];
$mapel = $_POST['Mapel'];
$absen = $_POST['Absen'];
$tugas = $_POST['Tugas'];
$uts   = $_POST['UTS'];
$uas   = $_POST['UAS'];


$nilai_absen = $absen * 0.1;

$nilai_tugas = $tugas * 0.2;

$nilai_uts   = $uts * 0.3;

$nilai_uas   = $uas * 0.4;

$nakhir = $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;

echo 
"nama siswa : $nama <br>
mapel : $mapel <br>
absen : $absen <br>
tugas : $tugas <br>
uts : $uts <br>
uas : $uas <br>
nilai akhir : $nakhir <br>
grade : ";
if ($nakhir >= 80){
    echo "<b>A</b>";
}else
if ($nakhir >= 70){
    echo "<b>B</b>";
}else
if ($nakhir >= 50){
    echo "<b>C</b>";
}else
if ($nakhir >= 40){
    echo "<b>D</b>";
} else {
    echo "<b>E</b>";
}






