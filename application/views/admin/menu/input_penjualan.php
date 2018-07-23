<html>
<head>
	<title></title></head>
<body>
<h1>Input Penjualan</h1>
<h2>Pilih Buku</h2>
	<div class="col-md-6">
	<form action="" class="form-inline" method="post">
	<input class="form-control" type="text" name="carian" placeholder="cari buku..."><input type="submit" name="cari" value="cari">
	<a class="btn btn-sm btn-success" href="?menu=input_penjualan">Refresh/Tampill all</a>
	
	<br>
	</form>
	<br>
		<table class="table table-bordered" border="5">
		<?php
		$inputan = $_POST['carian'];
		if(isset($_POST['cari'])){
			if($inputan==""){
				$buku = mysqli_query($koneksi, "SELECT * FROM tb_buku");
			}
			else if($inputan !=""){
				$buku = mysqli_query($koneksi, "SELECT * FROM tb_buku WHERE judul LIKE '%$inputan%'");
			}
		}
		else{
		$buku = mysqli_query($koneksi, "SELECT * FROM tb_buku");
		}
		$cek = mysqli_num_rows($buku);
		if($cek < 1 ){
			?>
			<tr>
			<td>Tidak Ada Data<a class="btn btn-sm btn-success" href="?menu=input_penjualan">Refresh</a></td>
			</tr>
			<?php
		}
		else{
		while($data = mysqli_fetch_array($buku)){
			?>
			<tr class="success">
			<td class="warning"><?php echo $data['judul']; ?></td>
			<td class="warning"><?php echo $data['stok']; ?></td>
			<td><a class="btn btn-sm btn-block btn-warning" href="?menu=jual&id_buku=<?php echo $data['id_buku']; ?>">
			Pilih</a></td>
			</tr>
			<?php
		}}
		?>
		</table>
		<div>
		</body>
</html>