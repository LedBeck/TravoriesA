<!DOCTYPE html>
<html lang="en" ng-app="travelTale" ng-controller="homeController as homeCtrl">
<head>
	<meta charset="UTF-8">
	<title>{{homeCtrl.language.labels.title}}</title>
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/font-opensanslight.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/admin.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/all-skins.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/animate.css">
</head>
<body ui-view="general" class="skin-blue">
	<script src="<?php echo base_url();?>public/js/angular.min.js"></script>
	<script src="<?php echo base_url();?>public/js/angular-route.js"></script>
	<script src="<?php echo base_url();?>public/js/angular-animate.js"></script>
	<script src="<?php echo base_url();?>public/js/ui-bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>public/js/angular-ui-router.js"></script>
	<script src="<?php echo base_url();?>public/app/componentes/home/homeController.js"></script>
	<script src="<?php echo base_url();?>public/app/app.js"></script>
</body>
</html>