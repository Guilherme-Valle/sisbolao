<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>sisbolão - Editar Rodada - Painel de Controle</title>
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
								<a role="button" class="px-4 py-3">
									<i class="sidebar__menu__i fas fa-trophy fa-lg"></i>
									<span>Campeonatos</span>
								</a>
							</li>
                            <li>
								<a role="button" class="px-4 py-3">
									<i class="sidebar__menu__i fas fa-redo-alt fa-lg"></i>
									<span>Rodadas</span>
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
								<a role="button" class="px-4 py-3">
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
								<a role="button" class="px-4 py-3">
									<i class="sidebar__menu__i fas fa-trophy fa-lg"></i>
									<span>Cadastrar Campeonato</span>
								</a>
							</li>
                            <li>
								<div class="px-4">
									<hr style="border-color: rgba(255,255,255,0.1);">
								</div>
							</li>
							<li>
								<a role="button" class="px-4 py-3">
									<i class="sidebar__menu__i far fa-plus-square fa-lg"></i>
									<span>Criar Bolão</span>
								</a>
							</li>
							<li>
								<a role="button" class="px-4 py-3">
									<i class="sidebar__menu__i far fa-futbol fa-lg"></i>
									<span>Meus Bolões</span>
								</a>
							</li>
							<li>
								<a role="button" class="px-4 py-3">
									<i class="sidebar__menu__i fas fa-futbol fa-lg"></i>
									<span>Bolões que participo</span>
								</a>
							</li>
							<li>
								<a role="button" class="px-4 py-3">
									<i class="sidebar__menu__i fas fa-file-alt fa-lg"></i>
									<span>Histórico</span>
								</a>
							</li>
							<li>
								<a role="button" class="px-4 py-3">
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
                                    <li class="breadcrumb-item">
										<a href="#">Rodadas</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Editar</li>
								</ol>
							</div><!-- /.row !-->
						</div><!-- /.container !-->
					</nav><!-- /breadcrumb !-->
                    <div class="row mb-4">
                        <div class="col-12 col-md-6">
                            <div class="card border-0 rounded p-3 blur-shadow mr-0">
                                <div class="card-header bg-white">
                                    <div class="row">
                                        <div class="col-6 pt-2">
                                            <h5 class="text-muted font-weight-light">Editar Rodada</h5>
                                        </div>
                                    </div>
                                </div><!-- /.card-header !-->
                                <div class="card-body">
                                    <form>
                                        <div class="row justify-content-center justify-content-md-start">
                                            <div class="col-12">
                                                <div class="form-group mb-4">
                                                    <label for="name" class="text-secondary">Nome</label>
                                                    <input type="text" name="name" id="name" class="form-control form-control-lg" value="1ª Rodada">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group mb-4">
                                                    <label for="name" class="text-secondary">Nome</label>
                                                    <select name="championship" id="championship" class="form-control form-control-lg">
                                                        <option>Campeonato Brasileiro - Série A</option>
                                                        <option>Campeonato Baiano - Série A</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <button type="submit" class="btn btn-lg btn-pal-2 text-uppercase small py-4 px-4">Confirmar Alterações</button>
                                            </div>
                                        </div><!-- /.row !-->
                                    </form>
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
