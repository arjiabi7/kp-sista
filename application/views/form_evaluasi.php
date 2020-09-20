<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- CSS sendiri -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap/style_evaluasi.css">

    <title>Form Evaluasi dan Penilaian Seminar TA II</title>
  </head>
  <body>
    <div class="container">
      <h1><b>FORM EVALUASI DAN PENILAIAN SEMINAR TA - II</b></h1>
      <form method="post" action="http://localhost/sistakp/index.php/cetakpdf_evaluasi_seminar">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="dosenR1" class="font-weight-bold">Dosen Reviewer 1</label>
            <select id="dosenR1" class="form-control" required="">
              <option></option>
              <option>Eddie Krishna Putra, Drs., M.T.</option>
              <option>Dr. Esmeralda Contessa Djamal, S.T., MT</option>
              <option>Tacbir Hendro Pudjiantoro, S.Si, M.T.</option>
              <option>Gunawan Abdillah, S.Si., M.Cs. </option>
              <option>Yulison Herry Chrisnanto, S.T., M.T.</option>
              <option>Wina Witanti, S.T, M.T.</option>
              <option>Faiza Renaldi S.T., M.Sc.</option>
              <option>Rezki Yuniarti, S.Si, M.T.</option>
              <option>Ade Kanianingsih, S.Si.</option>
              <option>Agus Komarudin, S.Kom, M.T.</option>
              <option>Fajri Rakhmat Umbara, S.T., M.T</option>
              <option>Asep Id Hadiana, S.Si., M.Kom</option>
              <option>Ridwan Ilyas, S.Kom., M.T</option>
              <option>Puspita Nurul Sabrina, S.Kom., M.T</option>
              <option>Irma Santikarama, S.Kom., M.T</option>
              <option>Fatan Kasyidi, S.Kom., M.T.</option>
              <option>Herdi Ashaury, S.Kom., M.T</option>
              <option>Melina, S.Si., M.Si.</option>
              <option>Edvin Ramadhan, S.Kom., M.T</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="nid1" class="font-weight-bold">NID Dosen Reviewer 1</label>
            <input type="text" class="form-control" id="nid1" onkeypress="return Angkasaja(event)" maxlength="9" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="dosenR2" class="font-weight-bold">Dosen Reviewer 2</label>
            <select id="dosenR2" class="form-control" required="">
              <option></option>
              <option>Eddie Krishna Putra, Drs., M.T.</option>
              <option>Dr. Esmeralda Contessa Djamal, S.T., MT</option>
              <option>Tacbir Hendro Pudjiantoro, S.Si, M.T.</option>
              <option>Gunawan Abdillah, S.Si., M.Cs. </option>
              <option>Yulison Herry Chrisnanto, S.T., M.T.</option>
              <option>Wina Witanti, S.T, M.T.</option>
              <option>Faiza Renaldi S.T., M.Sc.</option>
              <option>Rezki Yuniarti, S.Si, M.T.</option>
              <option>Ade Kanianingsih, S.Si.</option>
              <option>Agus Komarudin, S.Kom, M.T.</option>
              <option>Fajri Rakhmat Umbara, S.T., M.T</option>
              <option>Asep Id Hadiana, S.Si., M.Kom</option>
              <option>Ridwan Ilyas, S.Kom., M.T</option>
              <option>Puspita Nurul Sabrina, S.Kom., M.T</option>
              <option>Irma Santikarama, S.Kom., M.T</option>
              <option>Fatan Kasyidi, S.Kom., M.T.</option>
              <option>Herdi Ashaury, S.Kom., M.T</option>
              <option>Melina, S.Si., M.Si.</option>
              <option>Edvin Ramadhan, S.Kom., M.T</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="nid2" class="font-weight-bold">NID Dosen Reviewer 2</label>
            <input type="text" class="form-control" id="nid2" onkeypress="return Angkasaja(event)" maxlength="9" required>
          </div>
        </div>

        <div class="form-group">
          <label for="beritaacara" class="font-weight-bold">Berita Acara</label>
          <input type="text" class="form-control" id="beritaacara" placeholder="ex. 31 /VI/IF-FSI/TA-II/XIV/2019" required>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label><b>Penilaian</b></label><br>
            <label for="radio1">PEMAHAMAN TEORI, METODE PENELITIAN, KONSEP HINGGA PENGUJIAN</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio1" id="radio1" value="option1" required>
              <label class="form-check-label" for="radio1">
                Iya
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio1" id="radio2" value="option2">
              <label class="form-check-label" for="radio2">
                Tidak
              </label>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="hasilE1"><b>Hasil Evaluasi</b></label>
            <textarea class="form-control" id="hasilE2" placeholder=" . . . " required></textarea>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label><b>Penilaian</b></label><br>
            <label for="radio3">PEMAHAMAN KEBUTUHAN DAN PERMASALAHAN PERANCANGAN SISTEM</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio2" id="radio3" value="option1" required>
              <label class="form-check-label" for="radio3">
                Iya
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio2" id="radio4" value="option2">
              <label class="form-check-label" for="radio4">
                Tidak
              </label>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="hasilE2"><b>Hasil Evaluasi</b></label>
            <textarea class="form-control" id="hasilE2" placeholder=" . . . " required></textarea>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label><b>Penilaian</b></label><br>
            <label for="radio5">PEMAHAMAN PEMBUATAN PERANGKAT LUNAK</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio3" id="radio5" value="option1" required>
              <label class="form-check-label" for="radio5">
                Iya
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="radio3" id="radio6" value="option2">
              <label class="form-check-label" for="radio6">
                Tidak
              </label>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="hasilE3"><b>Hasil Evaluasi</b></label>
            <textarea class="form-control" id="hasilE2" placeholder=" . . . " required></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-success">Cetak</button>

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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>