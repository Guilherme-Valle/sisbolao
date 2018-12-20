<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $page_title; ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo $base_url; ?>/public/css/utils.min.css">
		<link rel="stylesheet" href="<?php echo $base_url; ?>/admin/css/style.min.css">
	</head>
	<body>
		<div class="page-wrap page-wrap--opened-sidebar w-100">

			<header id="top-header" class="bg-white">
				<div class="container-fluid">
					<div class="top-header__navbar white row justify-content-md-end">
						<a data-sidebar-toggle="#sidebar-mobile" role="button" class="sidebar-mobile-toggler d-md-none text-center">
							<i class="fas fa-times fa-lg text-white"></i>
							<i class="fa fa-bars fa-lg"></i>
						</a><!-- /.sidebar-mobile-toggler !-->
						<div class="col-12 d-md-none">
							<div class="brand-logo text-center">
								<img src="<?php echo $base_url; ?>/public/img/logo-slogan.svg" alt="Logotipo sisbolão" class="w-full">
							</div><!-- /.brand-logo !-->
						</div>
						<div class="col-md-3 col-lg-4 text-md-right d-none d-md-flex">
							<ul class="top-header__navbar__menu ml-auto mb-0 list-style-none">
								<li>
									<a>
										<i class="top-header__navbar__menu__i fas fa-user-circle fa-2x text-pal-2-2"></i>
										<small><?php echo $user->get_name(); ?></small>
									</a>
								</li>
							</ul>
						</div>
					</div><!-- /.row !-->
				</div><!-- /.container !-->
			</header><!-- /#top-header !-->

			<main id="dashboard-body">
