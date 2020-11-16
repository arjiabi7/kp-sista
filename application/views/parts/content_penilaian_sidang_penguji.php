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
         <?php echo form_open("penguji/penguji/penilaian_sidang", array('enctype'=>'multipart/form-data')); ?>
    <div class="container p-5 mt-5 mb-5">
        <div class="card" style="border-radius: 10px;">
        <div class="card-header">
            <center><img src="<?php echo base_url();?>assets/img/if.png" class="mt-3"><h3 class="mt-3">FORM PENILAIAN SIDANG</h3></center>
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
                    <h4>Penilaian Sidang</h4>
                    <hr style="border-width: 2px; width: 300px;">
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label" for="materi">MATERI PENELITIAN (Max 30 Point) </label>
                        <input type="text" name="materi_penilaian" id="materi" class="form-control border-top-0 border-right-0 border-left-0" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label" for="materi">PEMAHAMAN TEORI (Max 15 Point)</label>
                        <input type="text" id="materi" name="pemahaman_teori" class="form-control border-top-0 border-right-0 border-left-0" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label" for="materi">PEMAHAMAN PENELITIAN (Max 15 Point)</label>
                        <input type="text" id="materi" name="pemahaman_penelitian" class="form-control border-top-0 border-right-0 border-left-0" required>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label" for="materi">PENCAPAIAN TARGET (Max 20 Point)</label>
                        <input type="text" id="materi" name="pencapaian_target" class="form-control border-top-0 border-right-0 border-left-0" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label" for="materi">ASPEK KEDISIPLINAN (Max 20 Point)</label>
                        <input type="text" id="materi" name="aspek_kedisiplinan" class="form-control border-top-0 border-right-0 border-left-0" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label" for="materi">TEORI KEILMUAN (Max 20 Point)</label>
                        <input type="text" id="materi" name="teori_keilmuan" class="form-control border-top-0 border-right-0 border-left-0" required>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label" for="materi">METODE PENELITIAN (Max 15 Point)</label>
                        <input type="text" id="materi" name="metode_penelitian" class="form-control border-top-0 border-right-0 border-left-0" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label" for="materi">ANALISIS HASIL PENELITIAN (Max 20 Point)</label>
                        <input type="text" id="materi" name="analisis_penelitian" class="form-control border-top-0 border-right-0 border-left-0" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label" for="materi">TEKNIK PRESENTASI (Max 10 Point)</label>
                        <input type="text" id="materi" name="teknik_presentasi" class="form-control border-top-0 border-right-0 border-left-0" required>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label" for="materi">TEKNIK PENULISAN (Max 10 Point)</label>
                        <input type="text" id="materi" name="teknik_penulisan" class="form-control border-top-0 border-right-0 border-left-0" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label" for="materi">PEMAHAMAN SOFTWARE (Max 10 Point) </label>
                        <input type="text" id="materi" name="pemahaman_software" class="form-control border-top-0 border-right-0 border-left-0" required>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <textarea class="form-control form-control-tabel border-top-0 border-right-0 border-left-0" name="revisi_saran" id="exampleFormControlTextarea1" rows="3" placeholder="CATATAN REVISI/SARAN . . ." style="height: 70px;"></textarea>
                    </div>
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
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>