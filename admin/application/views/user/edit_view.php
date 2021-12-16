<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <i class="fa fa-edit" style="color:green"> </i>  Update User - <?= $user->nama;?>
    </h1>
    <ol class="breadcrumb">
			<li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
			<li class="active"><i class="fa fa-edit"></i>&nbsp; Update User - <?= $user->nama;?></li>
    </ol>
  </section>
  <section class="content">
	<div class="row">
	    <div class="col-md-12">	
			<?php if(!empty($this->session->flashdata())){ echo $this->session->flashdata('pesan');}?>

	        <div class="box box-primary">
                <div class="box-header with-border">
                </div>
			    <!-- /.box-header -->
			    <div class="box-body">
                    <form action="<?php echo base_url('user/upd');?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama Pengguna</label>
                                    <input type="text" class="form-control" value="<?= $user->nama;?>" name="nama" required="required" placeholder="Nama Pengguna">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" readonly value="<?= $user->user;?>"  name="user" required="required" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password (opsional)</label>
                                    <input type="password" class="form-control" name="pass" placeholder="Isi Password Jika di Perlukan Ganti">
                                </div>
                                <div class="form-group">
                                    <label>Level</label>
                                    <select name="level" class="form-control" required="required">
									<?php if($this->session->userdata('level') == 'Petugas'){?>
										<option <?php if($user->level == 'Petugas'){ echo 'selected';}?>>Petugas</option>
										<option <?php if($user->level == 'Anggota'){ echo 'selected';}?>>Anggota</option>
									<?php }elseif($this->session->userdata('level') == 'Anggota'){?>
										<option <?php if($user->level == 'Anggota'){ echo 'selected';}?>>Anggota</option>
									<?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Telepon</label>
                                    <input id="uintTextBox" class="form-control" value="<?= $user->telepon;?>" name="telepon" required="required" placeholder="Contoh : 089618173609">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" name="alamat"  required="required"><?= $user->alamat;?></textarea>
                                    <input type="hidden" class="form-control" value="<?= $user->id_login;?>" name="id_login">
                                </div>
                            </div>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary btn-md">Edit Data</button> 
						</form>
						<?php if($this->session->userdata('level') == 'Petugas'){?>
							<a href="<?= base_url('user');?>" class="btn btn-danger btn-md">Kembali</a>
						<?php }?>
                        </div>
		        </div>
	        </div>
	    </div>
    </div>
</section>
</div>
