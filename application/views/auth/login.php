<!DOCTYPE html>
<html>
<head>
  <title>SISTA - login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <!-- Favicon -->
  <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../../assets/css/argon.css?v=1.2.0" type="text/css">
</head>
<style type="text/css">
      .wrapper{
          background: #59284e;
          height: 20vh;
          border-radius: 5px;
          position: relative;
        }
        .text{
          flex: 0 0 100%;
          font-size: 4rem;
          font-weight: 200;
          color: #00000000;
          text-align: center;
          font-family: 'Lato', sans-serif;
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%, -50%);
          border-bottom: 1px solid #d4d7ff;
          border-top: 1px solid #d4d7ff;
          background: url(https://media1.giphy.com/media/kLMfRZwHtzr7a/source.gif);
          background-clip: text;
          -webkit-background-clip: text;
        }

         .text:after{
           content: attr(data-text);
           -webkit-text-stroke: 1.5px #d4d7ff;
           position: absolute;
           left: 50%;
           top: 50%;
           transform: translate(-50%, -49%);
           background: url(https://media1.giphy.com/media/kLMfRZwHtzr7a/source.gif);
           background-clip: text;
           -webkit-background-clip: text;
           background-size: 43%;

        }
</style>
<body class="bg-gradient-dark polygon_coba">
  
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-warning py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-2 col-md-4 px-5">

              <div class= "wrapdper">
            <div class= "text" data-text= "SISTA">Labkom99</div>
        </div>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-dark"  points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
              <form method="POST" role="form">
                <div class="form-group mb-3">
                  <center><h1><?php echo lang('login_heading');?></h1></center>
                  <p><?php echo lang('login_subheading');?></p>
                  <div id="infoMessage"><?php echo $message;?></div>

                  <?php echo form_open("auth/login");?>
                  Email
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>

                    </div>
                    <?php echo form_input($email,"",array("class"=>"form-control"));?>
                  </div>
                </div>
                <div class="form-group">
                  Password
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <?php echo form_input($password,"",array("class"=>"form-control"));?>
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                   <?php echo lang('login_remember_label', 'remember');?>
                    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                </div>
                <div class="text-center">
                  <?php echo form_submit('submit', lang('login_submit_btn'));?>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php echo form_close();?>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../../assets/js/argon.js?v=1.2.0"></script>
</body>
</html>




