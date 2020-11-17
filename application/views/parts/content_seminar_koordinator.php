
    

<html> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.css">
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
    <title></title> 
</head> 
<body class="mt-5">
<div class="container-fluid p-5 mb-5">
    <h3>Data Seminar</h3>
    <div class="row">
    <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
        <thead>
            <tr>
            	<td>No.</td>
                <th>Id.</th>
			 	<th>Nama</th>
			 	<th>NIM</th>
			 	<th>Jumlah SKS</th>
			 	<th>IPK</th>
			 	<th>Jumlah Nilai D</th>
			 	<th>Jumlah Nilai E</th>
			 	<th>Judul Tugas Akhir</th>
			 	<th>Pembimbing 1</th>
			 	<th>Pembimbing 2</th>

			 	<th>Jumlah Bimbingan (P1)</th>
			 	<th>Jumlah Bimbingan (P2)</th>
			 	<th>Bukti Pelunasan</th>
			 	<th>KHS</th>
			 	<th>Laporan TA</th>
			 	<th>Sertifikat</th>
			 	<th>Lanjut Seminar</th>
                <th>Penjadwalan</th>
			 
 			</tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach($data->result_array() as $row)
                :
            $id=$row['id'];
            $nama_lengkap=$row['nama_lengkap'];
            $nim=$row['nim'];
            $email=$row['email'];
            $jumlah_sks_lulus=$row['jumlah_sks_lulus'];
            $ipk=$row['ipk'];
            $jumlah_nilai_D=$row['jumlah_nilai_D'];
            $jumlah_nilai_E=$row['jumlah_nilai_E'];
            $judul_skripsi=$row['judul_skripsi'];
            $pembimbing_1=$row['pembimbing_1'];
            $pembimbing_2=$row['pembimbing_2'];
            $jml_bimbingan1=$row['jml_bimbingan1'];
            $jml_bimbingan2=$row['jml_bimbingan2'];
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $id;?></td>
                        <td><?php echo $nama_lengkap;?></td>
                        <td><?php echo $nim;?></td>
                        <td><?php echo$jumlah_sks_lulus;?></td>
                        <td><?php echo$ipk;?></td>
                        <td><?php echo$jumlah_nilai_D;?></td>
                        <td><?php echo$jumlah_nilai_E;?></td>
                        <td><?php echo$judul_skripsi;?></td>
                        <td><?php echo$pembimbing_1;?></td>
                        <td><?php echo$pembimbing_2;?></td>
                        <td><?php echo$jml_bimbingan1;?></td>
                        <td><?php echo$jml_bimbingan2;?></td>
                        <td><a href="<?php echo base_url();?>upload_daftarSeminar">Bukti Lunas.jpg</a></td>
                        <td><a href="<?php echo base_url();?>upload_daftarTA2">KHS.pdf</a></td>
                        <td><a href="<?php echo base_url();?>upload_daftarTA2">Laporan TA.pdf</a></td>
                        <td><a href="<?php echo base_url();?>upload_daftarTA2">Sertifikat.pdf</a></td>
                        <td>
                <a class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal_edit<?php echo $id;?>"> Verifikasi</a></td>
                <td>
                <a class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModalLong<?php echo $id;?>"> Tentukan Jadwal</a></td>
                                   </tr>
                <?php
               endforeach;
                ?>
            </tbody>
    </table>


          <?php
        foreach($data->result_array() as $row):
           
            $id=$row['id'];
          
            $status=$row['status'];
            $komentar_seminar=$row['komentar_seminar'];
          
        ?>
                    <div class="modal fade" id="modal_edit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                         <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/koordinator/koordinator/edit_daftarSeminar'?>">           
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Form Persetujuan & Komentar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" id="ipk" name="id" value="<?php echo $id?>" class="form-control" required readonly>

                                    <label class="form-control-label" for="kd_pem1">Persetujuan</label>
                                                    <select class="form-control" name="status" id="status" value="<?php echo $status; ?>" required>
                                                        <option>-</option>
                                                        <option>SETUJU</option>
                                                        <option>TIDAK</option>
                                                       
                                                    </select>
                                                    <label class="form-control-label" for="kd_pem1">Komentar</label>
                                    <textarea class="form-control" name="komentar_seminar" id="komentar_seminar" id="exampleFormControlTextarea1" value="<?php echo $komentar_seminar;?>" rows="3" placeholder="Tuliskan komentar..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" class=" btn btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2"  name="submit" value="Kirim">
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </td>
             <?php endforeach;?>
                    </tr>


  <?php
        foreach($data->result_array() as $row):
           
            $id=$row['id'];
          
            $hari_seminar=$row['hari_seminar'];
            $tgl_seminar=$row['tgl_seminar'];
            $jam_seminar=$row['jam_seminar'];
            $tempat_seminar=$row['tempat_seminar'];
            $kd_penguji1=$row['kd_penguji1'];
            $kd_penguji2=$row['kd_penguji2'];
          
        ?>
                    <div class="modal fade" id="exampleModalLong<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/koordinator/koordinator/edit_jadwal_seminar'?>">  
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Silahkan isi dengan benar</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    
                                <input type="text" id="ipk" name="id" value="<?php echo $id?>" class="form-control" required readonly>
                                    <div class="data-akademik text-center">
                                        <br><h5>Jadwal Seminar</h5>
                                        <hr style="width: 140px;">
                                        <div class="row">
                                        <div class="col-lg-6">
                                             <div class="form-group">
                                                <label class="form-control-label" for="jenis_kelamin">Hari Seminar</label>
                                                <input type="text" id="hari_seminar" name="hari_seminar"  class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                             <div class="form-group">
                                                <label class="form-control-label" for="peminatan">Tgl Seminar</label>
                                                <input type="date" id="tgl_seminar" name="tgl_seminar"  class="form-control" required>
                                            </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6">
                                             <div class="form-group">
                                                <label class="form-control-label" for="jenis_kelamin">Jam Seminar</label>
                                                <input type="text" id="jam_seminar" name="jam_seminar"  class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                             <div class="form-group">
                                                <label class="form-control-label" for="peminatan">Tempat Seminar</label>
                                                <input type="text" id="tempat_seminar" name="tempat_seminar"  class="form-control" required>
                                            </div>
                                         </div>
                                        </div>
                                    </div>
                                    <div class="data-akademik text-center">
                                        <br><h5>Pilih Penguji</h5>
                                        <hr style="width: 140px;">
                                        <div class="row">
                                        <div class="col-lg-6">
                                             <label class="form-control-label" for="kd_pem1">Kode Penguji 1</label>
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
                                        <div class="col-lg-6">
                                             <label class="form-control-label" for="kd_pem1">Kode Penguji 2</label>
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

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" class=" btn btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2"  name="submit" value="Kirim">
                                </div>
                                </div>
                           </form>
                            </div>
                            </div>
                           
                          </div>
                        </div>
                      </div>
                   
                    </div>
                    <hr class="my-4" />
                     <?php endforeach;?>
        
    </div>
</div>
</body> 
</html>