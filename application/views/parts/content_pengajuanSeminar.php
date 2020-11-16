<style type="text/css">
	.body_content{
		background-image: url('<?php echo base_url();?>assets/img/carousel/background.jpg');
	}
</style>
<body class="mt-5 body_content" style="margin-bottom: 100px;">
	<?php 
        if(isset($error))
        {
            echo "ERROR UPLOAD : <br/>";
            print_r($error);
            echo "<hr/>";
        }
        ?>
         <?php echo form_open("mahasiswa/seminar/pengajuanSeminar", array('enctype'=>'multipart/form-data')); ?>
<div class="container-fluid pb-5 pt-5">
	<div class="col-xl">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">Seminar</li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url();?>index.php/menu_daftarSeminar/daftarSeminar">Pengajuan Seminar</a></li>
				
			</ol>
		</nav>
	          <div class="card">
	            <div class="card-header">
	              <div class="row align-items-center">
	                <div class="col-8">
	                  <h3 class="mb-0 h3">Pengajuan Seminar</h3>
	                </div>
	                <div class="col-4 text-right">
	                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#pertanyaan"><i class="ni ni-send"></i><span class="nav-link-text">Pertanyaan?</span></button>
	                  <div class="modal fade" id="pertanyaan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				        <div class="modal-dialog" role="document">
				            <div class="modal-content">
				            <div class="modal-header">
				                <h5 class="modal-title" id="exampleModalLongTitle">Pertanyaan</h5>
				                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				                <span aria-hidden="true">&times;</span>
				                </button>
				            </div>
				            <div class="modal-body">
				            	<div class="form-group text-center">
			                       	 		<label class="form-control-label" for="input-city">Silahkan hubungi Koordinator TA II</label>
			                      		</div>
				            </div>
				            <div class="modal-footer">
				                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				                
				            </div>
				            </div>
				        </div>
				        </div>
	                </div>
	              </div>
	            </div>
	            <div class="card-body">
	              <form>
	                <h6 class="heading-small text-muted mb-4">Syarat Pengajuan Seminar</h6>
	                <div class="pl-lg-4">
	                  <div class="row">
	                    <div class="col-lg-7">
	                      <div class="form-group">
	                        <ul>
	                        	<li class="text-muted mb-4">Mahasiswa berhak mengikut Seminar jika mendapatkan persetujuan dari pembimbing berdasarkan form ini.</li>

	                        </ul>
	                      </div>
	                    </div>
	                    
	                  </div>
	                
	                </div>
	                <hr class="my-4" />
	                <!-- Address -->
	                	
	                <div class="pl-lg-4">
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="form-group">
	                      	
	                      	<center><label class="form-control-label" for="input-city">UNTUK MENGISI FORM, SILAHKAN KLIK TOMBOL DIBAWAH INI.</label> <br>
	                       <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalLong"><i class="ni ni-single-copy-04"></i><span class="nav-link-text">ISI FORM</span></button></center>
					        <!-- Modal -->
					        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					        <div class="modal-dialog" role="document">
					            <div class="modal-content">
					            <div class="modal-header">
					                <h5 class="modal-title" id="exampleModalLongTitle">Silahkan isi dengan benar</h5>
					                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					                <span aria-hidden="true">&times;</span>
					                </button>
					            </div>
					            <div class="modal-body">
					            	<div class="data-mahasiswa text-center">
					            		<h5>Data Mahasiswa</h5>
					            		<hr style="width: 140px;">
						            	<div class="row">
				                   		  <div class="col-lg-12">
		                     				<div class="form-group">
				                       	 		<label class="form-control-label" for="nama_mhs">Nama Lengkap</label>
				                       	 		<input type="text" id="nama_lengkap" name="nama_lengkap" value="<?=$this->ion_auth->gabung_tabel()->row()->nama_lengkap;?>" class="form-control" required readonly>
				                      		</div>
				                   		 </div>
				                   		</div>
						            	<div class="row">
						            	<div class="col-lg-6">
				                      		<div class="form-group">
				                       	 		<label class="form-control-label" for="email">Email</label>
				                       	 		<input type="email" name="email" id="email" value="<?=$this->ion_auth->gabung_tabel()->row()->email;?>" class="form-control" required readonly>
				                      		</div>
				                   		 </div>
				                   		 <div class="col-lg-6">
		                     				 <div class="form-group">
		                     				 	<label class="form-control-label" for="nim">NIM</label>
				                       	 		<input type="text" name="nim" id="nim" value="<?=$this->ion_auth->gabung_tabel()->row()->nim;?>" class="form-control" required readonly>
											</div>
				                   		 </div>
				                   		</div>
				                   		
			                   		</div>
			                   		<div class="data-akademik text-center">
					            		<br><h5>Data Akademik</h5>
					            		<hr style="width: 140px;">
						            	<div class="row">
							            	<div class="col-lg-6">
			                     				 <div class="form-group">
					                       	 		<label class="form-control-label" for="jml_sks1">Jumlah SKS sudah lulus</label>
					                       	 		<input type="text" name="jumlah_sks_lulus" id="jumlah_sks_lulus"  value="<?=$this->ion_auth->gabung_tabel_userAkademik()->row()->jumlah_sks_lulus;?>" class="form-control" required readonly>
					                      		</div>
					                   		</div>
					                   		<div class="col-lg-6">
			                     				 <div class="form-group">
			                     				 	<label class="form-control-label" for="jml_sks2">Jumlah SKS sedang diambil</label>
					                       	 		<input type="text" name="jumlah_sks_proses" id="jumlah_sks_proses" value="<?=$this->ion_auth->gabung_tabel_userAkademik()->row()->jumlah_sks_proses;?>" class="form-control" required readonly>
												</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
				                   		 	<div class="col-lg-6">
				                      			<div class="form-group">
				                       	 			<label class="form-control-label" for="nilai_e">Jumlah nilai E</label>
				                       	 			<input type="text" name="jumlah_nilai_E" id="jumlah_nilai_E" value="<?=$this->ion_auth->gabung_tabel_userAkademik()->row()->jumlah_nilai_E;?>" class="form-control" required readonly>
				                      			</div>
				                   			</div>
				                   			<div class="col-lg-6">
		                     					<div class="form-group">
				                       	 			<label class="form-control-label" for="nilai_d">Jumlah nilai D</label>
				                       	 			<input type="text" name="jumlah_nilai_D" id="jumlah_nilai_D" value="<?=$this->ion_auth->gabung_tabel_userAkademik()->row()->jumlah_nilai_D;?>" class="form-control" required readonly>
				                      			</div>
				                   			</div>
				                   		</div>
				                   		<div class="row">
							                <div class="col-lg-12 center">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="ipk_smntr">IPK sementara</label>
					                       	 		<input type="text" id="ipk" name="ipk" value="<?=$this->ion_auth->gabung_tabel_userAkademik()->row()->ipk_sementara;?>" class="form-control" required readonly>
					                      		</div>
					                      	</div>
					                    </div>
			                   		</div>

			                   		<div class="data-tugas-akhir text-center">
					            		<br><h5>Data Tugas Akhir</h5>
					            		<hr style="width: 140px;">
						            	<div class="row">
							            	<div class="col-lg-12">
			                     				 <div class="form-group">
			                     				 	<label class="form-control-label" for="judul_ta">Judul Tugas Akhir</label>
												    <textarea class="form-control text-center" id="judul_skripsi" name="judul_skripsi" required></textarea>
					                      		</div>
					                   		</div>
				                   		</div>
				                   		
			                   		</div>
					            </div>
					            <div class="modal-footer">
					                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					                <input type="submit" class=" btn btn-warning"  name="submit" value="Simpan">
					            </div>
					            </div>
					        </div>
					        </div>
	                      </div>
	                    </div>
	                  </div>
	                 <?php echo form_close(); ?>
	                </div>
	                <hr class="my-4" />
	                <!-- Description -->
	                <h6 class="heading-small text-muted mb-4">Status Persetujuan</h6>
	                <div class="pl-lg-4">
	                  <div class="form-group">
	                   
	                   <center><a href="<?php echo base_url();?>index.php/mahasiswa/seminar/status_persetujuan_pengajuan">
    <button type="button" class="btn btn-dark"><i class="ni ni-cloud-upload-96"></i><span class="nav-link-text"> Status Persetujuan</span></button>
  </a></center>
	                  </div>
	                </div>
	              </form>
	            </div>
	          </div>
	        </div>
</div>
</body>
</html>

