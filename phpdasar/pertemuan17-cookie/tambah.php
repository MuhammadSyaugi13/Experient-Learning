<?php
require 'functions.php';

session_start();

// cek apakah session login Belum ada
if (!isset($_SESSION["login"])) {
	# Jika Belum Kembalikan Ke halaman login.php
	header("location: login.php");
			exit;
}


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php?kelas=7A';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php?kelas=7A';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data mahasiswa</title>
</head>
<body>
	<h1>Tambah data mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email">
			</li>
			<li>
				<label for="jurusan">Kelas :</label>
				<select name="jurusan" id="jurusan">
					<option value="7A">7A</option>
					<option value="7B">7B</option>
					<option value="8A">8A</option>
					<option value="8B">8B</option>
					<option value="9A">9A</option>
					<option value="9B">9B</option>
				</select>
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>