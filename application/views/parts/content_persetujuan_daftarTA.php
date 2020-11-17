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
<style type="text/css">
	.body_content{
		background-image: url('<?php echo base_url();?>assets/img/carousel/background.jpg');
	}
</style>
<body class="mt-5 body_content" style="margin-bottom: 100px;">
<div class="container-fluid pb-5 pt-5">
	<div class="col-xl">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">Daftar TA II</li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url();?>index.php/mahasiswa/daftarTA2">Form Daftar</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url();?>index.php/mahasiswa/daftarTA2/status_persetujuan">Status Persetujuan DAFTAR TA II</a></li>
			</ol>
		</nav>
		<div class="card">
	            <div class="card-header">
	            	<div class="row pl-3">

	                 <h3 class="mb-0 h3">Status Persetujuan DAFTAR TA II</h3>
	             </div>

	            </div>
	            <div class="card-body">
	            	 <table class="table table-bordered table-striped">
							<thead>
								<tr style="background-color: #fad96e">
									<th>NIM</th>
									<th>Nama</th>
									<th>Status Persetujuan</th>
									<th>Komentar dari koordinator</th>			
								</tr>
							</thead>
							<tbody>
							<tr>

								<th><?=$this->ion_auth->gabung_tabel_userVerifikasiDaftarTA()->row()->nim?></th>
								<th><?=$this->ion_auth->gabung_tabel_userVerifikasiDaftarTA()->row()->nama_lengkap?></th>
								<th><?php
									if($this->ion_auth->gabung_tabel_userVerifikasiDaftarTA()->row()->status == NULL && $this->ion_auth->gabung_tabel_userVerifikasiDaftarTA()->row()->komentar_ta2 == NULL ){
										echo "Diproses";
									}else if($this->ion_auth->gabung_tabel_userVerifikasiDaftarTA()->row()->status == NULL && $this->ion_auth->gabung_tabel_userVerifikasiDaftarTA()->row()->komentar_ta2 != NULL){
										echo "Disetujui";
									}else{
										echo $this->ion_auth->gabung_tabel_userVerifikasiDaftarTA()->row()->status;
									}

									?></th>
								<th>
									<?php
								
								 	if($this->ion_auth->gabung_tabel_userVerifikasiDaftarTA()->row()->komentar_ta2 == NULL){
										echo "-";
									}else{
										echo $this->ion_auth->gabung_tabel_userVerifikasiDaftarTA()->row()->komentar_ta2;
									}
									?>
								</th>
							</tr>
							</tbody>
						</table>
	            </div>
	     </div>
	</div>
</div>

</body>