<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>sisbolão - Painel de Controle</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../../dist/public/css/utils.min.css">
		<link rel="stylesheet" href="../../dist/admin/css/style.min.css">
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
								<img src="../../dist/public/img/logo-slogan.svg" alt="Logotipo sisbolão" class="w-full">
							</div><!-- /.brand-logo !-->
						</div>
						<div class="col-md-3 col-lg-4 text-md-right d-none d-md-flex">
							<ul class="top-header__navbar__menu ml-auto mb-0 list-style-none">
								<li>
									<a>
										<i class="top-header__navbar__menu__i fas fa-user-circle fa-2x text-pal-2-2"></i>
										<small>administrador</small>
									</a>
								</li>
							</ul>
						</div>
					</div><!-- /.row !-->
				</div><!-- /.container !-->
			</header><!-- /#top-header !-->

			<main id="dashboard-body">
				<aside id="sidebar" class="sidebar sidebar--opened d-none d-md-block">
					<header class="sidebar__header row m-0">
						<div class="brand-logo col-8">
							<img src="../../dist/public/img/logo-w.svg" alt="Logotipo sisbolão" class="w-100">
						</div><!-- /.brand-logo !-->
						<div class="sidebar-toggle col-4 text-center">
							<a href="#!" role="button" data-sidebar-toggle="#sidebar">
								<i class="sidebar-toggle__i fas fa-bars text-secondary"></i>
							</a>
						</div><!-- /.sidebar-toggle !-->
					</header><!-- /.sidebar__header !-->
					<nav class="sidebar__menu py-4 font-weight-light">
						<ul class="m-0 p-0 list-style-none">
							<li>
								<a role="button" class="px-4 py-3" title="Minha conta">
									<i class="sidebar__menu__i fas fa-cogs fa-lg"></i>
									<span>Minha conta</span>
								</a>
							</li>
							<li>
								<div class="px-4">
									<hr style="border-color: rgba(255,255,255,0.1);">
								</div>
							</li>
							<li>
								<a role="button" class="px-4 py-3" title="Meus personagens">
									<i class="sidebar__menu__i far fa-plus-square fa-lg"></i>
									<span>Criar Bolão</span>
								</a>
							</li>
							<li>
								<a role="button" class="px-4 py-3" title="Meus personagens">
									<i class="sidebar__menu__i far fa-futbol fa-lg"></i>
									<span>Meus Bolões</span>
								</a>
							</li>
							<li>
								<a role="button" class="px-4 py-3" title="Meus personagens">
									<i class="sidebar__menu__i fas fa-futbol fa-lg"></i>
									<span>Bolões que participo</span>
								</a>
							</li>
							<li>
								<a role="button" class="px-4 py-3" title="Logs">
									<i class="sidebar__menu__i fas fa-file-alt fa-lg"></i>
									<span>Histórico</span>
								</a>
							</li>
							<li>
								<a role="button" class="px-4 py-3" title="Sair">
									<i class="sidebar__menu__i fas fa-sign-out-alt fa-lg"></i>
									<span>Sair</span>
								</a>
							</li>
						</ul>
					</nav>
				</aside><!-- /#sidebar !-->
				<aside id="sidebar-mobile" class="sidebar sidebar--closed d-md-none">
					<header class="sidebar__header py-4 text-center text-light">
						<i class="fas fa-user-circle fa-2x"></i>
						<p class="font-weight-light m-0 small">administrador</p>
					</header><!-- /.sidebar__header !-->
					<nav class="sidebar__menu py-4 font-weight-light">
						<ul class="m-0 p-0 list-style-none">
							<li>
								<a role="button" class="px-4 py-3" title="Minha conta">
									<i class="sidebar__menu__i fas fa-cogs fa-lg"></i>
									<span>Minha conta</span>
								</a>
							</li>
							<li>
								<div class="px-4">
									<hr style="border-color: rgba(255,255,255,0.1);">
								</div>
							</li>
							<li>
								<a role="button" class="px-4 py-3" title="Meus personagens">
									<i class="sidebar__menu__i far fa-plus-square fa-lg"></i>
									<span>Criar Bolão</span>
								</a>
							</li>
							<li>
								<a role="button" class="px-4 py-3" title="Meus personagens">
									<i class="sidebar__menu__i far fa-futbol fa-lg"></i>
									<span>Meus Bolões</span>
								</a>
							</li>
							<li>
								<a role="button" class="px-4 py-3" title="Meus personagens">
									<i class="sidebar__menu__i fas fa-futbol fa-lg"></i>
									<span>Bolões que participo</span>
								</a>
							</li>
							<li>
								<a role="button" class="px-4 py-3" title="Logs">
									<i class="sidebar__menu__i fas fa-file-alt fa-lg"></i>
									<span>Histórico</span>
								</a>
							</li>
							<li>
								<a role="button" class="px-4 py-3" title="Sair">
									<i class="sidebar__menu__i fas fa-sign-out-alt fa-lg"></i>
									<span>Sair</span>
								</a>
							</li>
						</ul>
					</nav><!-- /.sidebar__menu !-->
				</aside><!-- /#sidebar-mobile !-->
				<section class="dashboard-body__content px-4 py-4">
					<nav aria-label="breadcrumb" class="mb-4">
						<div class="container">
							<div class="row">
								<ol class="breadcrumb bg-transparent m-0 small">
									<li class="breadcrumb-item">
										<a href="#">Inicio</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Minha Conta</li>
								</ol>
							</div><!-- /.row !-->
						</div><!-- /.container !-->
					</nav><!-- /breadcrumb !-->
					<div class="account-summary row text-center text-md-left mb-4">
						<div class="col-12 col-md-6">
							<div class="card border-0 rounded p-3 blur-shadow mr-0">
								<div class="card-header bg-white">
									<div class="row">
										<div class="col-6 pt-2">
											<h5 class="text-muted font-weight-light">Dados da Conta</h5>
										</div>
										<div class="col-6 text-right">
											<a href="#!" class="btn btn-pal-2-2">
												<small>Editar</small>
											</a>
										</div>
									</div>
								</div><!-- /.card-header !-->
								<div class="card-body">
									<table class="table table-bordered small">
										<tbody>
											<tr>
												<th scope="col" class="bg-light text-muted">Nome:</th>
												<td scope="col">Lucas de Jesus Santos Brito</td>
											</tr>
											<tr>
												<th scope="col" class="bg-light text-muted">E-mail:</th>
												<td scope="col">lucasljsb@gmail.com</td>
											</tr>
											<tr>
												<th scope="col" class="bg-light text-muted">Último login:</th>
												<td scope="col">13/12/2018</td>
											</tr>
											<tr>
												<th scope="col" class="bg-light text-muted">Último IP:</th>
												<td scope="col">127.0.0.1</td>
											</tr>
										</tbody>
									</table>
								</div><!-- /.card-body !-->
							</div><!-- /.card !-->
						</div>
						<div class="col-12 col-md-6">
							<div class="row">
								<div class="col-12 col-xl-6 mt-4 mb-4 mt-md-0">
									<div class="card border-0 rounded p-3 blur-shadow mr-0">
										<div class="card-body">
											<h5 class="card-title text-muted">Sua Pontuação</h5>
											<div class="card-subtitle mb-2 text-muted small">Total Geral</div>
											<hr>
											<h4 class="text-pal-1">294</h4>
										</div>
									</div>
								</div>
								<div class="col-12 col-xl-6">
									<div class="card border-0 rounded p-3 blur-shadow mr-0">
										<div class="card-body">
											<h5 class="card-title text-muted">Seus Bolões</h5>
											<div class="card-subtitle mb-2 text-muted small">Ativos e Inativos</div>
											<hr>
											<h4 class="text-pal-2">4</h4>
										</div>
									</div>
								</div>
							</div><!-- /.row !-->
						</div>
					</div><!-- /.account-summary !-->
					<div class="row">
						<div class="col-12">
							<div class="card border-0 rounded p-3 blur-shadow mr-0">
								<div class="card-header bg-white">
									<div class="row">
										<div class="col-6 pt-2">
											<h5 class="text-muted font-weight-light">Bolões que participo</h5>
										</div>
										<div class="col-6 text-right">
											<a href="#!" class="btn btn-dark">
												<small>Ver todos</small>
											</a>
										</div>
									</div>
								</div><!-- /.card-header !-->
								<div class="card-body">
									<div class="table-responsive-sm">
										<table class="table table-hover small">
											<thead class="thead-light">
												<tr>
													<th scope="col">Tipo</th>
													<th scope="col">Nome</th>
													<th scope="col" class="d-none d-md-table-cell">Campeonato</th>
													<th scope="col" class="d-none d-md-table-cell">Rodada</th>
													<th scope="col" class="d-none d-xl-table-cell">Apostadores</th>
													<th scope="col">Encerramento</th>
													<th scope="col">Ações</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<i class="fas fa-lock-open text-black-50" title="Público - Aberto à todos"></i>
													</td>
													<td>Bolão do Ivan</td>
													<td class="d-none d-md-table-cell">Campeonato Brasileiro - Série A - 2019</td>
													<td class="d-none d-md-table-cell">2ª</td>
													<td class="d-none d-xl-table-cell">34/100</td>
													<td>15/12/2018</td>
													<td>
														<a href="#!" class="btn btn-sm btn-pal-2">
															<small>Editar palpites</small>
														</a>
														<a href="#!" class="btn btn-sm btn-danger">
															<small>Sair</small>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<i class="fas fa-lock text-black-50" title="Privado - Requer convite"></i>
													</td>
													<td>Bolão da turma</td>
													<td class="d-none d-md-table-cell">Campeonato Brasileiro - Série B - 2019</td>
													<td class="d-none d-md-table-cell">2ª</td>
													<td class="d-none d-xl-table-cell">21/60</td>
													<td>18/12/2018</td>
													<td>
														<a href="#!" class="btn btn-sm btn-pal-2">
															<small>Editar palpites</small>
														</a>
														<a href="#!" class="btn btn-sm btn-danger">
															<small>Sair</small>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<i class="fas fa-lock text-black-50" title="Privado - Requer convite"></i>
													</td>
													<td>Bolão dos amigos</td>
													<td class="d-none d-md-table-cell">Campeonato Espanhol - Série A - 2019</td>
													<td class="d-none d-md-table-cell">1ª</td>
													<td class="d-none d-xl-table-cell">64/60</td>
													<td>14/12/2018</td>
													<td>
														<a href="#!" class="btn btn-sm btn-pal-2">
															<small>Editar palpites</small>
														</a>
														<a href="#!" class="btn btn-sm btn-danger">
															<small>Sair</small>
														</a>
													</td>
												</tr>
												<tr>
													<td>
														<i class="fas fa-lock-open text-black-50" title="Público - Aberto à todos"></i>
													</td>
													<td>Bolão do Pedroca</td>
													<td class="d-none d-md-table-cell">Campeonato Baiano - Série A - 2019</td>
													<td class="d-none d-md-table-cell">2ª</td>
													<td class="d-none d-xl-table-cell">34/100</td>
													<td>19/12/2018</td>
													<td>
														<a href="#!" class="btn btn-sm btn-light disabled" aria-disabled="true">
															<small>Editar palpites</small>
														</a>
														<a href="#!" class="btn btn-sm btn-danger">
															<small>Sair</small>
														</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div><!-- /.table-responsive-sm !-->
								</div><!-- /.card-body !-->
							</div><!-- /.card !-->
						</div>
					</div><!-- /.row !-->
				</section>
			</main>

			<script src="../../dist/public/js/utils.min.js"></script>
			<script src="../../dist/admin/js/scripts.min.js"></script>
		</div><!-- /.page-wrap !-->
	</body>
</html>
