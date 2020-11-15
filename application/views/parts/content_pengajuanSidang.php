
<body class="mt-5" style="margin-bottom: 100px;">
	<?php 
        if(isset($error))
        {
            echo "ERROR UPLOAD : <br/>";
            print_r($error);
            echo "<hr/>";
        }
        ?>
         <?php echo form_open("mahasiswa/sidang/pengajuanSidang", array('enctype'=>'multipart/form-data')); ?>
<div class="container-fluid pb-5 pt-5">
	<div class="col-xl">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">Seminar</li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo base_url();?>index.php/mahasiswa/sidang/pengajuanSidang">Pengajuan Sidang</a></li>
				
			</ol>
		</nav>
	          <div class="card">
	            <div class="card-header">
	              <div class="row align-items-center">
	                <div class="col-8">
	                  <h3 class="mb-0 h3">Pengajuan Sidang</h3>
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
	                <h6 class="heading-small text-muted mb-4">Syarat Pengajuan Sidang</h6>
	                <div class="pl-lg-4">
	                  <div class="row">
	                    <div class="col-lg-7">
	                      <div class="form-group">
	                        <ul>
	                        	<li class="text-muted mb-4">Mahasiswa berhak mengikut Sidang jika mendapatkan persetujuan dari pembimbing berdasarkan form ini.</li>

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
	                   
	                    <center><a href="<?php echo base_url();?>index.php/mahasiswa/sidang/status_persetujuan_pengajuan">
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
<!-- =======
W<html> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.css">
    <title></title> 
</head> 
<body class="mt-3">
<div class="container p-5 mb-5">
    <h3 class="mb-2">Data Pengajuan Seminar</h3>
    <div class="row">
    <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>IPK</th>
                <th>Judul Tugas Akhir</th>
                <th>Laporan</th>
                <th>Lanjut Seminar</th>
                <th>Tidak Lanjut</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Arji Abiyoga</td>
                <td>3411171133</td>
                <td>3.9</td>
                <td>Sistem Pendukung Keputusan blabla...</td>
                <td><a href="#">laporan.txt</a></td>
                <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-check-bold"></i></button>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-fat-remove"></i></button>
                </td>
            </tr>
            
        </tbody>
    </table>
    </div>
</div>
</body>  -->
</html>

