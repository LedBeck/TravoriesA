<!DOCTYPE html>
<html lang="en" ng-app="travelTale" ng-controller="homeController as homeCtrl">
<head>
	<meta charset="UTF-8">
	<title>TravelTale | Admin</title>
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/font-opensanslight.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/admin.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/all-skins.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/js/plugins/daterangepicker/daterangepicker-bs3.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/admin.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/js/plugins/iCheck/square/blue.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/fileinput.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap-tagsinput.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css">
</head>
<body class="skin-blue fixed">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="#" class="logo"><b>TravelTale</b></a>
			<nav class="navbar navbar-static-top" role="navigation">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Notifications: style can be found in dropdown.less -->
						<li class="dropdown notifications-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
								<!-- <span class="label label-warning">10</span> -->
							</a>
							<ul class="dropdown-menu">
								<li class="header">No tiene Notificaciones</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<!-- <ul class="menu">
										<li>
											<a href="#">
												<i class="fa fa-users text-aqua"></i> 5 new members joined today
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-users text-red"></i> 5 new members joined
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-shopping-cart text-green"></i> 25 sales made
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-user text-red"></i> You changed your username
											</a>
										</li>
									</ul> -->
								</li>
								<li class="footer"><!-- <a href="#">View all</a> --></li>
							</ul>
						</li>

						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo base_url();?>public/uploads/<?php echo $usuario->getFoto() ?>" class="user-image" alt="User Image"/>
								<span class="hidden-xs"><?php echo $usuario->getNombre() ?></span>
							</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header">
									<img src="<?php echo base_url();?>public/uploads/<?php echo $usuario->getFoto() ?>" class="img-circle" alt="User Image" />
									<p>
										<?php echo $usuario->getNombre() ?>
									</p>
								</li>
								<!-- Menu Body -->
								<!-- <li class="user-body">
									<div class="col-xs-4 text-center">
										<a href="#">Friends</a>
									</div>
								</li> -->
								<!-- Menu Footer-->
								<li class="user-footer">
<!-- 									<div class="pull-left">
	<a href="#" class="btn btn-default btn-flat">Perfil</a>
</div> -->
									<div class="pull-right">
										<a href="<?php echo base_url().'admin/logout' ?>" class="btn btn-default btn-flat">Log Out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?php echo base_url();?>public/uploads/<?php echo $usuario->getFoto(); ?>" class="img-circle" alt="User Image" />
					</div>
					<div class="pull-left info">
						<p><?php echo $usuario->getNombre(); ?></p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<!-- search form -->
<!-- 				<form action="#" method="get" class="sidebar-form">
	<div class="input-group">
		<input type="text" name="q" class="form-control" placeholder="Search..."/>
		<span class="input-group-btn">
			<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
		</span>
	</div>
</form> -->
				<!-- /.search form -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu" ng-controller="menuController as menu">
					<li class="header">Menú Principal</li>
					<li>
						<a href="#" >
							<i class="fa fa-dashboard" ></i><span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href="#" >
							<i class="fa fa-th"></i> <span>Perfil</span>
						</a>
					</li>
					<li class="treeview">
						<a href="#" >
							<i class="fa fa-th"></i> <span>Experiencia</span><i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="treeview-menu">
							<li><a href="<?php echo base_url().'exp' ?>" data-type="ajax" data-load="principal"><i class="fa fa-circle-o"></i> Ver Todas</a></li>
							<li><a href="<?php echo base_url().'exp/add' ?>" data-type="ajax" data-load="principal"><i class="fa fa-circle-o"></i> Agregar</a></li>
						</ul>
					</li>

<!-- 					<li>
	<a href="#" >
		<i class="fa fa-calendar"></i> <span>Calendar</span>
		<small class="label pull-right bg-red">3</small>
	</a>
</li>
<li>
	<a href="#" >
		<i class="fa fa-envelope"></i> <span>Mailbox</span>
		<small class="label pull-right bg-yellow">12</small>
	</a>
</li> -->
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					Dashboard
					<small>Control panel</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</section>
			<section class="content" >
				<div class="mainSection"></div>
			</section>
			<!-- right col -->
		</div>
		<!-- /.row (main row) -->
		<footer class="main-footer">
			<strong>Copyright &copy; 2015 </a></strong> All rights reserved.
		</footer>
	</div>
	<script src="<?php echo base_url();?>public/js/plugins/jQuery/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url();?>public/js/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>public/js/plugins/slimScroll/jquery.slimscroll.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>public/js/plugins/moment.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>public/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>public/js/plugins/typeahead.jquery.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>public/js/fileinput.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>public/js/fileinput_locale_es.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>public/js/plugins/noty/packaged/jquery.noty.packaged.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>public/js/plugins/noty/themes/default.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>public/js/chosen.jquery.js" type="text/javascript"></script>	
	<script src="<?php echo base_url();?>public/js/fileinput.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/fileinput_locale_es.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>public/js/bootstrap-tagsinput.js" type="text/javascript"></script>
    
	<script>
		window.base_url = <?php echo json_encode(base_url()); ?>;
    </script>
	<script src="<?php echo base_url();?>public/js/app.js"></script>
	<script src="<?php echo base_url();?>public/js/Admin.js"></script>
</body>
</html>
