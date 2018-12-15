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
                            <a role="button" href="<?php echo $links['dashboard-account-edit']; ?>" class="btn btn-pal-2-2">
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
