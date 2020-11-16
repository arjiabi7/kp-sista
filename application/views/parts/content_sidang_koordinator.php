
    

<html> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.css">
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
			 	<th>Tidak Lanjut</th>
 			</tr>
        </thead>
        <tbody>
             <?php 
                $no = 1;
                foreach($daftar_sidang as $row)
                {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo$row->nama_lengkap;?></td>
                        <td><?php echo$row->nim;?></td>
                        <td><?php echo$row->judul_skripsi;?></td>
                         <td><?php echo$row->kd_pembimbing1;?></td>
                        <td><?php echo$row->kd_pembimbing2;?></td>
                         <td><?php echo$row->kd_penguji1;?></td>
                        <td><?php echo$row->kd_penguji2;?></td>
                        <td><a href="<?php echo base_url();?>upload_daftarSidang">Bukti Izin.jpg</a></td>
                        <td><?php echo$row->link_seminar;?></td>
                        <td><a href="<?php echo base_url();?>upload_daftarSidang">Bukti Lunas.jpg</a></td>
                        <td><a href="<?php echo base_url();?>upload_daftarSidang">Surat Pinjam Perpus.jpg</a></td>
                         <td><a href="<?php echo base_url();?>upload_daftarSidang">KHS.pdf</a></td>
                        <td><?php echo$row->nilai_kosong;?></td>
                        <td><a href="<?php echo base_url();?>upload_daftarSidang">Laporan TA.pdf</a></td>
                        <td><a href="<?php echo base_url();?>upload_daftarTA2">Sertifikat.pdf</a></td>
                         <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalLong"><i class="ni ni-check-bold"></i><span class="nav-link-text"></span></button>
                             
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                    
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Komentar untuk mahasiswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan komentar..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" class=" btn btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2"  name="submit" value="Kirim">
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalLong"><i class="ni ni-fat-remove"></i><span class="nav-link-text"></span></button>
                           
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                    
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Komentar untuk mahasiswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan komentar..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" class=" btn btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2"  name="submit" value="Kirim">
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                    </tr>
                <?php }  ?>
        </tbody>
    </table>
    </div>
</div>
</body> 
</html>