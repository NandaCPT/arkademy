<?php 
	include "koneksi.php";

	$id = $_GET['produk'];

	$query = mysqli_query($conn, "SELECT * FROM produk WHERE id='$id'");
	$isi = mysqli_fetch_assoc($query);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

 	<title>EDIT DATA</title>

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
 		 		<h4>Perbarui Data</h4>
 		 		ID: <input class="form-control input-sm chat-input" type="number" name="id" value="<?php echo $isi['id'] ?>" readonly="true"/>
 				Nama: <input class="form-control input-sm chat-input" type="text" name="nama_produk" value="<?php echo $isi['nama_produk'] ?>"/>
 				Keterangan: <input class="form-control input-sm chat-input" type="text" name="keterangan" value="<?php echo $isi['keterangan'] ?>"/>
 				Harga: <input class="form-control input-sm chat-input" type="number" name="harga" value="<?php echo $isi['harga'] ?>"/>
 				Jumlah: <input class="form-control input-sm chat-input" type="number" name="jumlah" value="<?php echo $isi['jumlah'] ?>"/>
 	
 			<input type="submit" name="update" value="Perbarui">
 		 <p><a href="index.php"><span class="glyphicon glyphicon-home"></span> &nbsp Home</a></p>
 						
					

		<?php 
	include('koneksi.php');

 	if(isset($_POST['update'])){
 		$id = $_POST['id'];
 		$nama_produk = $_POST['nama_produk'];
 		$keterangan = $_POST['keterangan'];
 		$harga = $_POST['harga'];
 		$jumlah = $_POST['jumlah'];
 		

 		mysqli_query($conn, "UPDATE produk SET nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id=$id");
 		echo "Data diperbarui";
 		}

 	 ?>
     
</body>
</html>
