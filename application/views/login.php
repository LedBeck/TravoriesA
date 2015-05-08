<!DOCTYPE html>
<html ng-app="travelTale" ng-controller="homeController as loginCtrl">
<head>
	<meta charset="UTF-8">
	<title>{{loginCtrl.language.labels.title}}</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/font-opensanslight.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/admin.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/all-skins.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css">
</head>
<body class="login-page">
	<div class="login-box" ng-view>
	</div><!-- /.login-box -->
	<script src="<?php echo base_url();?>public/js/angular.min.js"></script>
	<script src="<?php echo base_url();?>public/js/angular-route.js"></script>
	<script src="<?php echo base_url();?>public/js/angular-animate.js"></script>
	<script src="<?php echo base_url();?>public/js/ui-bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>public/app/componentes/home/homeController.js"></script>
	<script src="<?php echo base_url();?>public/app/app.js"></script>
</body>
</html>