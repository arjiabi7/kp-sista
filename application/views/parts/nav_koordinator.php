
<!DOCTYPE html>
<html>

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
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="javascript:void(0)">
    <img src="<?php echo base_url();?>assets/img/brand/sista.png" style="width: 100px" class="mb-1">       
  </a> 
  <a href="<?php echo base_url();?>index.php/menu_daftarTA_koordinator">
    <button type="button" class="btn btn-dark"><i class="ni ni-tv-2"></i><span class="nav-link-text"> Data TA2</span></button>
  </a>
  <a href="<?php echo base_url();?>index.php/menu_daftarSeminar_koordinator">
    <button type="button" class="btn btn-dark"><i class="ni ni-tv-2"></i><span class="nav-link-text"> Data Seminar</span></button>
  </a>
  <a href="<?php echo base_url();?>index.php/menu_daftarSidang_koordinator">
    <button type="button" class="btn btn-dark"><i class="ni ni-tv-2"></i><span class="nav-link-text"> Data Sidang</span></button>
  </a>
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
  </div>
</nav>

</body>

    <!-- </div -->