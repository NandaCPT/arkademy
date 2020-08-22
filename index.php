<!DOCTYPE html>
<html>
<head>

	<title>DASHBOARD</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

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

<table class="table">
		<thead class="thead-dark">
		<tr>
		<th> ID </th>
		<th> Nama Produk</th>
		<th>Keterangan</th>
		<th> Harga</th>
		<th>Jumlah</th>
		<th></th>
		<th></th>
		</tr>
		</thead>

		<?php

		include('koneksi.php');

		$query = mysqli_query($conn,"SELECT * from produk");

		if(mysqli_num_rows($query)==0){
			echo "Produk Kosong";
		} else {
			while($isi = mysqli_fetch_assoc($query)){
				echo "<tr>";
					echo "<td>".$isi['id']."</td>";
					echo "<td>".$isi['nama_produk']."</td>";
					echo "<td>".$isi['keterangan']."</td>";
					echo "<td>Rp.".$isi['harga']."</td>";
					echo "<td>".$isi['jumlah']."</td>";
					echo "<td><a href=\"edit.php?produk=$isi[id]\"class='btn btn-lg btn-danger'>Edit</a></td>";
					echo "<td><a href=\"delete.php?produk=$isi[id]\"class='btn btn-lg btn-danger'>Hapus</a></td>";
				echo "</tr>";
			}
		}

		?>

	</table>

</body>
</html>
