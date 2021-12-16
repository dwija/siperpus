		<div class="container col-xxl-8 px-4 py-5">
			<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
			  <div class="col-10 col-sm-8 col-lg-5">
				<img src="img/siperpus.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
			  </div>
			  <div class="col-lg-7">
				<h1 class="display-5 fw-bold lh-1 mb-3">SIPERPUS - Sistem Informasi Perpustakaan</h1>
				<p class="lead">Sistem Informasi Perpustakaan (SIPERPUS) merupakan sistem informasi yang dikembangkan untuk memudahkan dalam pelayanan serta memudahkan petugas dalam mengelola data anggota, ketersediaan buku, peminjaman buku dan pengembalian buku di perpustakaan.</p>
				<?php include "koneksi.php"; 
					// mengambil data judul buku
					$data_buku = mysqli_query($conn,"SELECT * FROM tbl_buku");
					// menghitung data barang
					$jumlah_buku = mysqli_num_rows($data_buku); 
					// mengambil data anggota
					$data_anggota = mysqli_query($conn,"SELECT * FROM tbl_login WHERE level='Anggota'");
					// menghitung data barang
					$jumlah_anggota = mysqli_num_rows($data_anggota);
				?>
				<p class="lead">Terdapat <b><?=$jumlah_buku;?></b> judul buku dan <b><?=$jumlah_anggota;?></b> anggota di SIPERPUS.</p>
				<div class="d-grid gap-2 d-md-flex justify-content-md-start">
				  <a href="buku.html" class="btn btn-primary btn-lg px-4 me-md-2">Lihat Buku</a>
				  <a href="daftar.html" class="btn btn-outline-secondary btn-lg px-4">Daftar Sekarang</a>
				</div>
			  </div>
			</div>
		</div>