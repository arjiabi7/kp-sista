                            
    

<html> 
<head> 

    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.css">
    <title></title> 
</head> 
<body class="mt-5">
<div class="container-fluid p-5 mb-5">
    <h3>Data Pengajuan Sidang</h3>
    <div class="row">
        <br>
        <br>
    <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>ID.</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jumlah SKS Proses</th>
                <th>Jumlah SKS Lulus</th>
                
                <th>Jumlah Nilai D</th>
                <th>Jumlah Nilai E</th>
                <th>IPK</th>
                <th>Judul Tugas Akhir</th>
                <th>Lanjut TA</th>

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
            $jumlah_sks_proses=$row['jumlah_sks_proses'];
            $jumlah_sks_lulus=$row['jumlah_sks_lulus'];
            $jumlah_nilai_D=$row['jumlah_nilai_D'];
            $jumlah_nilai_E=$row['jumlah_nilai_E'];
            $ipk=$row['ipk'];
            $judul_skripsi=$row['judul_skripsi'];
        
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $id;?></td>
                        <td><?php echo$nama_lengkap;?></td>
                        <td><?php echo$nim;?></td>
                        <td><?php echo$jumlah_sks_proses;?></td>
                        <td><?php echo$jumlah_sks_lulus;?></td>
                        <td><?php echo$jumlah_nilai_D;?></td>
                        <td><?php echo$jumlah_nilai_E;?></td>
                        <td><?php echo$ipk;?></td>
                        <td><?php echo$judul_skripsi;?></td>
                        <td>
                        <a class="btn btn-xs btn-warning" data-toggle="modal" data-target="#modal_edit<?php echo $id;?>"> Verifikasi</a></td>
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
            $komentar_pengajuan_sidang=$row['komentar_pengajuan_sidang'];
          
        ?>
                    <div class="modal fade" id="modal_edit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                         <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/pembimbing/pembimbing/edit_pengajuan_sidang'?>">           
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
                                    <textarea class="form-control" name="komentar_pengajuan_sidang" id="komentar_pengajuan_sidang" id="exampleFormControlTextarea1" value="<?php echo $komentar_pengajuan_sidang;?>" rows="3" placeholder="Tuliskan komentar..."></textarea>
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
          
    </div>
</div>

</body> 
</html>