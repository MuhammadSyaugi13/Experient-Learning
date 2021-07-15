<?php 
require 'functions.php';

session_start();

// cek apakah session login Belum ada
if (!isset($_SESSION["login"])) {
	# Jika Belum Kembalikan Ke halaman login.php
	header("location: login.php");
	exit;
}

$kelass = $_GET["kelas"];


$mahasiswa = query("SELECT * FROM mahasiswa WHERE jurusan = '$kelass'");
	

// jalankan tombol cari 

if (isset($_POST["cari"])) {
		
	$mahasiswa = cari($_POST["keyword"]);

}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/cssindex.css">
</head>
<body>
<div></div>
<a href="logout.php"><button type="button" class="btn logout btn-danger">Logout!</button></a>	

<h1 class="judul">Daftar Mahasiswa</h1>

<div class="container">

<form action="" method="post">
	<input type="text" name="keyword" size="35" placeholder="Masukan Kata Kunci..." autocomplete="off" autofocus="">
	<button type="submit" name="cari" class="btn btn-secondary">Cari !</button>
</form>

<br>
<br>
<br>


<div class="tmb">

	
		<a href="tambah.php">	<button type="button" class="btn btn-primary">Tambah data mahasiswa</button></a>
		<a href="index2.php"><button type="button" class="btn btn-success">Export ke Excel</button></a>
</div>
<!-- <form action="" method="">
	
	<select>
	</select>


</form> -->
<ul>
	<?php if ($kelass == "7a"): ?>
		
		<li>
			<a href="index.php?kelas=7a"><button type="button" id="7a" class="btn btn-success">7A
			</button></a>
		</li>
	<?php else: ?>

		<li>
			<a href="index.php?kelas=7a"><button type="button" id="7a" class="btn btn-outline-success">7A
			</button></a>
		</li>
	

	<?php endif ?>


	<?php if ($_GET["kelas"] == '7b'): ?>
		
		<li>
			<a href="index.php?kelas=7b">
			<button type="button" id="7b" class="btn btn-success">7B
			</button>
			</a>
		</li>
	<?php else: ?>

		<li>
			<a href="index.php?kelas=7b">
			<button type="button" id="7b" class="btn btn-outline-success">7B
			</button>
			</a>
		</li>
	

	<?php endif ?>
		

		
	
</ul>

<div class="clear"></div>

	

<table border="3" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Kelas</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $mahasiswa as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
		</td>
		<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>

</div>


</body>
</html>