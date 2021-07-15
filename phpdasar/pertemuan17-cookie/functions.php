<?php 


// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
	global $conn;
	// var_dump($query);die;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function kelas(){
	
}


function tambah($data) {
	global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);

	// Upload gambar
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$query = "INSERT INTO mahasiswa
				VALUES
			  ('', '$nama', '$jurusan', '$email', '$gambar')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload(){
	
	$namaFile = $_FILES["gambar"]["name"];
	$ukuran = $_FILES["gambar"]["size"];
	$error = $_FILES["gambar"]["error"];
	$namaTmp = $_FILES["gambar"]["tmp_name"];

	// cek apakah udah upload gambar
	if ($error === 4) {
		echo "<script>
			alert('anda belum memasukan gambar');
		</script>
		";
		return false;
	}

	// cek yg diupload itu gambar apa bukan
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower( end( $ekstensiGambar ) );
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
			alert('yang anda masukan bukan gambar');
		</script>
		";
		return false;
		
	}

	// cek ukuran gambar

	if ($ukuran > 1020000) {
		echo "<script>
			alert('gambar yang anda masukan terlalu besar!!');
		</script>
		";
		return false;
	}

	//  setelah selesai pengecekan. upload gambar
	// ganti nama baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= ".";
	$namaFileBaru .= $ekstensiGambar; 


	move_uploaded_file($namaTmp, 'img/' . $namaFileBaru);
	return $namaFileBaru;



}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	// cek apakah menganti gambar atau tidak
	if ($_FILES["gambar"]["error"] === 4) {
		$gambar = $gambarLama;
	}else{
		$gambar = upload();
	}


	

	$query = "UPDATE mahasiswa SET
				nama = '$nama',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar'
			  WHERE id = $id
			";
	// var_dump($query); die;
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}



function cari($keyword){

	$query = "SELECT * FROM mahasiswa
				WHERE 
				nama LIKE '%$keyword%' OR
				email LIKE '%$keyword%' OR
				jurusan LIKE '%$keyword%'
				";

	return query($query);			

}

function register($data){

	global $conn;

	$username = htmlspecialchars(strtolower(stripcslashes($data["username"])));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);


	// cek username apakah sudah digunakan atau belum
	$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "
			<script>
				alert('Username sudah digunakan!!!');
			</script>
		";
		return false;
	}



	// konfirmasi password
	if ($password !== $password2) {
		echo "
			<script>
				alert('konfirmasi password salah');
			</script>
		";
		return false;
	}


	// enkripsi password

	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambah user ke database
	mysqli_query($conn, "INSERT INTO users VALUES ('','$username','$password')");


	return mysqli_affected_rows($conn);


}














?>