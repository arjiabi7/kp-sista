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
      <title>Penilaian Seminar</title>
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
  <body class="bg-gradient-warning">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-8">
            <h3 class="mt-5 p-3 bg-dark text-light text-center">Selamat Datang, Penguji dan Pembimbing</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-8">
            <button type="button" class="btn btn-lg bg-dark border-0"><a class="text-light" href="<?php echo base_url();?>index.php/auth/logout">Log out?</a></button>
        </div>
    </div>
    <div class="container p-5">
        <div class="card" style="border-radius: 10px;">
        <div class="card-header">
            <center><img src="<?php echo base_url();?>assets/img/if.png" class="mt-3"><h3 class="mt-3">FORM PENILAIAN</h3></center>
        </div>
        <form class="p-5">
            <div class="row">
                <div class="col-lg-12 text-center mb-3">
                    <h4 >Data Dosen</h4>
                    <hr style="border-width: 2px; width: 300px;">
                </div>
                <div class="col-lg-6">
                    <select id="inputState" class="form-control border-top-0 border-right-0 border-left-0">
                        <option selected>--Identitas Dosen--</option>
                        <option>AGK (412175878) Agus Komarudin, S.Kom., M.T.</option>
                        <option>AIH (412180078) Asep Id Hadiana, S.Si., M.Kom.</option>
                        <option>FKI (412100992) Fatan Kasyidi, S.Kom., M.T.</option>
                        <option>FRU (412185888) Fajri Rakhmat Umbara, S.T., M.T.</option>
                        <option>HAY (412198688) Herdi Ashaury, S.Kom., M.T.</option>
                        <option>ISR (412196490) Irma Santikarama, S.Kom., M.T.</option>
                        <option>PNS (412190585) Puspita Nurul Sabrina, S.Kom., M.T.</option>
                        <option>RDI (412182990) Ridwan Ilyas, S.Kom., M.T.</option>
                        <option>RZK (412174182) Rezki Yuniarti, S.Si., M.T.</option>
                        <option>SGO (412103969) Sigit Anggoro, S.T., M.T.</option>
                        <option>WNI (412176273) Wina Witanti, S.T., M.T.</option>
                        <option>YHC (412166863) Yulison Herry C., S.T., M.T.</option>
                        <option>THP (412166969) Tacbir Hendro Pudjiantoro, S.Si., M.T.</option>
                        <option>FZR (412167079) Faiza Renaldi, S.T., M.Sc.</option>
                        <option>ECD (412127670) Dr. Esmeralda C. Djamal, ST., MT.</option>
                        <option>ADK (412116459) Dra. Ade Kania Ningsih, M.Stat.</option>
                        <option>EKP (4122110561) Dr. Eddie Krishna Putra, Drs., M.T.</option>
                        <option>GNA (412157175) Gunawan Abdillah, S.Si., M.Cs.</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <select id="inputState" class="form-control border-top-0 border-right-0 border-left-0">
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
                    <select id="inputState" class="form-control border-top-0 border-right-0 border-left-0">
                        <option selected>--Nama Mahasiswa--</option>
                        <option>FACHRY MUHAMMAD</option>
                        <option>FAZRIN MULYAWAN</option>
                        <option>MUHAMMAD FACHRY RAMADHAN</option>
                        <option>MUHAMMAD RIVALDI IRAWAN</option>
                        <option>ARI GUNAWAN</option>
                        <option>REZA DWI PUTRA</option>
                        <option>FAJAR TRESNAWIGUNA</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <select id="inputState" class="form-control border-top-0 border-right-0 border-left-0">
                        <option selected>--NIM--</option>
                        <option>3411161092</option>
                        <option>3411151100</option>
                        <option>3411161094</option>
                        <option>3411141011</option>
                        <option>3411161067</option>
                        <option>3411141139</option>
                        <option>3411151137</option>
                    </select>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12 text-center mb-4">
                    <h4>Penilaian Seminar</h4>
                    <hr style="border-width: 2px; width: 300px;">
                </div>
                <div class="col-lg-6">
                    <select id="inputState" class="form-control border-top-0 border-right-0 border-left-0">
                        <option selected>--Pemahaman Teori, Metode Penelitian, Konsep hingga Pengujian--</option>
                        <option>Paham</option>
                        <option>Tidak</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Komentar..."></textarea>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <select id="inputState" class="form-control border-top-0 border-right-0 border-left-0">
                        <option selected>--Pemahaman Kebutuhan dan Permasalahan Perancangan Sistem--</option>
                        <option>Paham</option>
                        <option>Tidak</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Komentar..."></textarea>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <select id="inputState" class="form-control border-top-0 border-right-0 border-left-0">
                        <option selected>--Pemahaman Pembuatan Perangkat Lunak--</option>
                        <option>Paham</option>
                        <option>Tidak</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Komentar..."></textarea>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <select id="inputState" class="form-control border-top-0 border-right-0 border-left-0">
                        <option selected>--Kelayakan Mahasiswa Maju ke Sidang--</option>
                        <option>Maju</option>
                        <option>Tidak</option>
                    </select>
                </div>
                <div class="col-lg-6">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pernyataan..."></textarea>
                </div>
            </div>
        </form>
        <div class="card-footer text-right">
            <button class="btn btn-icon btn-warning" type="button">
                <span class="btn-inner--icon"><i class="ni ni-send"></i></span>
                <span class="btn-inner--text">Kirim</span>
            </button>
        </div>
        </div>
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