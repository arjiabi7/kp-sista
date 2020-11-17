<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
	  <link rel="icon" href="<?php echo base_url();?>assets/img/brand/favicon.png" type="image/png">
      <!-- Fonts -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
      <!-- Icons -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/nucleo/css/nucleo.css" type="text/css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
      <!-- Argon CSS -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/argon.css?v=1.2.0" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<title>Jadwal Sidang & Plot Penguji</title> 
</head>
<style type="text/css">
	.body_content{
		background-image: url('<?php echo base_url();?>assets/img/carousel/background.jpg');
	}</style>
<body class="mt-3 body_content" style="margin-bottom: 100px;">
	<center>
	<div class="container-fluid pb-5 pt-5">
		<br>
		<div class="col-md-8 col-md-offset-2">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">Sidang</li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url();?>index.php/mahasiswa/sidang/jadwal">Pengumuman Jadwal & Ploting Penguji</a></li>
			</ol>
		</nav>
			<div class="jumbotron jumbotron-fluid">
			  <div class="container">
			    <h1 class="display-4">Sidang </h1>
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
					                        <td> <?=$this->ion_auth->gabung_tabel_userVerifikasiDaftarTA()->row()->judul_skripsi;?></td>

				</tr>
			</table>
			 <hr class="my-4">
			 <h6>Jadwal Sidang </h6>
			 <table  class="table table-striped table-hover">
				<tr>
					<td style="width: 200px">HARI</td>
					<td style="width: 10px">:</td>
					<td><?=$this->ion_auth->gabung_tabel_userVerifikasiSidang()->row()->hari_sidang;?></td></td>

				</tr>
				<tr>
					<td style="width: 200px">TANGGAL</td>
					<td style="width: 10px">:</td>
					<td><?=$this->ion_auth->gabung_tabel_userVerifikasiSidang()->row()->tgl_sidang;?></td></td>

				</tr>
				<tr>
					<td style="width: 200px">JAM</td>
					<td style="width: 10px">:</td>
					<td><?=$this->ion_auth->gabung_tabel_userVerifikasiSidang()->row()->jam_sidang;?></td>

				</tr>
				<tr>
					<td style="width: 200px">TEMPAT</td>
					<td style="width: 10px">:</td>
					<td><?=$this->ion_auth->gabung_tabel_userVerifikasiSidang()->row()->tempat_sidang;?></td>

				</tr>
				</table>
 <hr class="my-4">
				<h6>Reviewer </h6>
			 <table  class="table table-striped table-hover">
				<tr>
					<td style="width: 200px">REVIEWER 1</td>
					<td style="width: 10px">:</td>
					<td><?=$this->ion_auth->gabung_tabel_userVerifikasiSidang()->row()->kd_penguji1;?></td>

				</tr>
				<tr>
					<td style="width: 200px">REVIEWER 2</td>
					<td style="width: 10px">:</td>
					<td><?=$this->ion_auth->gabung_tabel_userVerifikasiSidang()->row()->kd_penguji2;?></td>

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