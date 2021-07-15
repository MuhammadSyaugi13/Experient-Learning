<?php
require 'functions.php';

session_start();

// cek apakah session login Belum ada
if (!isset($_SESSION["login"])) {
	# Jika Belum Kembalikan Ke halaman login.php
	header("location: login.php");
			exit;
}


// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// var_dump($mhs);


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php?kelas=7a';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data tida berubah!');
				document.location.href = 'index.php?kelas=7a';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data mahasiswa</title>
</head>
<body>
	<h1>Ubah data mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
		<ul>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>">
			</li>
			<li>
				<label for="jurusan">Kelas :</label>
				<select name="jurusan" id="jurusan">
					<option><?= $mhs["jurusan"]; ?></option>
					<option>7A</option>
					<option>7B</option>
					<option>8A</option>
					<option>8B</option>
					<option>9A</option>
					<option>9B</option>
					
				</select>
			</li>
			<li>
				<label for="gambar">Gambar :</label><br>
				<img width="40" src="img/<?= $mhs["gambar"]; ?>"><br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>