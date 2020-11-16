
    

<html> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.css">
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
			 	<th>Tidak Lanjut</th>
 			</tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach($daftar_seminar as $row)
                {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo$row->nama_lengkap;?></td>
                        <td><?php echo$row->nim;?></td>
                        <td><?php echo$row->jumlah_sks_lulus;?></td>
                        <td><?php echo$row->ipk;?></td>
                        <td><?php echo$row->jumlah_nilai_D;?></td>
                        <td><?php echo$row->jumlah_nilai_E;?></td>
                        <td><?php echo$row->judul_skripsi;?></td>
                        <td><?php echo$row->pembimbing_1;?></td>
                        <td><?php echo$row->pembimbing_2;?></td>
                        <td><?php echo$row->jml_bimbingan1;?></td>
                        <td><?php echo$row->jml_bimbingan2;?></td>
                        <td><a href="<?php echo base_url();?>upload_daftarSeminar">Bukti Lunas.jpg</a></td>
                        <td><a href="<?php echo base_url();?>upload_daftarTA2">KHS.pdf</a></td>
                        <td><a href="<?php echo base_url();?>upload_daftarTA2">Laporan TA.pdf</a></td>
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
                <?php } ?>
        </tbody>
    </table>
    </div>
</div>
</body> 
</html>