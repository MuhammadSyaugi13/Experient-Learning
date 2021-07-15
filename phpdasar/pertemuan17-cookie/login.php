<?php 

require 'functions.php';

session_start();


// cek apakah session Halaman Depan sudah ada
if (!isset($_SESSION["halamanDepan"])) {
	# Jika Sudah Kembalikan Ke halaman Index.php
	header("location: awal.php?url=");
			exit;
}



// cek apakah session login sudah ada
if (isset($_SESSION["login"])) {
	# Jika Sudah Kembalikan Ke halaman Index.php
	header("location: index.php?kelas=7a");
			exit;
}


if (isset($_POST["login"])) {
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

	// cek Apakah username ada pada database
	if (mysqli_num_rows($result) === 1) {
		
		// cek apakah password yg di input sama dengan password hasy yg ada di database
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])){

			// buat sessin agar setelah login berhasil baru bisa akses halaman lain
			$_SESSION["login"] = true;

			// pindah ke halaman index
				header("location: index.php?kelas=7a");
				exit;
		}

	}

		$error = true;

}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<h1>Halaman Login</h1>


<?php if(isset($error)):?>

	<p style="color: red; font-style: italic;">Username / Password <b>Salah!!!</b></p>

<?php endif; ?>	


<form action="" method="post">
	
	<ul>
		
		<li>
			<label for="username"> Username : </label>
			<input type="text" name="username" id="username">
		</li>
		
		<li>
			<label for="password"> Password : </label>
			<input type="password" name="password" id="password">
		</li>
		
		<li>
			<button type="submit" name="login"> Login!!!</button>
		</li>

	</ul>



</form>

</body>
</html>