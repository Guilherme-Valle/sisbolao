<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $page_title; ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo $base_url; ?>/public/css/utils.min.css">
		<link rel="stylesheet" href="<?php echo $base_url; ?>/public/css/style.min.css">
        <!--[if lt IE 10]>
			<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/public/css/cv-framework-ie.css">
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		
		<div class="page-wrap">

			<header id="top-header" class="bg-white text-uppercase box-shadow-spread-bottom-white">
				<div class="top-header__container container px-md-2 py-2 rounded">
					<div class="row m-0">
						<nav class="navbar col-12 col-md-4 text-center text-md-left">
							<a class="navbar-brand mx-auto ml-md-0 mr-md-3" href="<?php echo $links['home']; ?>">
								<img src="<?php echo $base_url; ?>/public/img/logo-slogan.svg" class="d-inline-block align-middle" width="200" alt="Logotipo sisbolão">
							</a>
						</nav>
						<nav class="navbar navbar-expand-md col-md-8 navbar-light d-none d-md-flex">
							<div class="collapse navbar-collapse">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active px-md-2">
										<a role="button" href="<?php echo $links['home']; ?>" class="nav-link">Inicio <span class="sr-only">(atual)</span></a>
									</li>
									<li class="nav-item px-md-2">
										<a role="button" href="<?php echo $links['betting-sets']; ?>" class="nav-link">Bolões</a>
									</li>
									<li class="nav-item px-md-2">
										<a role="button" href="<?php echo $links['ranking']; ?>" class="nav-link">Ranking</a>
									</li>
									<li class="nav-item px-md-2 <?php echo ($current_page === 'home' ? 'd-none' : ''); ?>">
										<a role="button" href="<?php echo $links['register']; ?>" class="btn btn-md btn-pal-2 text-white">Cadastre-se</a>
									</li>
									<li class="nav-item px-md-2">
									<a role="button" href="<?php echo $links['login']; ?>" class="btn btn-md btn-pal-1 text-white">Fazer Login</a>
									</li>
								</ul>
							</div>
						</nav>
					</div><!-- /.row !-->
				</div><!-- /.container !-->
			</header>
