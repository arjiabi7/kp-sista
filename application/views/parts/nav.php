<!doctype html>
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
   <link rel="stylesheet" href="<?php echo base_url('assets/css/dropdown.css');?>">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/argon.css?v=1.2.0">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">


</head>

<body>
  <script src="<?php echo base_url('assets/js/jquery-3.5.1.min.js');?>"></script> 
  <script src="<?php echo base_url('assets/js/popper.min.js');?>"></script> 
  <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>

 


<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-dark" id="sidenav-main">

    <div class="scrollbar-inner">
      <div class="container">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="<?php echo base_url();?>assets/img/brand/sista.png" class="navbar-brand-img" alt="..." >

        </a>
      </div>

      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
              <!--home-->
              <li class="nav-item" style="margin-top: 7px;">
                <a href="<?php echo base_url();?>index.php/Home">
                <button type="button" class="btn btn-warning"><i class="ni ni-tv-2"></i><span class="nav-link-text">Home</span></button>
                </a>
              </li>
              <!--tutup home-->
              
              <!--Daftar TA-->
              <li class="nav-item" style="margin-top: 7px;">
                <a href="<?php echo base_url();?>index.php/menu_daftarTA">
                <button type="button" class="btn btn-warning"><i class="ni ni-cloud-upload-96"></i><span class="nav-link-text">Daftar TA II</span></button>
                </a>
              </li>
              <!--tutup daftar TA-->

              <!--Daftar seminar-->
              <li class="nav-item" style="margin-top: 7px;">
                <div class="dropdown">
                  <button type="button" class="btn btn-warning dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ni ni-bullet-list-67"></i><span class="nav-link-text">Daftar Seminar</span></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <a class="dropdown-item" href="<?php echo base_url();?>index.php/menu_daftarSeminar"><i class="ni ni-folder-17 text-warning"></i><span class="nav-link-text">Berkas Persyaratan</span></a>
                    <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="https://www.malasngoding.com/category/bootstrap-4"><i class="ni ni-single-02 text-warning"></i>Ploting Penguji</a>
                    <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="https://www.malasngoding.com/category/codeigniter"><i class="ni ni-calendar-grid-58 text-warning"></i>Pengumuman Jadwal</a>
                    <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="https://www.malasngoding.com/category/codeigniter"><i class="ni ni-send text-warning"></i>Pengiriman Undangan</a>
                    <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="https://www.malasngoding.com/category/codeigniter"><i class="ni ni-archive-2 text-warning"></i>Rekap Hasil Seminar</a>
                  </div>
                </div>
              </li>
              <!--tutup daftar seminar-->

              <!--daftar sidang-->
              <li class="nav-item" style="margin-top: 7px;">
                  <div class="dropdown">
                    <button type="button" class="btn btn-warning dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ni ni-bullet-list-67"></i><span class="nav-link-text">Daftar Sidang</span></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="https://www.malasngoding.com/category/html"><i class="ni ni-folder-17 text-warning"></i><span class="nav-link-text">Berkas Persyaratan</span></a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="https://www.malasngoding.com/category/bootstrap-4"><i class="ni ni-single-02 text-warning"></i>Ploting Penguji</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="https://www.malasngoding.com/category/codeigniter"><i class="ni ni-calendar-grid-58 text-warning"></i>Pengumuman Jadwal</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="https://www.malasngoding.com/category/codeigniter"><i class="ni ni-send text-warning"></i>Pengiriman Undangan</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="https://www.malasngoding.com/category/codeigniter"><i class="ni ni-archive-2 text-warning"></i>Rekap Hasil Sidang</a>
                    </div>
                  </div>
                </li>
              <!--tutup daftar sidang-->

              <!--pilihan dropdown
                <li class="nav-item" style="margin-top: 7px;">
                  <div class="dropdown">
                    <button type="button" class="btn btn-warning dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ni ni-bullet-list-67"></i><span class="nav-link-text">Daftar Sidang</span></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="https://www.malasngoding.com/category/html"><i class="ni ni-folder-17 text-warning"></i><span class="nav-link-text">Berkas Persyaratan</span></a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="https://www.malasngoding.com/category/bootstrap-4"><i class="ni ni-single-02 text-warning"></i>Ploting Penguji</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="https://www.malasngoding.com/category/codeigniter"><i class="ni ni-calendar-grid-58 text-warning"></i>Pengumuman Jadwal</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="https://www.malasngoding.com/category/codeigniter"><i class="ni ni-send text-warning"></i>Pengiriman Undangan</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="https://www.malasngoding.com/category/codeigniter"><i class="ni ni-archive-2 text-warning"></i>Rekap Hasil Sidang</a>
                    </div>
                  </div>
                </li>
              -->
         
              <div class="dropdown-divider"></div>
          </ul>
        </div>
      </div>
    </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
</html>
    <!-- Topnav -->
    
    <!-- Header -->
    <!-- Header -->
    
    