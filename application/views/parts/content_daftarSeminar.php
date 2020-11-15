<body class="mt-5" style="margin-bottom: 100px;">
	<?php 
        if(isset($error))
        {
            echo "ERROR UPLOAD : <br/>";
            print_r($error);
            echo "<hr/>";
        }
        ?>
         <?php echo form_open("mahasiswa/seminar/daftarSeminar", array('enctype'=>'multipart/form-data')); ?>
<div class="container-fluid pb-5 pt-5">
	<div class="col-xl">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">Seminar</li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url();?>index.php/mahasiswa/seminar/daftarSeminar">Daftar Seminar</a></li>
				
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
				                       	 		<input type="text" id="semester" name="semester" value="<?=$this->ion_auth->gabung_tabel()->row()->semester;?>" class="form-control" required readonly>
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
				                   		<div class="row">
				                   		 	<div class="col-lg-6">
				                      			<div class="form-group">
				                       	 			<label class="form-control-label" for="jml_bimbi1">Jumlah Bimbingan (P1)</label>
				                       	 			<input type="text" id="jml_bimbingan1" name="jml_bimbingan1" class="form-control" required>
				                      			</div>
				                   			</div>
				                   			<div class="col-lg-6">
		                     					<div class="form-group">
				                       	 			<label class="form-control-label" for="jml_bimbi2">Jumlah Bimbingan (P2)</label>
				                       	 			<input type="text" id="jml_bimbingan2" name="jml_bimbingan2" class="form-control" required>
				                      			</div>
				                   			</div>
				                   		</div>
				                   		<div class="row">
				                   		  	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="pembayaran">Pelunasan Pembayaran Kuliah</label>
					                       	 		<select class="form-control" name="pelunasan" id="pelunasan" required>
											    		<option>-</option>
											      		<option>Lunas</option>
													    <option>Belum Lunas</option>
													</select>
					                      		</div>
					                      	</div>
					                      	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="input_lunas">Bukti Pelunasan</label>
				                       	 			<input type="file" class="form-control-file" name="bukti_lunas" id="bukti_lunas" value="Bukti_lunas">
					                      		</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
							            	<div class="col-lg-12">
			                     				 <div class="form-group">
			                     				 	<label class="form-control-label" for="isi_matkul">Tulis Mata Kuliah Yang diambil Selain TA2</label>
												    <textarea class="form-control text-center" id="matkul_sedang_diambil" name="matkul_sedang_diambil" required></textarea>
					                      		</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
				                   		  	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="input_laporan">Draft Laporan TA (pdf)</label>
				                       	 			<input type="file" class="form-control-file" name="draft_laporan" id="draft_laporan" value="Draft_Laporan">
					                      		</div>
					                      	</div>
					                      	<div class="col-lg-6">
			                     				<div class="form-group">
					                       	 		<label class="form-control-label" for="input_khs">Scan KHS</label>
				                       	 			<input type="file" class="form-control-file" name="khs" id="khs">
					                      		</div>
					                   		</div>
				                   		</div>
				                   		<div class="row">
							            	<div class="col-lg-6">
			                     				 <div class="form-group">
			                     				 	<center><label class="form-control-label" for="input_sertifikat">Sertifikat Seminar</label>
				                       	 			<input type="file" class="form-control-file" name="sertifikat" id="sertifikat"></center>
					                      		</div>
					                   		</div>
				                   		</div>
			                   		</div>
					            </div>
					            <div class="modal-footer">
					                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					                <input type="submit"  name="submit" value="Simpan">
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
	                   
	                   <center><a href="<?php echo base_url();?>index.php/mahasiswa/seminar/status_persetujuan_seminar">
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