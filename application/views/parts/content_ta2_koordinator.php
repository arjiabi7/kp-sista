                            
    

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
</head> <style type="text/css">
    .body_content{
        background-image: url('<?php echo base_url();?>assets/img/carousel/background.jpg');
    }</style>
<body class="mt-3 " style="margin-bottom: 100px;">
<br>
<div class="container-fluid p-5 mb-5">
    <h3>Data TA2</h3>
    <div class="row">
        <br>
        <br>
    <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>id.</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jumlah SKS</th>
                <th>IPK</th>
                <th>Jumlah Nilai D</th>
                <th>Jumlah Nilai E</th>
                <th>Judul Tugas Akhir</th>
                <th>Pembimbing 1</th>
                <th>Pembimbing 2</th>
                <!-- <th>Penguji 1</th>
                <th>Penguji 2</th> -->
                <th>KHS</th>
                <th>KRS</th>
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
            $jumlah_sks_lulus=$row['jumlah_sks_lulus'];
            $ipk=$row['ipk'];
            $jumlah_nilai_D=$row['jumlah_nilai_D'];
            $jumlah_nilai_E=$row['jumlah_nilai_E'];
            $judul_skripsi=$row['judul_skripsi'];
            $pembimbing_1=$row['pembimbing_1'];
            $pembimbing_2=$row['pembimbing_2'];
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
                        <td><a href="<?php echo base_url();?>upload_daftarTA2">KHS</a></td>
                        <td><a href="<?php echo base_url();?>upload_daftarTA2">KRS</a></td>
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
            $komentar_ta2=$row['komentar_ta2'];
          
        ?>
                    <div class="modal fade" id="modal_edit<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                         <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/koordinator/koordinator/edit_daftarTA2'?>">           
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
                                    <textarea class="form-control" name="komentar_ta2" id="komentar_ta2" id="exampleFormControlTextarea1" value="<?php echo $komentar_ta2;?>" rows="3" placeholder="Tuliskan komentar..."></textarea>
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
