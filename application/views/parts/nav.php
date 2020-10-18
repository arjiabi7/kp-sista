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
          <li class="nav-item">
            <div class="container">

              
                
                <a href="<?php echo base_url();?>index.php/auth/logout">
                <button type="button" class="btn btn-outline-warning"><i class="ni ni-key-25"></i><span class="nav-link-text">Logout</span></button>
                </a>
             
            </div>
          </li>
              <li class="nav-item" style="margin-top: 7px;">
            <div class="container">

                <a href="<?php echo base_url();?>index.php/Home">
                <button type="button" class="btn btn-warning"><i class="ni ni-tv-2"></i><span class="nav-link-text">Home</span></button>
                </a>
             
            </div>
          </li>
          <li class="nav-item" style="margin-top: 7px;">
            <div class="container">

              
                <a href="<?php echo base_url();?>index.php/menu_form">
                <button type="button" class="btn btn-warning">Form Input</button>
                </a>
              
            </div>
          </li>
          <li class="nav-item" style="margin-top: 7px;">
            <div class="container">

              
                <a href="<?php echo base_url();?>index.php/menu_daftarTA">
                <button type="button" class="btn btn-warning"><i class="ni ni-cloud-upload-96"></i><span class="nav-link-text">Daftar TA II</span></button>
                </a>
            </div>
          </li>
           <li class="nav-item" style="margin-top: 7px;">
            <div class="container">

              <div class="dropdown">

                <button type="button" class="btn btn-warning"><i class="ni ni-bullet-list-67"></i><span class="nav-link-text">Daftar Seminar</span></button>
                <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
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
            </div>
          </li>

          <li class="nav-item" style="margin-top: 7px;">
            <div class="container">

              <div class="dropdown">

                <button type="button" class="btn btn-warning"><i class="ni ni-bullet-list-67"></i><span class="nav-link-text">Daftar Sidang</span></button>
                <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
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
            </div>
          </li>
         
          <div class="dropdown-divider"></div>
           <li class="nav-item" style="margin-top: 7px;">
            <div class="container">

              
                <a href="<?php echo base_url();?>index.php/auth">
                <button type="button" class="btn btn-warning"><i class="ni ni-cloud-upload-96"></i><span class="nav-link-text">Login Sebagai Admin</span></button>
                </a>
            </div>
          </li>

<!--
        <div class="dropdown">
            <li class="mainmenubtn">
              <a class="nav-link" href="http://localhost/sistakp/index.php/menu_form">  
                  <i class="ni ni-planet text-orange"></i>
                  <span class="mainmenubtn">Pendaftaran</span>
                  <div class="dropdown-child">
                    <a href="http://wwww.yourdonain.com/page1.html">Child menu 1</a>
                    <a href="http://wwww.yourdonain.com/page2.html">Child menu 2</a>
                    <a href="http://wwww.yourdonain.com/page3.html">Child menu 3</a>
                    <a href="http://wwww.yourdonain.com/page4.html">Child menu 4</a>
                    <a href="http://wwww.yourdonain.com/page5.html">Child menu 5</a>
                  </div>
              </a>
            </li>
        </div>
    -->      
  
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>argon-dashboard-master/examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Google</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>argon-dashboard-master/examples/profile.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>argon-dashboard-master/examples/tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>argon-dashboard-master/examples/register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>argon-dashboard-master/examples/upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Foundation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                <i class="ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Plugins</span>
              </a>
            </li>
            
          </ul>
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
    
    