<?php 
	include "koneksi.php";
	$id = $_GET['produk'];

	mysqli_query($conn, "DELETE FROM produk WHERE id='$id'");
	header("Location: index.php");


 ?>