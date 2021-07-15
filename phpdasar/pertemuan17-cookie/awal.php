<?php 
require 'functions.php';
session_start();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$get = $_GET["url"];

$_SESSION["halamanDepan"] = true;
$result = mysqli_query($conn, "SELECT * FROM users WHERE id = '$get'");

 ?>


<!DOCTYPE html>
<html>
<head>

	<title>Card</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/stylecard.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js">

</head>
<body>


<?php if ($get == false): ?>
<h1>selamat datang</h1>	

<?php 
return false;
endif ?>

<?php 
$siswa = query("SELECT * FROM mahasiswa WHERE id = $get")[0];
 ?>


<div class="card">
		
		<div class="card-image">
			<img src="css/bg2.jpg" class="bg">
		</div>
		<div class="profil-image">
			<img src="img/<?= $siswa["gambar"]; ?>" class="pr">
		</div>
		<div class="card-content">
			<br><br>
			<h3 class="yname con" ><?= $siswa["nama"]; ?></h3>
			<h3 class="name con" >Class : 7A</h3>
			<!-- <h3 class="yname con" >7A</h3> -->
			<h3 class="name con" >No ID : 0012312312</h3>
			<div class="yname con" ></div>
			<br>
			<br>
			<p>Student of .... High School</p>
		</div>

	</div>


	

</body>
</html>