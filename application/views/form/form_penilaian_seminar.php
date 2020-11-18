<!doctype html>
<html lang="en" style="padding: 100px;">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="icon" href="<?php echo base_url();?>assets/img/brand/favicon.png" type="image/png">

    <title>Form Penilaian Seminar</title>
  </head>
  <body style="padding: 50px;">
    <div class="container p-5">
      <div class="card">
      <div class="card-header">
        <center><img src="<?php echo base_url();?>assets/img/if.png" class="mt-3"><h3 class="mt-3">FORM PENILAIAN SEMINAR</h3></center>
      </div>
      <div class="card-body">
      <form class="pt-2 pb-2 pl-5 pr-5" method="post" action="http://localhost/sistakp/index.php/cetakpdf_penilaian_bimbingan">
       <div class="form-group text-center mt-3 pb-3">
          <h4 class="font-weight-bold">DATA MAHASISWA</h4>
        </div>
        <div class="row">
          <div class="form-group col-lg-5">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control border-top-0 border-right-0 border-left-0" value="<?=$this->ion_auth->gabung_tabel()->row()->nama_lengkap;?>" readonly>
          </div>
          <div class="form-group col-lg-3">
            <label>NIM</label>
            <input type="text" class="form-control border-top-0 border-right-0 border-left-0" value="<?=$this->ion_auth->gabung_tabel()->row()->nim;?>" readonly>
          </div>
          <div class="form-group col-lg-2">
            <label>Semester</label>
            <input type="text" class="form-control border-top-0 border-right-0 border-left-0" value="<?=$this->ion_auth->gabung_tabel()->row()->semester;?>" readonly>
          </div>
          <div class="form-group col-lg-2">
            <label>Peminatan</label>
            <input type="text" class="form-control border-top-0 border-right-0 border-left-0" value="<?=$this->ion_auth->gabung_tabel()->row()->peminatan;?>" readonly>
          </div>
        </div>
        <div class="row mt-3">
          <div class="form-group col-lg-12 text-center">
            <label>Judul Penelitian Tugas Akhir</label>
            <textarea style="height: 100px;" class="form-control text-center border-top-0 border-right-0 border-left-0" readonly><?=$this->ion_auth->gabung_tabel_userVerifikasiSeminar()->row()->judul_skripsi;?></textarea>
          </div>
        </div>
        
        <div class="form-group text-center mt-3 pb-3 pt-2">
          <h4 class="font-weight-bold">PENILAIAN SEMINAR</h4>
        </div>
        <div class="row">
          <div class="form-group col-lg-12 text-center">
            <label>Pemahaman Teori, Metode Penelitian, Konsep hingga Pengujian</label>
            <input type="text" class="form-control text-center border-top-0 border-right-0 border-left-0" value="<?=$this->ion_auth->gabung_tabel_userPenilaianSeminar()->row()->pemahaman_teori;?>" readonly>
            <textarea style="height: 150px;" class="form-control text-center" readonly><?=$this->ion_auth->gabung_tabel_userPenilaianSeminar()->row()->komentar_pemahaman_teori;?></textarea>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-lg-12 text-center">
            <label>Pemahaman Kebutuhan dan Permasalahan Perancangan</label>
            <input type="text" class="form-control border-top-0 border-right-0 border-left-0" readonly>
            <textarea style="height: 150px;" class="form-control" readonly></textarea>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-lg-12 text-center">
            <label>Pemahaman Pembuatan Perangkat Lunak</label>
            <input type="text" class="form-control border-top-0 border-right-0 border-left-0" readonly>
            <textarea style="height: 150px;" class="form-control" readonly></textarea>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-lg-12 text-center">
            <label>Kelayakan Mahasiswa Maju ke Sidang</label>
            <input type="text" class="form-control border-top-0 border-right-0 border-left-0" readonly>
            <textarea style="height: 150px;" class="form-control" readonly></textarea>
          </div>
        </div>
      </form>
      </div>
      <script type="text/javascript">
        window.print();
      </script>
    </div>
    </div>
    <br><br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>