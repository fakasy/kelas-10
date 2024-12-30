<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "perpustakaan";

$pdo = new PDO('mysql:host='. $host. ';dbname='. $database, $username, $password);
?>