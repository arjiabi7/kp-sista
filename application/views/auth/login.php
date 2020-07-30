<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">
      .container {
        margin-top: 300px;
        color: green;
      }

      .form-group {
        width: 400px;
        margin: auto;
        margin-top: 10px;
      }

      h1 {
        margin-bottom: 30px;
        color: green;
      }
    </style>
  </head>
  <body>
    <div class="container text-center">
      <div id="infoMessage"><?php echo $message;?></div>
		  <?php echo form_open("auth/login");?>
      <h1>Sistem Informasi Tugas Akhir</h1>
        <div class="form-group">
          <label>Email</label><br>
          <?php echo form_input($identity);?>
        </div>
        <div class="form-group">
          <label>Password</label><br>
          <?php echo form_input($password);?>
        </div>
        <div class="form-group form-checkbox">
          <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>Remember me
        </div>
		    <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
	  <?php echo form_close();?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>