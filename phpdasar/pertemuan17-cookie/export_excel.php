 <!DOCTYPE html>
<html>
<head>
	<title>Download Data ke excel</title>
</head>
<body>

<?php 

$namaFile = "Data Siswa";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attechment; filename=".$namaFile.".xls");

 ?>


	<h1>Export data</h1>
	<a href="export_excel.php">Export Excel</a>

	<table border="1" align="center" width="500">
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		
		<?php 

			include "konek.php";


			$tampil = mysqli_query($koneksi, "SELECT * FROM mahasiswa");	
			$no = 1;
			while ( $data = mysqli_fetch_array($tampil) ): 

		 ?>



		<tr>
			<td><?= $no++ ?></td>
			<td><?= $data['nama'] ?></td>
			<td><?= $data['email'] ?></td>
			<td><?= $data['jurusan'] ?></td>
		</tr>	

		<?php endwhile; ?>

	</table>



</body>
</html>