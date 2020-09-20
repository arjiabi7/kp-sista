<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- CSS sendiri -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap/style_penilaian.css">

    <title>Form Penilaian Bimbingan dan Sidang Skripsi</title>
  </head>
  <body>
    <div class="container">
      <h1><b>FORM PENILAIAN BIMBINGAN DAN SIDANG SKRIPSI</b></h1>
      <form method="post" action="http://localhost/sistakp/index.php/cetakpdf_penilaian_bimbingan">
        <div class="form-group">
          <label for="nama">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" maxlength="10" onkeypress="return Angkasaja(event)">
          </div>
          <div class="form-group col-md-3">
            <label for="smt">Semester</label>
            <select id="smt" class="form-control" required="">
              <option>. . .</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <label for="radio2">Peminatan</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="radio" id="radio1" value="option1">
              <label class="form-check-label" for="radio1">AIG</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="radio" id="radio2" value="option2">
              <label class="form-check-label" for="radio2">DSE</label>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="judul">Judul Penelitian Tugas Akhir</label>
          <input type="text" class="form-control" id="judul">
        </div>
        <div class="form-group text-center">
          <label><b>PENILAIAN PROSES BIMBINGAN</b></label>
        </div>
        <div class="form-row">
          <div class="form-group col-md-10">
            <label for="nilai1">MATERI (ISI) PENELITIAN</label>
          </div>
          <div class="form-group col-md-2">
            <input type="text" class="form-control text-center" id="nilai1" maxlength="2" onkeypress="return Angkasaja(event)" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-10">
            <label for="nilai2">PEMAHAMAN TERHADAP TEORI PENUNJANG & PENELITIAN YANG DIKERJAKAN</label>
          </div>
          <div class="form-group col-md-2">
            <input type="text" class="form-control text-center" id="nilai2" maxlength="2" onkeypress="return Angkasaja(event)" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-10">
            <label for="nilai3">PENCAPAIAN TARGET</label>
          </div>
          <div class="form-group col-md-2">
            <input type="text" class="form-control text-center" id="nilai3" maxlength="2" onkeypress="return Angkasaja(event)" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-10">
            <label for="nilai4">ASPEK KEDISIPLINAN</label>
          </div>
          <div class="form-group col-md-2">
            <input type="text" class="form-control text-center" id="nilai4" maxlength="2" onkeypress="return Angkasaja(event)" required>
          </div>
        </div>
        <div class="form-group text-center">
          <label><b>PENILAIAN SIDANG SKRIPSI</b></label>
        </div>
        <div class="form-row">
          <div class="form-group col-md-10">
            <label for="nilai5">PEMAHAMAN PENELITIAN</label>
          </div>
          <div class="form-group col-md-2">
            <input type="text" class="form-control text-center" id="nilai5" maxlength="2" onkeypress="return Angkasaja(event)" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-10">
            <label for="nilai6">KEDALAMAN TEORI KEILMUAN</label>
          </div>
          <div class="form-group col-md-2">
            <input type="text" class="form-control text-center" id="nilai6" maxlength="2" onkeypress="return Angkasaja(event)" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-10">
            <label for="nilai7">METODE PENELITIAN</label>
          </div>
          <div class="form-group col-md-2">
            <input type="text" class="form-control text-center" id="nilai7" maxlength="2" onkeypress="return Angkasaja(event)" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-10">
            <label for="nilai8">ANALISIS HASIL PENELITIAN</label>
          </div>
          <div class="form-group col-md-2">
            <input type="text" class="form-control text-center" id="nilai8" maxlength="2" onkeypress="return Angkasaja(event)" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-10">
            <label for="nilai9">TEKNIK PRESENTASI</label>
          </div>
          <div class="form-group col-md-2">
            <input type="text" class="form-control text-center" id="nilai9" maxlength="2" onkeypress="return Angkasaja(event)" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-10">
            <label for="nilai10">TEKNIK PENULISAN</label>
          </div>
          <div class="form-group col-md-2">
            <input type="text" class="form-control text-center" id="nilai10" maxlength="2" onkeypress="return Angkasaja(event)" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-10">
            <label for="nilai11">PEMAHAMAN PENGEMBANGAN PERANGKAT LUNAK</label>
          </div>
          <div class="form-group col-md-2">
            <input type="text" class="form-control text-center" id="nilai11" maxlength="2" onkeypress="return Angkasaja(event)" required>
          </div>
        </div>
        <div class="form-group text-center">
          <label for="catatansaran"><b>CATATAN DAN SARAN</b></label>
          <textarea class="form-control" id="catatansaran" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Cetak</button>
      </form>
      <script type="text/javascript">
        function Angkasaja(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
        return true;
        }
      </script>
    </div>
    <br><br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>