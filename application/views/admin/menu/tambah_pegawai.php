<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_pegawai');?>
	<div class="row">
	<h3>Tambah Pegawai</h3>
	<div class="col-md-8">
	<form method="post" action="<?php echo site_url('pegawai/tambah_pegawai');?>">
	  <div class="form-group">
		<label>Nama</label>
		<input name="nama" type="text" class="form-control" placeholder="Nama" required="required">
	  </div>
	  <div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat"name="nama"class="form-control" placeholder="Alamat Pegawai (kasir)" required="required"></textarea>
	  </div>
	  <div class="form-group">
		<label>Telephon</label>
		<input name="telephon" type="text" class="form-control" placeholder="Nomor Telephon" required="required">
	  </div>
	  <div class="form-group">
		<label>Status User</label>
		<select name="status"class="form-control">
		<option>Aktif</option>
		<option>NonAktif</option>
		</select>
		</div>
	  <div class="form-group">
		<label>User untuk Pegawai</label>
		<input name="user"type="text" class="form-control" placeholder="username" required="required">
	  </div>
	  <div class="form-group">
		<label>Password</label>
		<input name="pass" type="password" class="form-control" placeholder="Password" required="required">
	  </div>
	  
		<input name="fsimpan" type="submit" class="btn btn-sm btn-success" value="Simpan">
		
		<a class="btn btn-sm btn-danger" href="<?php echo site_url('admin/data_pegawai');?>">Kembali</a>
	  
  </form>
  <?php /*
	if(isset($_POST['fsimpan'])){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$telephon = $_POST['telephon'];
		$status = $_POST['status'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$akses = "kasir";
	
	$q ="INSERT INTO tb_kasir(nama, alamat, telephon, status, username, password, akses)VALUES('$nama',
	'$alamat','$telephon','$status','$user','$pass','$akses')";
	
	mysqli_query($koneksi,$q);
	?>
	<script type="text/javascript">
		alert('Berhasil coy |');
		document.location.href="?menu=data_pegawai";
	</script>
	<?php
	}*/
	?>
  </div>
	<div>
<?php $this->load->view('admin/footer');?>