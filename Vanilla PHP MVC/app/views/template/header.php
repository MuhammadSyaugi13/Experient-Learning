<!DOCTYPE html>
<html>
<head>
	<title>Halaman <?= $data['judul'] ?> </title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>


<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light navbar-fixed-top">

	<div class="container">

	  <a class="navbar-brand" href="#">PHP MVC</a>
		
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">

	      <li class="nav-item">
	      	<a href="<?= BASEURL; ?>/home" class="nav-link linknav tmbh">	Home <span class="sr-only">(current)</span>
	      	</a>
	      </li>


	      <li class="nav-item">
	      	<a href="<?= BASEURL; ?>/mahasiswa" class="nav-link linknav tmbh">	Mahasiswa <span class="sr-only">(current)</span>
	      	</a>
	      </li>


	      <li class="nav-item">
	      	<a href="<?= BASEURL; ?>/about" class="nav-link linknav tmbh">	About <span class="sr-only">(current)</span>
	      	</a>
	      </li>

	  </ul>
	  </div>  

	</div>

</nav>
