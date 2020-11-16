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
								if($this->ion_auth->gabung_tabel_userVerifikasiDaftarTA()->row()->status == NULL){
										echo "Diproses";
									}else{
										echo $this->ion_auth->gabung_tabel_userVerifikasiDaftarTA()->row()->status;
									}?></th>
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