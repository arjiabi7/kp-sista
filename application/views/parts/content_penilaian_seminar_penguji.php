<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
      <meta name="author" content="Creative Tim">
      <title></title>
      <!-- Favicon -->
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

  </head>
  <body class="mt-3">
    <?php 
        if(isset($error))
        {
            echo "ERROR UPLOAD : <br/>";
            print_r($error);
            echo "<hr/>";
        }
        ?>
         <?php echo form_open("penguji/penguji/penilaian_seminar", array('enctype'=>'multipart/form-data')); ?>
    <div class="container p-5 mt-5 mb-5">
        <div class="card" style="border-radius: 10px;">
        <div class="card-header">
            <center><img src="<?php echo base_url();?>assets/img/if.png" class="mt-3"><h3 class="mt-3">FORM PENILAIAN SEMINAR</h3></center>
        </div>
        <form class="p-5">
            <div class="row">
                <div class="col-lg-12 text-center mb-3">
                    <h4 >Data Dosen</h4>
                    <hr style="border-width: 2px; width: 300px;">
                </div>
                <div class="col-lg-6">
                    <input type="text" name="kd_penguji" class="form-control border-top-0 border-right-0 border-left-0" value="<?=$this->ion_auth->userPenilaian_penguji()->row()->kd_penguji;?>" readonly>
                </div>
                <div class="col-lg-6">
                    <select id="inputState" name="peran_dosen" class="form-control border-top-0 border-right-0 border-left-0">
                        <option selected>--Peran Dosen--</option>
                        <option>Pembimbing 1</option>
                        <option>Pembimbing 2</option>
                        <option>Penguji 1</option>
                        <option>Penguji 2</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <h4>Data Mahasiswa</h4>
                <hr style="border-width: 2px; width: 300px;">
            </div>
            <div class="row mt-4">
                <div class="col-lg-6">
                    <input type="text" name="nama_lengkap" class="form-control border-top-0 border-right-0 border-left-0" placeholder="Isi nama mahasiswa . . .">
                </div>
                <div class="col-lg-6">
                    <input type="text" name="nim" class="form-control border-top-0 border-right-0 border-left-0" placeholder="Isi NIM mahasiswa . . .">
                </div>
                
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <input type="email" name="email" class="form-control border-top-0 border-right-0 border-left-0" placeholder="Isi e-mail . . .">
                </div>
                </div>
            <div class="row mt-5">
                <div class="col-lg-12 text-center mb-4">
                    <h4>Penilaian Seminar</h4>
                    <hr style="border-width: 2px; width: 300px;">
                </div>
                <div class="col-lg-6">
                    <select id="inputState" name="pemahaman_teori" class="form-control border-top-0 border-right-0 border-left-0">
                        <option selected>--Pemahaman Teori, Metode Penelitian, Konsep hingga Pengujian--</option>
                        <option>Paham</option>
                        <option>Tidak</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <textarea class="form-control" name="komentar_pemahaman_teori" id="exampleFormControlTextarea1" rows="3" placeholder="Komentar..."></textarea>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <select id="inputState" name="pemahaman_kebutuhan" class="form-control border-top-0 border-right-0 border-left-0">
                        <option selected>--Pemahaman Kebutuhan dan Permasalahan Perancangan Sistem--</option>
                        <option>Paham</option>
                        <option>Tidak</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <textarea class="form-control" name="komentar_pemahaman_kebutuhan" id="exampleFormControlTextarea1" rows="3" placeholder="Komentar..."></textarea>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <select id="inputState" name="pemahaman_pl" class="form-control border-top-0 border-right-0 border-left-0">
                        <option selected>--Pemahaman Pembuatan Perangkat Lunak--</option>
                        <option>Paham</option>
                        <option>Tidak</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <textarea class="form-control" name="komentar_pemahaman_pl" id="exampleFormControlTextarea1" rows="3" placeholder="Komentar..."></textarea>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <select id="inputState" name="maju_sidang" class="form-control border-top-0 border-right-0 border-left-0">
                        <option selected>--Kelayakan Mahasiswa Maju ke Sidang--</option>
                        <option>Maju</option>
                        <option>Tidak</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <textarea class="form-control" name="komentar_maju_sidang" id="exampleFormControlTextarea1" rows="3" placeholder="Pernyataan..."></textarea>
                </div>
            </div>
        </form>
        <div class="card-footer text-right">
            <input type="submit" class=" btn btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2"  name="submit" value="Kirim">
        </div>
        </div>
        <?php echo form_close(); ?>
    </div>
    </div>
    
  </body>
</html>