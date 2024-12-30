<?php 
$koneksi = mysqli_connect("localhost","root","","sekolah");
 
if (mysqli_connect_errno()){
    echo "Koneksi data base gagal : " .mysqli_connect_error();
}
?>