<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>TAMBAH PRODUK</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="tambah.php">Tambah <span class="sr-only">(current)</span></a>
      </li>
  </ul>
</div>
</nav>
	
	<div class="container">
	<div class="input-group mb-3">
    	<div class="input-group-prepend">
            		<form action="" method="post"> 
            		<h4>Masukkan Data Produk</h4>
            		<input type="number" name="id" class="form-control input-sm chat-input" placeholder="ID Barang" required="" autofocus="" />
            		<input type="text" name="nama_produk" class="form-control input-sm chat-input" placeholder="Nama Produk" required="" autofocus="" />
            		<input type="text" name="keterangan" class="form-control input-sm chat-input" placeholder="Keterangan" required="" />
            		<input type="number" name="harga" class="form-control input-sm chat-input" placeholder="Harga" required="" />
            		<input type="number" name="jumlah" class="form-control input-sm chat-input" placeholder="Jumlah" required="" />
               		<input type="submit" name="tambah" value="Tambah" />
               		<p><a href="index.php"><span class="glyphicon glyphicon-home"></span> &nbsp Home</a></p>
	<?php

	include "koneksi.php";

	if(isset($_POST['tambah'])){
		$id = $_POST['id'];
		$nama_produk = $_POST['nama_produk'];
		$keterangan = $_POST['keterangan'];
		$harga = $_POST['harga'];
		$jumlah = $_POST['jumlah'];

		$hasil = mysqli_query($conn,"SELECT id FROM produk WHERE id=$id");
		$sama = mysqli_fetch_assoc($hasil);
	if($sama['id'] == $id){
		echo "ID sudah ada,ganti yang lain";
	}
	else{
      	mysqli_query($conn,"INSERT INTO produk (id, nama_produk,keterangan,harga,jumlah) VALUES('$id', '$nama_produk','$keterangan','$harga','$jumlah')");
      	echo "SUCCES";
      }
	}



	?>


</body>
</html>