<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'arkademy';

$conn = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die ("koneksi gagal");


?>
