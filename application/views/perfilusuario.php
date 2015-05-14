<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register | TravelTale</title>
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.css">
	
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/font-opensanslight.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/admin.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/all-skins.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/js/plugins/daterangepicker/daterangepicker-bs3.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/fileinput.css">
</head>
<body class="register-page">
<div class="register-box">
	<div class="register-box-body" ng-controller="DatepickerDemoCtrl">
		<p class="login-box-msg">Perfil</p>
		<form action="register" method="post" enctype="multipart/form-data" id="register">
			<input type="hidden" name="iduser" value="<?php echo $user->getIduser() ?>">
			<img class="profile-img" src="<?php echo base_url();?>public/uploads/<?php echo $user->getFoto() ?>" alt="">
			<div class="form-group has-feedback">
				<input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $user->getEmail() ?>" required/>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" placeholder="Password"  name="password" required/>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" placeholder="Repita Password" name="repassword" required/>
				<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="text" class="form-control" placeholder="Nombre" value="<?php echo $user->getNombre() ?>"  name="nombre" required/>
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="text" class="form-control" name="nacionalidad" value="<?php echo $user->getNacionalidad() ?>" placeholder="Nacionalidad" required/>
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="text" class="form-control" value="<?php echo $user->getFechaNacimiento() ?>" placeholder="Fecha de Nacimiento" name="nacimiento" required/>
				<span class="glyphicon glyphicon-calendar form-control-feedback"></span>
			</div>
			<div class="row">
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Guardar</button>
				</div><!-- /.col -->
			</div>
			<input type="hidden" name="registro" value="1">
		</form>        
	</div><!-- /.form-box -->
</div><!-- /.register-box -->
	
	<script src="<?php echo base_url();?>public/js/plugins/jQuery/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>public/js/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/plugins/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/plugins/typeahead.jquery.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>public/js/fileinput.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/fileinput_locale_es.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/plugins/noty/packaged/jquery.noty.packaged.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/plugins/noty/themes/default.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/chosen.jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/js.js" type="text/javascript"></script>
</body>
</html>


<style>
	body{
		background:none repeat scroll 0 0 #d2d6de;
	}
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