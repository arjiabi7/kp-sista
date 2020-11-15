<body class="mt-5" style="margin-bottom: 100px;">
<div class="container-fluid pb-5 pt-5">
	<div class="col-xl">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">Seminar</li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url();?>index.php/mahasiswa/seminar/daftarSeminar">Daftar Seminar</a></li>
				
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url();?>index.php/mahasiswa/seminar/status_persetujuan_seminar">Status Persetujuan Seminar</a></li>
			</ol>
		</nav>
		<div class="card">
	            <div class="card-header">
	            	<div class="row pl-3">

	                 <h3 class="mb-0 h3">Status Persetujuan Seminar</h3>
	             </div>

	            </div>
	            <div class="card-body">
	            	  <table class="table table-bordered table-striped">
							<thead>
								<tr style="background-color: #fad96e">
									<th>NIM</th>
									<th>Nama</th>
									<th>Status Persetujuan</th>
												
								</tr>
							</thead>
							<tbody>
							<tr>
								<th><?=$this->ion_auth->gabung_tabel_userVerifikasiSeminar()->row()->nim?></th>
								<th><?=$this->ion_auth->gabung_tabel_userVerifikasiSeminar()->row()->nim?></th>
								<th><?php 
									if ($this->ion_auth->gabung_tabel_userVerifikasiSeminar()->row()->status == NULL) {
										echo "Diproses";
									}else{
										echo $this->ion_auth->gabung_tabel_userVerifikasiSeminar()->row()->status;
									}
								?></th>
							</tr>
							</tbody>
						</table>
	            </div>
	     </div>
	</div>
</div>

</body>