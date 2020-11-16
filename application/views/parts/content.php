
	

<html> 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.css">
	<title>Tutorial Membuat Carousel Dengan Bootstrap 4 - www.malasngoding.com</title> 
</head> 
<style type="text/css">
	.body_content{
		background-image: url('<?php echo base_url();?>assets/img/carousel/background.jpg');
	}
</style>

<body class="mt-5 body_content" style="margin-bottom: 100px;"> 
 	<div class="container-fluid pb-5">
 	<br><center>
	<div class="col-md-8 col-md-offset-2">
		<div class="bd-example">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo base_url();?>assets/img/carousel/banner3.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url();?>assets/img/carousel/banner4.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="jumbotron jumbotron-fluid bg-dark text-white">
  		<div class="container-fluid">
    		<h1 class="display-4">Hai, <?=$this->ion_auth->gabung_tabel()->row()->nama_lengkap;?> !</h1>
    		<p class="lead">Selamat datang di SISTA, dengan menggunakan aplikasi ini anda dapat lebih mudah untuk melakukan proses pelaksanaan Tugas Akhir. Selamat Mencoba!</p>
    		<div class="col-xl-12">
    			<button type="button" class="btn btn-icon btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
    			<i class="ni ni-hat-3"></i>
    			<span class="nav-link-text">Profile</span>
    			</button>
				<div class="row">
	  				<div class="col-lg-12">
	   					<div class="collapse multi-collapse" id="multiCollapseExample2">
	     				<div class="card card-body bg-dark border-0">
	        				<form>
		        				<table style="font-family: courier;">
						        	<tr>
						        		<td style="width: 130px;">Nama Lengkap</td>
						        		<td style="width: 30px;">:</td>
						        		<td> <?=$this->ion_auth->gabung_tabel()->row()->nama_lengkap;?></td>
						        	</tr>
						        	<tr>
						        		<td>NIM</td>
						        		<td>:</td>
						        		<td> <?=$this->ion_auth->gabung_tabel()->row()->nim;?></td>
						        	</tr>
						        	<tr>
						        		<td>Status</td>
						        		<td>:</td>
						        		<td> <?=$this->ion_auth->gabung_tabel()->row()->status;?></td>
						        	</tr>
						        	<tr>
						        		<td>Prodi</td>
						        		<td>:</td>
						        		<td>Informatika</td>
						        	</tr>
						        	<tr>
						        		<td>Program</td>
						        		<td>:</td>
						        		<td>Reguler</td>
						        	</tr>
						        	<tr>
						        		<td>Jumlah SKS</td>
						        		<td>:</td>
						        		<td>18</td>
						        	</tr>
		        				</table>
	        				</form>
	      				</div>
	    			</div>
	  				</div>
				</div>
        	</div>
    		<hr class="my-4">
  		</div>
		</div>
 	</div>
 	</center>

	</div>
 
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/popper.js"></script>
</body> 
</html>