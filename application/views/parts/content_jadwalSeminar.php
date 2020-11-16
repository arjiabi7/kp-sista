<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<title>Jadwal Seminar & Plot Penguji</title> 
</head>
<style type="text/css">
	.body_content{
		background-image: url('<?php echo base_url();?>assets/img/carousel/background.jpg');
	}
</style>
<body class="mt-3 body_content" style="margin-bottom: 100px;">
	<center>
	<div class="container-fluid pb-5 pt-5">
		<br>
		<div class="col-md-8 col-md-offset-2">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">Seminar</li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url();?>index.php/menu_daftarSeminar/jadwal">Pengumuman Jadwal & Ploting Penguji</a></li>
			</ol>
		</nav>
			<div class="jumbotron jumbotron-fluid">
			  <div class="container">
			    <h1 class="display-4">Seminar </h1>
			     <hr class="my-4">
			    <h6> Data Mahasiswa </h6>
		<table class="table table-striped table-hover">
			
		
				<tr>
					<th>NIM</th>
					
					<th style="width: 10px">:</th>
					<th> <?=$this->ion_auth->gabung_tabel_userSeminar()->row()->nim;?></th>
			
				</tr>
			
			
				<tr>
					<td style="width: 200px">NAMA</td>
					<td>:</td>
					<td> <?=$this->ion_auth->gabung_tabel()->row()->nama_lengkap;?></td>
					
				</tr>
				<tr>
					<td>PEMINATAN</td>
					<td>:</td>
					                        <td> <?=$this->ion_auth->gabung_tabel()->row()->peminatan;?></td>

				</tr>
				<tr>
					<td>JUDUL</td>
					<td>:</td>
					                        <td> <?=$this->ion_auth->gabung_tabel_userSeminar()->row()->judul_skripsi;?></td>

				</tr>
			</table>
			 <hr class="my-4">
			 <h6>Jadwal Seminar </h6>
			 <table  class="table table-striped table-hover">
				<tr>
					<td style="width: 200px">HARI</td>
					<td style="width: 10px">:</td>
					<td><?=$this->ion_auth->gabung_tabel_userSeminar()->row()->hari_seminar;?></td></td>

				</tr>
				<tr>
					<td style="width: 200px">TANGGAL</td>
					<td style="width: 10px">:</td>
					<td><?=$this->ion_auth->gabung_tabel_userSeminar()->row()->tgl_seminar;?></td></td>

				</tr>
				<tr>
					<td style="width: 200px">JAM</td>
					<td style="width: 10px">:</td>
					<td><?=$this->ion_auth->gabung_tabel_userSeminar()->row()->jam_seminar;?></td>

				</tr>
				<tr>
					<td style="width: 200px">TEMPAT</td>
					<td style="width: 10px">:</td>
					<td><?=$this->ion_auth->gabung_tabel_userSeminar()->row()->tempat_seminar;?></td>

				</tr>
				</table>
 <hr class="my-4">
				<h6>Reviewer </h6>
			 <table  class="table table-striped table-hover">
				<tr>
					<td style="width: 200px">REVIEWER 1</td>
					<td style="width: 10px">:</td>
					<td><?=$this->ion_auth->gabung_tabel_userSeminar()->row()->nid_r1;?></td>

				</tr>
				<tr>
					<td style="width: 200px">REVIEWER 2</td>
					<td style="width: 10px">:</td>
					<td><?=$this->ion_auth->gabung_tabel_userSeminar()->row()->nid_r2;?></td>

				</tr>
				
				</table>
				
		
			    <hr class="my-4">
			    <p>&copy;2020 SISTA</p>
			  </div>
			</div>
		</div>
	</div>
	</center>
</body>
</html>