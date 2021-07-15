<?php 
require 'functions.php';

session_start();

// cek apakah session login Belum ada
if (!isset($_SESSION["login"])) {
	# Jika Belum Kembalikan Ke halaman login.php
	header("location: login.php");
			exit;
}


$id = $_GET["id"];
$kelas = query("SELECT * FROM mahasiswa WHERE id = '$id'")[0];
$kelas1 = strtolower($kelas['jurusan']); 





if( hapus($id) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'index.php?kelas=$kelas1'
		</script>";	
} else {
	echo "
		<script>
			alert('data gagal dihapus!');
		</script>
	";
	header("location: login.php?kelas=");	
}

?>