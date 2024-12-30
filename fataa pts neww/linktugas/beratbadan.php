<?php
echo "Program hitung Berat Badan ";
echo "<br>";
echo "------------------------------------------------------------------";
echo "<br>";    
$berat_badan = 78;
$tinggi_badan = 160;
echo "Berat Badan = $berat_badan";
echo "<br>";
echo "Tinggi Badan = $tinggi_badan";
echo "<br>";
echo "------------------------------------------------------------------";
echo "<br>";
$wanita = ($tinggi_badan - 100) - (($tinggi_badan - 100) * 15/100);
$pria = ($tinggi_badan - 100) - (($tinggi_badan - 100) * 10 / 100);
echo "<b>Berat badan ideal wanita = $wanita kg";
echo "<br>";
echo "<b>Berat badan ideal pria = $pria kg";