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
<body>
	<center>
	<div class="container-fluid pt-5">
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
					<th> <?=@$_SESSION['identity'];?></th>
			
				</tr>
			
			
				<tr>
					<td style="width: 200px">NAMA</td>
					<td>:</td>
					<td>Dika Arji</td>
					
				</tr>
				<tr>
					<td>PEMINATAN</td>
					<td>:</td>
					<td>DSE</td>

				</tr>
				<tr>
					<td>JUDUL</td>
					<td>:</td>
					<td>MEMBUAT SISTEM INFORMASI TUGAS AKHIR</td>

				</tr>
			</table>
			 <hr class="my-4">
			 <h6>Jadwal Seminar </h6>
			 <table  class="table table-striped table-hover">
				<tr>
					<td style="width: 200px">HARI</td>
					<td style="width: 10px">:</td>
					<td>SELASA</td>

				</tr>
				<tr>
					<td style="width: 200px">TANGGAL</td>
					<td style="width: 10px">:</td>
					<td>20 NOVEMBER 2020</td>

				</tr>
				<tr>
					<td style="width: 200px">JAM</td>
					<td style="width: 10px">:</td>
					<td>08.00 AM</td>

				</tr>
				<tr>
					<td style="width: 200px">TEMPAT</td>
					<td style="width: 10px">:</td>
					<td>R.1-3</td>

				</tr>
				</table>
 <hr class="my-4">
				<h6>Reviewer </h6>
			 <table  class="table table-striped table-hover">
				<tr>
					<td style="width: 200px">REVIEWER 1</td>
					<td style="width: 10px">:</td>
					<td>HAY</td>

				</tr>
				<tr>
					<td style="width: 200px">REVIEWER 2</td>
					<td style="width: 10px">:</td>
					<td>FZR</td>

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