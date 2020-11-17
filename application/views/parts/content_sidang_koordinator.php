
    

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
    <h3>Data Sidang</h3>
    <div class="row">
    <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <td>ID.</td>
			 	<th>Nama</th>
			 	<th>NIM</th>
                <th>JUDUL</th>
			 	<th>Pembimbing 1</th>
			 	<th>Pembimbing 2</th>
			 	<th>Penguji 1</th>
			 	<th>Penguji 2</th>
			 	<th>Bukti Izin</th>
			 	<th>Link Video Seminar</th>
			 	<th>Bukti Pelunasan</th>
			 	<th>Surat Bebas Pinjam</th>
			 	<th>KHS</th>
			 	<th>Ket. Nilai Kosong</th>
			 	<th>Laporan TA</th>
			 	<th>Sertifikat</th>
			 	<th>Lanjut Sidang</th>
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
            $judul_skripsi=$row['judul_skripsi'];
            $kd_pembimbing1=$row['kd_pembimbing1'];
            $kd_pembimbing2=$row['kd_pembimbing2'];
            $kd_penguji1=$row['kd_penguji1'];
            $kd_penguji2=$row['kd_penguji2'];
            $link_seminar=$row['link_seminar'];
            $nilai_kosong=$row['nilai_kosong'];
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $id;?></td>
                        <td><?php echo$nama_lengkap;?></td>
                        <td><?php echo$nim;?></td>
                        <td><?php echo$judul_skripsi;?></td>
                         <td><?php echo$kd_pembimbing1;?></td>
                        <td><?php echo$kd_pembimbing2;?></td>
                         <td><?php echo$kd_penguji1;?></td>
                        <td><?php echo$kd_penguji2;?></td>
                        <td><a href="<?php echo base_url();?>upload_daftarSidang">Bukti Izin.jpg</a></td>
                        <td><?php echo$link_seminar;?></td>
                        <td><a href="<?php echo base_url();?>upload_daftarSidang">Bukti Lunas.jpg</a></td>
                        <td><a href="<?php echo base_url();?>upload_daftarSidang">Surat Pinjam Perpus.jpg</a></td>
                         <td><a href="<?php echo base_url();?>upload_daftarSidang">KHS.pdf</a></td>
                        <td><?php echo$nilai_kosong;?></td>
                        <td><a href="<?php echo base_url();?>upload_daftarSidang">Laporan TA.pdf</a></td>
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
            $komentar_sidang=$row['komentar_sidang'];
          
        ?>
                   <div class="modal fade" id="modal_edit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                         <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/koordinator/koordinator/edit_daftarSidang'?>">           
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
                                    <textarea class="form-control" name="komentar_sidang" id="komentar_sidang" id="exampleFormControlTextarea1" value="<?php echo $komentar_sidang;?>" rows="3" placeholder="Tuliskan komentar..."></textarea>
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
          
            $hari_sidang=$row['hari_sidang'];
            $tgl_sidang=$row['tgl_sidang'];
            $jam_sidang=$row['jam_sidang'];
            $tempat_sidang=$row['tempat_sidang'];

          
        ?>
                    <div class="modal fade" id="exampleModalLong<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/koordinator/koordinator/edit_jadwal_sidang'?>">  
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
                                        <br><h5>Jadwal Sidang</h5>
                                        <hr style="width: 140px;">
                                        <div class="row">
                                        <div class="col-lg-6">
                                             <div class="form-group">
                                                <label class="form-control-label" for="jenis_kelamin">Hari Sidang</label>
                                                <input type="text" id="hari_sidang" name="hari_sidang"  class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                             <div class="form-group">
                                                <label class="form-control-label" for="peminatan">Tgl sidang</label>
                                                <input type="date" id="tgl_sidang" name="tgl_sidang"  class="form-control" required>
                                            </div>
                                         </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6">
                                             <div class="form-group">
                                                <label class="form-control-label" for="jenis_kelamin">Jam sidang</label>
                                                <input type="text" id="jam_sidang" name="jam_sidang"  class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                             <div class="form-group">
                                                <label class="form-control-label" for="peminatan">Tempat sidang</label>
                                                <input type="text" id="tempat_sidang" name="tempat_sidang"  class="form-control" required>
                                            </div>
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