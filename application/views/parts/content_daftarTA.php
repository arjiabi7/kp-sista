<body class="mt-5" style="margin-bottom: 100px;">
	<?php 
        if(isset($error))
        {
            echo "ERROR UPLOAD : <br/>";
            print_r($error);
            echo "<hr/>";
        }
        ?>
         <?php echo form_open("mahasiswa/daftarTA2/tambah", array('enctype'=>'multipart/form-data')); ?>
<div class="container-fluid pb-5 pt-5">
	<div class="col-xl">
	          <div class="card">
	            <div class="card-header">
	              <div class="row pl-3">
<<<<<<< HEAD
	                 <h3 class="mb-0 h3">Form DAFTAR TA II</h3>
=======
	                 <h3 class="mb-0 h3">Tata Cara Daftar TA II</h3>
>>>>>>> dc187572e9df217fd94570803812ea8ea5a013d3
	              </div>
	            </div>
	            <div class="card-body">
	              <form>
	                <h6 class="heading-small text-muted mb-4">Syarat mengambil mata kuliah TA II</h6>
	                <div class="pl-lg-4">
	                  <div class="row">
	                    <div class="col-lg-7">
	                      <div class="form-group">
	                        <ul>
	                        	<li class="text-muted mb-4">Telah lulus Mata Kuliah Kerja Praktik dan Tugas Akhir I</li>
	                        	<li class="text-muted mb-4">Telah mengambil beban kuliah sebanyak 124 SKS</li>
	                        </ul>
	                      </div>
	                    </div>
	                    
	                  </div>
	                
	                </div>
	                <hr class="my-4" />
	                <!-- Address -->
	                <h6 class="heading-small text-muted mb-4">Form Daftar TA II</h6>
	                	
	                <div class="pl-lg-4">
	                  <div class="row">
	                    <div class="col-md-12">
	                      <div class="form-group">
	                      	<label class="text-muted mb-4">Form ini diisi oleh mahasiswa yang mendaftar Tugas Akhir 2 di akhir semester. Sebelum mengisi form, silahkan baca terlebih dahulu Persyratannya. Dengan mengisi Form ini, Mahasiswa dinyatakan siap untuk mengikuti segala bentuk pelaksanaan Tugas Akhir II <br></label>
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
				                   		<div class="row">
				                   		 <div class="col-lg-6">
				                      		<div class="form-group">
				                       	 		<label class="form-control-label" for="no_hp">No. HP</label>
				                       	 		<input type="text" id="no_hp" name="no_hp" value="<?=$this->ion_auth->gabung_tabel()->row()->no_hp;?>" class="form-control" required readonly>
				                      		</div>
				                   		 </div>
				                   		 <div class="col-lg-6">
		                     				 <div class="form-group">
				                       	 		<label class="form-control-label" for="semester">Semester</label>
				                       	 		<input type="text" name="semester" id="semester" value="<?=$this->ion_auth->gabung_tabel()->row()->semester;?>" class="form-control" required readonly>
				                      		</div>
				                   		 </div>
				                   		</div>
				                   		<div class="row">
						                <div class="col-lg-6">
		                     				 <div class="form-group">
				                       	 		<label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
				                       	 		<input type="text" id="jk" name="jk" value="<?=$this->ion_auth->gabung_tabel()->row()->jk;?>" class="form-control" required readonly>
				                      		</div>
				                      	</div>
				                      	<div class="col-lg-6">
		                     				 <div class="form-group">
				                       	 		<label class="form-control-label" for="peminatan">Peminatan</label>
				                       	 		<input type="text" id="peminatan" name="peminatan" value="<?=$this->ion_auth->gabung_tabel()->row()->peminatan;?>" class="form-control" required readonly>
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
							                <div class="col-lg-6 center">
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
												    <textarea class="form-control text-center" name="judul_skripsi" id="judul_skripsi" required></textarea>
					                      		</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
					                   		<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="kd_pem1">Kode Pembimbing 1</label>
					                       	 		<select class="form-control" name="pembimbing_1" id="pembimbing_1" required>
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
					                       	 		<select class="form-control" name="pembimbing_2" id="pembimbing_2" required>
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
				                   		<!-- <div class="row">
							                <div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="kd_peng1">Kode Penguji 1</label>
					                       	 		<select class="form-control" name="kd_peng1" id="kd_peng1" required>
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
					                       	 		<select class="form-control" name="kd_peng2" id="kd_peng2" required>
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
				                   		</div> -->
				                   		<div class="row">
				                   		  	<div class="col-lg-6">
		                     					<div class="form-group">
				                       	 			<label class="form-control-label" for="input_khs">Scan KHS</label>
				                       	 			<input type="file" name="khs" class="form-control-file" id="khs">
				                      			</div>
				                   		 	</div>
				                   			<div class="col-lg-6">
		                     					<div class="form-group">
				                       	 			<label class="form-control-label" for="input_krs">Screenshot KRS</label>
				                       	 			<input type="file" name="krs" class="form-control-file" id="krs">
				                      			</div>
				                   		 	</div>
				                   		</div>
			                   		</div>
					            </div>
					            <div class="modal-footer">
					                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					                <input type="submit" class=" btn btn-warning"  name="submit" value="Kirim">
					            </div>
					            </div>
					       
					        </div>
					        </div>
					   		<?php echo form_close(); ?>
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
<<<<<<< HEAD
								<th><?=$this->ion_auth->gabung_tabel_userVerifikasiDaftarTA()->row()->nim?></th>
								<th><?=$this->ion_auth->gabung_tabel_userVerifikasiDaftarTA()->row()->nama_lengkap?></th>
								<th><?=$this->ion_auth->gabung_tabel_userVerifikasiDaftarTA()->row()->status?></th>
=======
								<th>Co : 3411171107</th>
								<th>Co : Sista</th>
								<th>Co : </th>
>>>>>>> dc187572e9df217fd94570803812ea8ea5a013d3
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