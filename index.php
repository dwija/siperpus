<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>SIPERPUS - Sistem Informasi Perpustakaan</title>
  </head>
  <body>
	<header class="p-3 bg-dark text-white">
		<div class="container">
		  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
			<a class="navbar-brand" href="index.html"><span class="fs-4">SIPERPUS</span></a>

			<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
			  <li><a href="profil.html" class="nav-link px-2 text-white">Profil</a></li>
			  <li><a href="buku.html" class="nav-link px-2 text-white">Buku</a></li>
			  <li><a href="bantuan.html" class="nav-link px-2 text-white">Bantuan</a></li>
			</ul>

			<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
			  <input type="search" class="form-control form-control-dark" placeholder="Cari..." aria-label="Cari">
			</form>

			<div class="text-end">
			  <a href="admin" class="btn btn-outline-light me-2">Masuk</a>
			  <a href="daftar.html" class="btn btn-warning">Daftar</a>
			</div>
		  </div>
		</div>
	</header>
	
	<main class="flex-shrink-0">	
	<?php 
	if (@$_GET['pg']=='home'){ 
		include "pages/home.php";
		
	}elseif (@$_GET['pg']=='profil'){
		include "pages/profil.php";
	}elseif (@$_GET['pg']=='buku'){
		include "pages/buku.php";
	}elseif (@$_GET['pg']=='bantuan'){
		include "pages/bantuan.php";
	}elseif (@$_GET['pg']=='daftar'){
		include "pages/daftar.php";	
	}else{
		include "pages/home.php";
	}		
	?>		
	</main>	
	
	<footer class="footer mt-auto py-3 bg-dark">
	  <div class="container">
		<span class="text-muted">2021 @ WP1 Kelompok 1</span>
	  </div>
	</footer>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>