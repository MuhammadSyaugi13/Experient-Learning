<?php 

require 'functions.php';

if (isset($_POST["login"])) {
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

	// cek Apakah username ada pada database
	if (mysqli_num_rows($result) === 1) {
		
		// cek apakah password yg di input sama dengan password hasy yg ada di database
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])){
			header("location: index.php");
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
			<input type="text" name="password" id="password">
		</li>
		
		<li>
			<button type="submit" name="login"> Login!!! </button>
		</li>

	</ul>



</form>

</body>
</html>