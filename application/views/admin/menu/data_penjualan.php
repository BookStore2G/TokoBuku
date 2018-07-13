<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_penjualan');?>

<div class="jumbotron text-center">
  <h1>Maju Mundur BOOK</h1> 
  <p>Lebih Baik kutu buku dari pada kutu beneran</p> 
  <form class="form-inline">
   </form>
</div>
<div class="row">
	<div class="col-xs-12 col-md-8">
		<h3>Tabel Penjualan</h3>
		
		<?php
			//$qjumlah = mysqli_query($koneksi, "SELECT * FROM tb_jual");
			//$jumlah = mysqli_num_rows($qjumlah);
		?>
		
		
	</div>
  
	<br>
	<table class="table table-bordered" id="tabel_data">
	<thead>
		<tr class="success">
			<th>No.</th>
			<th>Kasir</th>
			<th>Total</th>
			<th>Uang pembali</th>
			<th>Uang Kembali</th>
			<th>Tanggal</th>
			
		</tr>
			
	</thead>
	<tbody>
	<?php /*
	$no =1;
	$inputan = $_POST['inputan'];
	if($_POST['cari']){
		if($inputan==""){
			$q = mysqli_query($koneksi,"SELECT tb_jual.*,tb_kasir.* FROM tb_jual INNER JOIN tb_kasir ON tb_kasir.id_kasir=tb_jual.id_kasir");
		}
		else if($inputan!=""){
			$q = mysqli_query($koneksi,"SELECT tb_jual.*,tb_kasir.* FROM tb_jual 
			INNER JOIN tb_kasir ON tb_kasir.id_kasir=tb_jual.id_kasir WHERE nama LIKE '%$inputan%'");
	}
	}
else{
	$q = mysqli_query($koneksi,"SELECT tb_jual.*,tb_kasir.* FROM tb_jual INNER JOIN tb_kasir ON tb_kasir.id_kasir=tb_jual.id_kasir ");
	}
		$cek = mysqli_num_rows($q);
		
		if($cek < 1){ */
			?> <!--
			<tr>
			<td colspan="7">
			<center>
			Data yang Anda Cari Tidak Tersedia
				<a href="" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-refresh"></span></a>
			</center>
			</td>
			<tr>-->
			<?php /*
		}
		else{
			
		
		
	while($data = mysqli_fetch_array($q)){ */
		?>
		<?php 
        $no=1;
        foreach ($query as $d) { 
        ?>
		<tr class="warning">
			<td><?php echo $no++; ?></td>
			<td><?php echo $d->nama//$data['nama']; ?></td>
			<td><?php echo $d->total//$data['total']; ?></td>
			<td>Rp.<?php echo $d->uang//$data['uang']; ?></td>
			<td><?php echo $d->kembali//$data['kembali']; ?></td>
			<td><?php echo $d->tanggal//$data['tanggal']; ?></td>
			
			
		</tr>
		<?php
	}
	//}
		?>
	<table>
<?php $this->load->view('admin/footer');?>

<script type="text/javascript">
$(document).ready(function(){
    $('#tabel_data').DataTable( {
        "scroolX"           : true,
       // "scrollY"           : "350px",
        "scrollCollapse"    : true,
        "paging"            : true,
    } );        
});
</script>