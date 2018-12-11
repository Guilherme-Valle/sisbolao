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
		<title>Login - sisbolão - Gerenciador de apostas</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../dist/public/css/utils.min.css">
		<link rel="stylesheet" href="../dist/public/css/style.min.css">
	</head>
	<body>

		<div class="page-wrap">

			<header id="top-header" class="bg-white text-uppercase">
				<div class="top-header__container container px-md-2 py-2 rounded">
					<div class="row m-0">
						<nav class="navbar navbar-expand-md col-md-4">
							<a class="navbar-brand" href="#">
								<img src="../dist/public/img/logo-slogan.svg" class="d-inline-block align-middle" width="200" alt="Logotipo sisbolão">
							</a>
						</nav>
						<nav class="navbar navbar-expand-md col-md-8 navbar-light ">
							<div class="collapse navbar-collapse">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active px-md-2">
										<a role="button" href="#!" class="nav-link">Inicio <span class="sr-only">(atual)</span></a>
									</li>
									<li class="nav-item px-md-2">
										<a role="button" href="#!" class="nav-link">Bolões</a>
									</li>
									<li class="nav-item px-md-2">
										<a role="button" href="#!" class="nav-link">Ranking</a>
									</li>
									<li class="nav-item px-md-2">
										<a role="button" href="#!" class="btn btn-md btn-pal-2 text-white">Cadastre-se</a>
									</li>
									<li class="nav-item px-md-2">
									<a role="button" href="#!" class="btn btn-md btn-pal-1 text-white">Login</a>
									</li>
								</ul>
							</div>
						</nav>
					</div><!-- /.row !-->
				</div><!-- /.container !-->
			</header>

			<nav aria-label="breadcrumb" class="py-4 bg-pal-2-2">
				<div class="container">
					<div class="row">
						<ol class="breadcrumb bg-transparent m-0">
							<li class="breadcrumb-item">
								<a href="#">Inicio</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Login</li>
						</ol>
					</div><!-- /.row !-->
				</div><!-- /.container !-->
			</nav><!-- /breadcrumb !-->

			<section id="login-form" class="py-5 my-5">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-12 col-md-9 col-lg-6 col-xl-5">
							<div class="blur-shadow p-5">
								<form>
									<div class="row justify-content-center justify-content-md-start">
										<div class="col-12">
											<div class="form-group mb-4">
												<label for="name" class="text-secondary">Nome de usuário ou e-mail</label>
												<input type="text" id="name" class="form-control form-control-lg">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group mb-4">
												<label for="password" class="text-secondary">Senha</label>
												<input type="password" id="password" class="form-control form-control-lg">
											</div>
										</div>
										<div class="col-auto">
											<div class="form-group">
												<div class="form-check">
													<input name="autologin" class="form-check-input" type="checkbox" id="autologin">
													<label class="form-check-label small text-secondary" for="autologin">
														Mantenha-me conectado
													</label>
												</div>
											</div>
										</div>
										<div class="col-auto">
											<div class="form-group">
												<div class="form-check">
													<a role="button" href="#!" class="small text-center text-md-right">Esqueceu sua senha?</a>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-6">
											<button type="submit" class="btn btn-lg btn-pal-1 text-uppercase small py-4 px-5 w-100">Entrar</button>
										</div>
									</div><!-- /.row !-->
								</form>
							</div>
						</div>
					</div><!-- /.row !-->
				</div><!-- /.container !-->
			</section><!-- /#login-form !-->

		</div><!-- /.page-wrap !-->

		<footer class="standard-footer py-3 border-top box-shadow-spread-top-white position-absolute w-100">
			<div class="container">
				<div class="row text-center text-black-50">
					<div class="col-12">
						<div class="small">sisbolão &#169; 2018. Todos os direitos reservados</div>
					</div>
				</div><!-- /.row !-->
			</div><!-- /.container !-->
		</footer><!-- /.standard-footer !-->
	
		<script src="../dist/public/js/utils.min.js"></script>
		<script src="../dist/public/js/scripts.min.js"></script>
	</body>
</html>
