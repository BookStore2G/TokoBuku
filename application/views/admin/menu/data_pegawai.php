<?php $this->load->view('admin/header');?>
<?php $this->load->view('admin/navigasi/navigasi_pegawai');?>
  <!--<link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  webstripperwas="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <script src="ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"  webstripperwas="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>
  <script src="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"  webstripperwas="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
  <style>
  .bg-1 { 
      background-color: #1abc9c;
      color: #ffffff;
  }
  </style>-->
</head>
<body>

<div class="bg-1">
  <div class="container text-center">
    <h3>Maju Mundur BOOK</h3>
    <img src="cet.jpg"  webstripperwas="cet.jpg" class="img-circle" alt="cet" width="350" height="350">
    <h3>I'm is ferry GOOD</h3>
  </div>
</div>
<div class="row">
	<div class="col-xs-12 col-md-8">
		<h3>Tabel Pegawai</h3>
		
		<?php
			//$qjumlah = mysqli_query($koneksi, "SELECT * FROM tb_kasir WHERE akses='kasir'");
			//$jumlah = mysqli_num_rows($qjumlah);
		?>
		
		<a class="btn btn-sm btn-success" href="<?php echo site_url('admin/tambah_pegawai'); ?>">Tambah Data</a>
		
	</div>
  
	<br>
	<table class="table table-bordered" id="tabel_data">
	<thead>
		<tr class="success">
			<th>No.</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telephon</th>
			<th>Status</th>
			<th>Username</th>
			<th>Opsi</th>
		</tr>
			
	</thead>
	<tbody>
		<?php 
        $no=1;
        foreach ($query as $d) { ?>
		<tr class="warning">
			<td><?php echo $no++; ?></td>
			<td><?php echo $d->nama; ?></td>
			<td><?php echo $d->alamat; ?></td>
			<td><?php echo $d->telephon; ?></td>
			<td><?php echo $d->status; ?></td>
			<td><?php echo $d->username; ?></td>
			<td>
				<a onclick="return confirm('anda yakin ingin menghapusnya?')" title="Hapus" href="<?php echo site_url('pegawai/hapus_pegawai/'.$d->id_kasir); ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
				|
				<a title="edit" href="<?php echo site_url('admin/edit_pegawai/'.$d->id_kasir); ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			</td>
			
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