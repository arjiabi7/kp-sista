
<!DOCTYPE html>
<html style="position: relative;">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Sistem Informasi Tugas Akhir</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url();?>assets/img/brand/favicon.png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/nucleo/css/nucleo.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css');?>">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css');?>">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.css">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark fixed-top">
  <a class="navbar-brand" href="javascript:void(0)">
          <img src="<?php echo base_url();?>assets/img/brand/sista.png" style="width: 100px" class="mb-1">
        </a>
                <a href="<?php echo base_url();?>index.php/mahasiswa/Home">
                <button type="button" class="btn btn-dark"><i class="ni ni-tv-2"></i><span class="nav-link-text"> HOME</span></button>
                </a>
                 <a href="<?php echo base_url();?>index.php/mahasiswa/daftarTA2">
                <button type="button" class="btn btn-dark"><i class="ni ni-cloud-upload-96"></i><span class="nav-link-text"> DAFTAR TA II</span></button>
                </a>
                <div class="dropdown">
                  <button type="button" class="btn btn-dark dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ni ni-bullet-list-67"></i><span class="nav-link-text"> SEMINAR</span></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <a class="dropdown-item" href="<?php echo base_url();?>index.php/mahasiswa/seminar/jadwal"><i class="ni ni-send text-warning"></i> Pengajuan Seminar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url();?>index.php/mahasiswa/seminar/daftarSeminar"><i class="ni ni-folder-17 text-warning"></i><span class="nav-link-text"> Daftar Seminar</span></a>
                    <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="<?php echo base_url();?>index.php/mahasiswa/seminar/jadwal"><i class="ni ni-calendar-grid-58 text-warning"></i> Pengumuman Jadwal & Penguji</a>
                 
                    <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="<?php echo base_url();?>index.php/mahasiswa/seminar/rekap_nilai_seminar"><i class="ni ni-archive-2 text-warning"></i> Unduh Hasil Seminar</a>
                  </div>
                </div>
                 <div class="dropdown">
                    <button type="button" class="btn btn-dark dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ni ni-bullet-list-67"></i><span class="nav-link-text"> SIDANG</span></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="<?php echo base_url();?>index.php/menu_daftarSeminar/jadwal"><i class="ni ni-send text-warning"></i> Pengajuan Sidang</a>
                    <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="<?php echo base_url();?>index.php/mahasiswa/sidang/daftarSidang"><i class="ni ni-folder-17 text-warning"></i><span class="nav-link-text"> Daftar Sidang</span></a>
                    <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="<?php echo base_url();?>index.php/mahasiswa/sidang/jadwal"><i class="ni ni-calendar-grid-58 text-warning"></i> Pengumuman Jadwal & Penguji</a>
                    <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="https://www.malasngoding.com/category/codeigniter"><i class="ni ni-archive-2 text-warning"></i> Unduh Hasil Sidang</a>
                    </div>
                  </div>
              
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
     
      
      
    </ul>
    <div class="dropdown">

                <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ni ni-circle-08"></i><span class="nav-link-text"> <?=@$_SESSION['identity'];?> </span></button>
               
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo base_url();?>index.php/auth/logout"><i class="ni ni-key-25 text-warning"></i> Logout</a>
                </div>
              </div>
  </div>
</nav>

</body>

    <!-- </div -->