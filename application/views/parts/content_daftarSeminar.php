<div class="container-fluid">
	<br><center><h2>Halaman Pendaftaran Seminar</h2></center><br>
	<div class="col-xl">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">Seminar</li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url();?>index.php/menu_daftarSeminar/daftarSeminar">Daftar Seminar</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url();?>index.php/menu_daftarSeminar/daftarSeminar">Step 1</a></li>
			</ol>
		</nav>
	          <div class="card">
	            <div class="card-header">
	              <div class="row align-items-center">
	                <div class="col-8">
	                  <h3 class="mb-0 h3">Tata Cara Daftar Seminar</h3>
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
	                <h6 class="heading-small text-muted mb-4">Syarat Pendaftaran Seminar</h6>
	                <div class="pl-lg-4">
	                  <div class="row">
	                    <div class="col-lg-7">
	                      <div class="form-group">
	                        <ul>
	                        	<li class="text-muted mb-4">Minimal jumlah bimbingan Tugas Akhir II mencapai 8 x bimbingan, untuk masing-masing pembimbing.</li>
	                        	<li class="text-muted mb-4">Telah menyelesaikan naskah skripsi dengan presentasi 100%</li>
	                        	<li class="text-muted mb-4">Perangkat lunak harus selesai 100 %</li>
	                        	<li class="text-muted mb-4">Mendapat persetujuan dari Pembimbing I dan Pembimbing II</li>
	                        	<li class="text-muted mb-4">Mengajukan seminar Tugas Akhir II dengan menyerahkan formulir pendaftaran Seminar Tugas Akhir II kepada Jurusan</li>
	                        	<li class="text-muted mb-4">Melampirkan formulir bebas tunggakan</li>
	                        	<li class="text-muted mb-4">Melampirkan sertifikat kepesertaan Seminar Nasional</li>

	                        </ul>
	                      </div>
	                    </div>
	                    
	                  </div>
	                
	                </div>
	                <hr class="my-4" />
	                <!-- Address -->
	                <h6 class="heading-small text-muted mb-4">Form Daftar Daftar Seminar</h6>
	                	
	                <div class="pl-lg-4">
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="form-group">
	                      	<label class="text-muted mb-4">Sebelum mengisi form ini, pendaftar diharapkan membaca persyaratan yang telah dicantumkan pada Poin "Syarat Pendaftaran Seminar", dan jika progres pendaftar telah sesuai dengan persyaratan, maka pendaftar berhak mengikuti seminar.<br></label>
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
				                       	 		<input type="text" id="nama_mhs" class="form-control" required readonly>
				                      		</div>
				                   		 </div>
				                   		</div>
						            	<div class="row">
						            	<div class="col-lg-6">
				                      		<div class="form-group">
				                       	 		<label class="form-control-label" for="email">Email</label>
				                       	 		<input type="email" name="email" id="email" class="form-control" required readonly>
				                      		</div>
				                   		 </div>
				                   		 <div class="col-lg-6">
		                     				 <div class="form-group">
		                     				 	<label class="form-control-label" for="nim">NIM</label>
				                       	 		<input type="text" name="NIM" id="nim" class="form-control" required readonly>
											</div>
				                   		 </div>
				                   		</div>
				                   		<div class="row">
				                   		 <div class="col-lg-6">
				                      		<div class="form-group">
				                       	 		<label class="form-control-label" for="no_hp">No. HP</label>
				                       	 		<input type="text" id="no_hp" class="form-control" required readonly>
				                      		</div>
				                   		 </div>
				                   		 <div class="col-lg-6">
		                     				 <div class="form-group">
				                       	 		<label class="form-control-label" for="semester">Semester</label>
				                       	 		<select class="form-control" name="Semester" id="semester" readonly>
										    		<option>-</option>
										      		<option>8</option>
												    <option>10</option>
												    <option>12</option>
												</select>
				                      		</div>
				                   		 </div>
				                   		</div>
				                   		<div class="row">
						                <div class="col-lg-6">
		                     				 <div class="form-group">
				                       	 		<label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
				                       	 		<select class="form-control" name="jenis_kelamin" id="jenis_kelamin" readonly>
										    		<option>-</option>
										      		<option>Laki - Laki</option>
												    <option>Perempuan</option>
												</select>
				                      		</div>
				                      	</div>
				                      	<div class="col-lg-6">
		                     				 <div class="form-group">
				                       	 		<label class="form-control-label" for="peminatan">Peminatan</label>
				                       	 		<select class="form-control" name="" id="peminatan" required readonly>
										    		<option>-</option>
										      		<option>AIG</option>
												    <option>DSE</option>
												</select>
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
					                       	 		<input type="text" name="jml_sks1" id="jml_sks1" class="form-control" required readonly>
					                      		</div>
					                   		</div>
					                   		<div class="col-lg-6">
			                     				 <div class="form-group">
			                     				 	<label class="form-control-label" for="jml_sks2">Jumlah SKS sedang diambil</label>
					                       	 		<input type="text" name="jml_sks2" id="jml_sks2" class="form-control" required readonly>
												</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
				                   		 	<div class="col-lg-6">
				                      			<div class="form-group">
				                       	 			<label class="form-control-label" for="nilai_e">Jumlah nilai E</label>
				                       	 			<input type="text" id="nilai_e" class="form-control" required readonly>
				                      			</div>
				                   			</div>
				                   			<div class="col-lg-6">
		                     					<div class="form-group">
				                       	 			<label class="form-control-label" for="nilai_d">Jumlah nilai D</label>
				                       	 			<input type="text" id="nilai_d" class="form-control" required readonly>
				                      			</div>
				                   			</div>
				                   		</div>
				                   		<div class="row">
							                <div class="col-lg-12 center">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="ipk_smntr">IPK sementara</label>
					                       	 		<input type="text" id="ipk_smntr" class="form-control" required readonly>
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
												    <textarea class="form-control text-center" id="judul_ta" required></textarea>
					                      		</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
					                   		<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="kd_pem1">Kode Pembimbing 1</label>
					                       	 		<select class="form-control" name="kd_pem1" id="kd_pem1" required>
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
					                       	 		<select class="form-control" name="kd_pem2" id="kd_pem2" required>
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
					                       	 		<label class="form-control-label" for="izin_seminar_p1">Izin Maju Seminar (P1)</label>
					                       	 		<select class="form-control" name="izin_p1" id="izin_seminar_p1" required>
											    		<option>-</option>
											      		<option>Ya</option>
													    <option>Tidak</option>
													</select>
					                      		</div>
					                      	</div>
					                      	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="input_izin_seminar_p1">Bukti Izin (P1)</label>
				                       	 			<input type="file" class="form-control-file" id="input_izin_seminar_p1">
					                      		</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
				                   		  	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="izin_seminar_p2">Izin Maju Seminar (P2)</label>
					                       	 		<select class="form-control" name="izin_p2" id="izin_seminar_p2" required>
											    		<option>-</option>
											      		<option>Ya</option>
													    <option>Tidak</option>
													</select>
					                      		</div>
					                      	</div>
					                      	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="input_izin_seminar_p2">Bukti Izin (P2)</label>
				                       	 			<input type="file" class="form-control-file" id="input_izin_seminar_p2">
					                      		</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
				                   		 	<div class="col-lg-6">
				                      			<div class="form-group">
				                       	 			<label class="form-control-label" for="jml_bimbi1">Jumlah Bimbingan (P1)</label>
				                       	 			<input type="text" id="jml_bimbi1" class="form-control" required>
				                      			</div>
				                   			</div>
				                   			<div class="col-lg-6">
		                     					<div class="form-group">
				                       	 			<label class="form-control-label" for="jml_bimbi2">Jumlah Bimbingan (P2)</label>
				                       	 			<input type="text" id="jml_bimbi2" class="form-control" required>
				                      			</div>
				                   			</div>
				                   		</div>
				                   		<div class="row">
				                   		  	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="pembayaran">Pelunasan Pembayaran Kuliah</label>
					                       	 		<select class="form-control" name="pembayaran" id="pembayaran" required>
											    		<option>-</option>
											      		<option>Ya</option>
													    <option>Tidak</option>
													</select>
					                      		</div>
					                      	</div>
					                      	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="input_lunas">Bukti Pelunasan</label>
				                       	 			<input type="file" class="form-control-file" id="input_lunas">
					                      		</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
							            	<div class="col-lg-12">
			                     				 <div class="form-group">
			                     				 	<label class="form-control-label" for="isi_matkul">Tulis Mata Kuliah Yang diambil Selain TA2</label>
												    <textarea class="form-control text-center" id="isi_matkul" required></textarea>
					                      		</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
				                   		  	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="input_laporan">Draft Laporan TA (pdf)</label>
				                       	 			<input type="file" class="form-control-file" id="input_laporan">
					                      		</div>
					                      	</div>
					                      	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="input_khs">Scan KHS</label>
				                       	 			<input type="file" class="form-control-file" id="input_khs">
					                      		</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
							            	<div class="col-lg-6">
			                     				 <div class="form-group">
			                     				 	<center><label class="form-control-label" for="input_sertifikat">Sertifikat Seminar</label>
				                       	 			<input type="file" class="form-control-file" id="input_sertifikat"></center>
					                      		</div>
					                   		</div>
				                   		</div>
			                   		</div>
					            </div>
					            <div class="modal-footer">
					                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					                <button type="button" class="btn btn-warning">Kirim</button>
					            </div>
					            </div>
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