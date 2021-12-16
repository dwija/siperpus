	<div class="container col-xxl-8 px-4 py-5">
		<div class="row g-5">
			<div class="col-md-12">
			  <article class="blog-post">		  
				<h2 class="blog-post-title">Data Buku</h2>
				<hr>
					<div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ISBN</th>
                                <th>Title</th>
                                <th>Penerbit</th>
                                <th>Tahun Buku</th>
                                <th>Stok Buku</th>
                                <th>Dipinjam</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php include "koneksi.php"; 
								// mengambil data judul buku
								$data_buku = mysqli_query($conn,"SELECT * FROM tbl_buku");
								$no =1;
								while ($isi = mysqli_fetch_array($data_buku)) {
							?>
							<tr>
                                <td><?=$no;?></td>
                                <td><?=$isi['isbn'];?></td>
                                <td><?=$isi['title'];?></td>
                                <td><?=$isi['penerbit'];?></td>
                                <td><?=$isi['thn_buku'];?></td>
                                <td><?=$isi['jml'];?></td>
								<td>
									<?php
										$id = $isi['buku_id'];
										$dd = mysqli_query($conn,"SELECT * FROM tbl_pinjam WHERE buku_id= '$id' AND status = 'Dipinjam'");
                                        $dp = mysqli_num_rows($dd);
										if($dp > 0 )
										{
											echo $dp;
										}else{
											echo '0';
										}
									?>
								</td>
                            </tr>
                        <?php $no++;}?>
                        </tbody>
                    </table>
			    </div>
			  </article>
			</div>
		</div>
	</div>