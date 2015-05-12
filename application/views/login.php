<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login | TravelTale</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/admin.css">
  <link rel="stylesheet" href="<?php echo base_url();?>public/js/plugins/iCheck/square/blue.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Admin</b>TravelTale</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Inicie Sesión</p>
        <img class="profile-img" src="<?php echo base_url();?>public/images/user.png" alt="">
        <form action="<?php echo base_url();?>admin/login" method="post" id="login-form">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" data-ajax name="email" placeholder="Email" required/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="passoword" placeholder="Password" required/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
            </div><!-- /.col -->
          </div>
        </form>
        <a href="register" class="text-center">Registrarme</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <script src="<?php echo base_url();?>public/js/plugins/jQuery/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>public/js/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/plugins/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/plugins/typeahead.jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/fileinput.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/fileinput_locale_es.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/plugins/noty/packaged/jquery.noty.packaged.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/plugins/noty/themes/default.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/js.js" type="text/javascript"></script>
    <script>
      window.base_url = <?php echo json_encode(base_url()); ?>;
    </script>
    <style>
      .profile-img{
          width: 96px;
          height: 96px;
          margin: 0 auto 10px;
          display: block;
          -moz-border-radius: 50%;
          -webkit-border-radius: 50%;
          border-radius: 50%;
      }
    </style>
  </body>
</html>