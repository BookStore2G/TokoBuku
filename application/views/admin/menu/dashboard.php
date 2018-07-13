<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_dashboard');?>


<h4>Selamat Datang Admin <?php echo $user;?></h4>
<h2>Aplikasi Toko Buku</h2>
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">Data Pegawai</div>
				<div class="panel-body">
				<center>
				<h3><span class="glyphicon glyphicon-user"></span>
				<?php echo $data_pegawai
					//$qpeg = mysqli_query($koneksi, "SELECT * FROM tb_kasir");
					//$jumlah = mysqli_num_rows($qpeg);
					//echo $jumlah;
				?>
				</h3>
				</center>
				</div>
			</div>
		</div>
	
	<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">Data Penjualan</div>
				<div class="panel-body">
				<center>
				<h3><span class="glyphicon glyphicon-export"></span>
				<?php echo $data_penjualan
					//$qpnj = mysqli_query($koneksi, "SELECT * FROM tb_penjualan");
					//$jml_pen = mysqli_num_rows($qpnj);
					//echo $jml_pen;
				?>
				</h3>
				</center>
				</div>
			</div>
		</div>
	
	<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">Data Distributor</div>
				<div class="panel-body">
				<center>
				<h3><span class="glyphicon glyphicon-user"></span>
				<?php echo $data_distributor
					//$qdis = mysqli_query($koneksi, "SELECT * FROM tb_distributor");
					//$jml_dis = mysqli_num_rows($qdis);
					//echo $jml_dis;
				?>
				</h3>
				</center>
				</div>
			</div>
		</div>
	
	<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">Data Buku</div>
				<div class="panel-body">
				<center>
				<h3><span class="glyphicon glyphicon-book"></span>
				<?php echo $data_buku
					//$qbuk = mysqli_query($koneksi, "SELECT * FROM tb_buku");
					//$jml_buk = mysqli_num_rows($qbuk);
					//echo $jml_buk;
				?>
				</h3>
				</center>
				</div>
			</div>
		</div>
	
	<div class="col-md-4">
		<div class="panel panel-info">
			<div class="panel-heading">Riwayat Pemasukan</div>
				<div class="panel-body">
				<center>
				<h3><span class="glyphicon glyphicon-import"></span>
				<?php echo $data_pemasukan
					//$qpasok = mysqli_query($koneksi, "SELECT * FROM tb_pasok");
					//$jml_pasok = mysqli_num_rows($qpasok);
					//echo $jml_pasok;
				?>
				</h3>
				</center>
				</div>
			</div>
		</div>
	</div>

<?php $this->load->view('admin/footer');?>