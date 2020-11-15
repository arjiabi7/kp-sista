<body class="mt-5" style="margin-bottom: 100px;">
	<?php 
        if(isset($error))
        {
            echo "ERROR UPLOAD : <br/>";
            print_r($error);
            echo "<hr/>";
        }
        ?>
         <?php echo form_open("mahasiswa/sidang/daftarSidang", array('enctype'=>'multipart/form-data')); ?>
<div class="container-fluid pt-5 pb-5">
	<div class="col-xl">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">Sidang</li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url();?>index.php/mahasiswa/sidang/daftarSidang">Daftar Sidang</a></li>
			
			</ol>
		</nav>
	          <div class="card">
	            <div class="card-header">
	              <div class="row align-items-center">
	                <div class="col-8">
	                  <h3 class="mb-0 h3">Tata Cara Daftar Sidang</h3>
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
	                <h6 class="heading-small text-muted mb-4">Syarat Pendaftaran Sidang</h6>
	                <div class="pl-lg-4">
	                  <div class="row">
	                    <div class="col-lg-7">
	                      <div class="form-group">
	                        <ul>
	                        	<li class="text-muted mb-4">Telah dinyatakan lulus Seminar Tugas Akhir II.</li>
	                        	<li class="text-muted mb-4">Mengisi beberapa formulir yang telah disediakan oleh jurusan</li>
	                        	<li class="text-muted mb-4">Telah menyelesaikan seluruh SKS (di luar SKS Tugas Akhir)</li>
	                        	<li class="text-muted mb-4">Tidak ada nilai E. Lulus Mata Kuliah Inti dengan Nilai minimal C.</li>
	                        	<li class="text-muted mb-4">Telah melunasi seluruh kewajiban administrasi keuangan.</li>
	                        	<li class="text-muted mb-4">Memperbaiki hasil koreksi yang diberikan oleh Pembimbing I dan II, dan Penguji I dan II pada saat seminar Tugas Akhir II. Kemudian mendapatkan rekomendasi dan persetujuan untuk melanjutkan prosesi sidang dari Pembimbing I dan II serta Penguji I dan II.</li>
	                        	<li class="text-muted mb-4">Menyerahkan draft laporan Skripsi.</li>

	                        </ul>
	                      </div>
	                    </div>
	                    
	                  </div>
	                
	                </div>
	                <hr class="my-4" />
	                <!-- Address -->
	                <h6 class="heading-small text-muted mb-4">Form Daftar Daftar Sidang</h6>
	                	
	                <div class="pl-lg-4">
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="form-group">
	                      	<label class="text-muted mb-4">Sebelum mengisi form ini, pendaftar diharapkan membaca persyaratan yang telah dicantumkan pada Poin "Syarat Pendaftaran Sidang", dan jika progres pendaftar telah sesuai dengan persyaratan, maka pendaftar berhak mengikuti seminar.<br></label>
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
				                   		  	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="nama_mhs">Nama Lengkap</label>
					                       	 		<input type="text" id="nama_lengkap" name="nama_lengkap" value="<?=$this->ion_auth->gabung_tabel()->row()->nama_lengkap;?>" class="form-control" required readonly>
					                      		</div>
				                   		 	</div>
				                   		 	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="nim">NIM</label>
				                       	 			<input type="text" name="nim" id="nim" value="<?=$this->ion_auth->gabung_tabel()->row()->nim;?>" class="form-control" required readonly>
					                      		</div>
				                   		 	</div>
				                   		</div>
				                   		<div class="row">
				                   			<div class="col-lg-12">
				                      		<div class="form-group">
				                       	 		<label class="form-control-label" for="email">Email</label>
				                       	 		<input type="email" name="email" id="email" value="<?=$this->ion_auth->gabung_tabel()->row()->email;?>" class="form-control" required readonly>
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
				                   		<div class="row">
					                   		<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="kd_pem1">Kode Pembimbing 1</label>
					                       	 		<select class="form-control" name="kd_pembimbing1" id="kd_pembimbing1" required>
											    		<option>-</option>
											      		<option>AGK</option>
													    <option>AIH</option>
													    <option>FKI</option>
													    <option>FRU</option>
													    <option>HAY</option>
													    <option>ISR</option>
													    <option>PNS</option>
													    <option>RDI</option>
													    <option>RZK</option>
													    <option>SGO</option>
													    <option>WNI</option>
													    <option>YHC</option>
													    <option>THP</option>
													    <option>FZR</option>
													    <option>ECD</option>
													    <option>ADK</option>
													    <option>EKP</option>
													    <option>GNA</option>
													</select>
					                      		</div>
					                   		 </div>
					                   		<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="kd_pem2">Kode Pembimbing 2</label>
					                       	 		<select class="form-control" name="kd_pembimbing2" id="kd_pembimbing2" required>
											    		<option>-</option>
											      		<option>AGK</option>
													    <option>AIH</option>
													    <option>FKI</option>
													    <option>FRU</option>
													    <option>HAY</option>
													    <option>ISR</option>
													    <option>PNS</option>
													    <option>RDI</option>
													    <option>RZK</option>
													    <option>SGO</option>
													    <option>WNI</option>
													    <option>YHC</option>
													    <option>THP</option>
													    <option>FZR</option>
													    <option>ECD</option>
													    <option>ADK</option>
													    <option>EKP</option>
													    <option>GNA</option>
													</select>
					                      		</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
							                <div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="kd_peng1">Kode Penguji 1</label>
					                       	 		<select class="form-control" name="kd_penguji1" id="kd_penguji1" required>
											    		<option>-</option>
											      		<option>AGK</option>
													    <option>AIH</option>
													    <option>FKI</option>
													    <option>FRU</option>
													    <option>HAY</option>
													    <option>ISR</option>
													    <option>PNS</option>
													    <option>RDI</option>
													    <option>RZK</option>
													    <option>SGO</option>
													    <option>WNI</option>
													    <option>YHC</option>
													    <option>THP</option>
													    <option>FZR</option>
													    <option>ECD</option>
													    <option>ADK</option>
													    <option>EKP</option>
													    <option>GNA</option>
													</select>
					                      		</div>
					                      	</div>
					                      	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="kd_peng2">Kode Penguji 2</label>
					                       	 		<select class="form-control" name="kd_penguji2" id="kd_penguji2" required>
											    		<option>-</option>
											      		<option>AGK</option>
													    <option>AIH</option>
													    <option>FKI</option>
													    <option>FRU</option>
													    <option>HAY</option>
													    <option>ISR</option>
													    <option>PNS</option>
													    <option>RDI</option>
													    <option>RZK</option>
													    <option>SGO</option>
													    <option>WNI</option>
													    <option>YHC</option>
													    <option>THP</option>
													    <option>FZR</option>
													    <option>ECD</option>
													    <option>ADK</option>
													    <option>EKP</option>
													    <option>GNA</option>
													</select>
					                      		</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
							                <div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="izin_sidang_p1">Izin Maju Sidang (P1)</label>
					                       	 		<select class="form-control" name="izin_maju_p1" id="izin_maju_p1" required>
											    		<option>-</option>
											      		<option>Ya</option>
													    <option>Tidak</option>
													</select>
					                      		</div>
					                      	</div>
					                      	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="input_izin_sidang_p1">Bukti Izin (P1)</label>
				                       	 			<input type="file" class="form-control-file" id="bukti_izin_p1" name="bukti_izin_p1">
					                      		</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
				                   		  	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="izin_sidang_p2">Izin Maju Sidang (P2)</label>
					                       	 		<select class="form-control" name="izin_maju_p2" id="izin_maju_p2" required>
											    		<option>-</option>
											      		<option>Ya</option>
													    <option>Tidak</option>
													</select>
					                      		</div>
					                      	</div>
					                      	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="input_izin_sidang_p2">Bukti Izin (P2)</label>
				                       	 			<input type="file" class="form-control-file" id="bukti_izin_p2" name="bukti_izin_p2">
					                      		</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
							                <div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="izin_sidang_r1">Izin Maju Sidang (R1)</label>
					                       	 		<select class="form-control" name="izin_maju_r1" id="izin_maju_r1" required>
											    		<option>-</option>
											      		<option>Ya</option>
													    <option>Tidak</option>
													</select>
					                      		</div>
					                      	</div>
					                      	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="input_izin_sidang_r1">Bukti Izin (R1)</label>
				                       	 			<input type="file" class="form-control-file" id="bukti_izin_r1" name="bukti_izin_r1">
					                      		</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
				                   		  	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="izin_sidang_r2">Izin Maju Sidang (R2)</label>
					                       	 		<select class="form-control" id="izin_maju_r2" name="izin_maju_r2" required>
											    		<option>-</option>
											      		<option>Ya</option>
													    <option>Tidak</option>
													</select>
					                      		</div>
					                      	</div>
					                      	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="input_izin_sidang_r2">Bukti Izin (R2)</label>
				                       	 			<input type="file" class="form-control-file" id="bukti_izin_r2" name="bukti_izin_r2">
					                      		</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
				                   		  	<div class="col-lg-12">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="link_seminar">Link Video Seminar</label>
					                       	 		<input type="text" name="link_seminar" id="link_seminar" class="form-control" required>
					                      		</div>
					                      	</div>
				                   		</div>
				                   		<div class="row">
				                   		  	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="surat_perpus">Bebas Pinjam Perpus</label>
					                       	 		<input type="file" class="form-control-file" id="pinjam_perpus" name="pinjam_perpus">
					                      		</div>
					                      	</div>
					                      	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="input_khs">KHS</label>
				                       	 			<input type="file" class="form-control-file" id="khs" name="khs">
					                      		</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
				                   		  	<div class="col-lg-12">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="keterangan_nilai_kosong">Keterangan Nilai Masih Kosong</label>
					                       	 		<textarea class="form-control text-center" id="nilai_kosong" name="nilai_kosong" required></textarea>
					                      		</div>
					                      	</div>
				                   		</div>
				                   		<div class="row">
							                <div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="input_laporan">Draft Laporan TA (pdf)</label>
					                       	 		<input type="file" class="form-control-file" id="draft_laporan" name="draft_laporan">
					                      		</div>
					                      	</div>
					                      	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="input_sertifikat">Sertifikat Seminar</label>
				                       	 			<input type="file" class="form-control-file" id="sertifikat" name="sertifikat">
					                      		</div>
					                   		</div>
				                   		</div>
			                   		</div>
					            </div>
					            <div class="modal-footer">
					                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					                 <input type="submit" class=" btn btn-warning"  name="submit" value="Kirim">
					            </div>
					            </div>
					              <?php echo form_close(); ?>
					        </div>
					        </div>
	                      </div>
	                    </div>
	                  </div>
	               
	                </div>
	                <hr class="my-4" />
	                <!-- Description -->
	                <h6 class="heading-small text-muted mb-4">Status Persetujuan</h6>
	                <div class="pl-lg-4">
	                  <div class="form-group">
	                   
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
								<th>Co : 3411171107</th>
								<th>Co : Sista</th>
								<th>Co : Disetujui</th>
							</tr>
							</tbody>
						</table>
	                  </div>
	                </div>
	              </form>
	            </div>
	          </div>
	        </div>
</div>
</body>