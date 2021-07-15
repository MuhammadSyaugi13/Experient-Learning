<?php 
require 'functions.php';

session_start();

// cek apakah session login Belum ada
if (!isset($_SESSION["login"])) {
	# Jika Belum Kembalikan Ke halaman login.php
	header("location: login.php");
	exit;
}

$kelassss = $_GET["kelas"];


$mahasiswa = query("SELECT * FROM mahasiswa WHERE jurusan = 1");


// jalankan tombol cari 

if (isset($_POST["cari"])) {
		
	$mahasiswa = cari($_POST["keyword"]);
	echo $_POST["select"];

}

$namaFile = "Data Siswa2";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attechment; filename=".$namaFile.".xls");



?>



<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">Logout!</a>	

<h1 onclick="tester()">Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<form action="" method="post">
	<input type="text" name="keyword" size="35" placeholder="Masukan Kata Kunci..." autocomplete="off" autofocus="">
	<select name="select">
		<option>ogi</option>
		<option>ganteng</option>
	</select>
	<button type="submit" name="cari">Cari !</button>
</form>
<br>
<br>
<a href="export_excel.php">Export ke Excel</a>

<br><br>
<!-- <form action="" method="">
	
	<select>
	</select>


</form> -->
		<a href="index.php?kelas=7a">7A</a>
		<a href="index.php?kelas=7b">7b</a>

<br>
<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
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

</body>
</html>