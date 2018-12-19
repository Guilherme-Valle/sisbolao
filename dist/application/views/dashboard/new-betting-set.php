<section class="dashboard-body__content px-4 py-4">
    <nav aria-label="breadcrumb" class="mb-4">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb bg-transparent m-0 small">
                    <li class="breadcrumb-item">
                        <a href="#">Inicio</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Criar Bolão</li>
                </ol>
            </div><!-- /.row !-->
        </div><!-- /.container !-->
    </nav><!-- /breadcrumb !-->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 rounded p-3 blur-shadow mr-0">
                <div class="card-body">
                    <form>
                        <div class="row mb-2 justify-content-center justify-content-md-start">
                            <div class="col-12">
                                <h4 class="text-muted font-weight-light">Dados do Bolão</h4>
                                <span>
                                    <i class="fas fa-info-circle text-muted"></i>
                                    <small class="text-muted font-weight-light">Insira os dados básicos do Bolão</small>
                                </span>
                                <hr>
                            </div>
                        </div><!-- /.row !-->
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form-group mb-4">
                                    <label for="name" class="text-secondary">Nome</label>
                                    <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="Insira aqui o nome do bolão">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form-group mb-4">
                                    <label for="championship" class="text-secondary">Campeonato</label>
                                    <select name="championship" id="championship" class="form-control form-control-lg">
                                        <option>Campeonato Brasileiro - Série A</option>
                                        <option>Campeonato Baiano - Série A</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2 col-xl-1">
                                <div class="form-group mb-4">
                                    <label for="round" class="text-secondary">Rodada</label>
                                    <select name="round" id="round" class="form-control form-control-lg">
                                        <option>1ª</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-auto">
                                <div class="form-group mb-4">
                                    <label for="round" class="text-secondary">Máximo de Apostadores</label>
                                    <input type="number" name="max_bettors" id="max_bettors" class="form-control form-control-lg">
                                </div>
                            </div>
                        </div><!-- /.row !-->
                        <div class="row my-2">
                            <div class="col-12">
                                <h4 class="text-muted font-weight-light">Regras de Pontuação</h4>
                                <span>
                                    <i class="fas fa-info-circle text-muted"></i>
                                    <small class="text-muted font-weight-light">Defina aqui as regras de pontuação e critérios de desempate.</small>
                                </span>
                                <hr>
                            </div>
                        </div><!-- /.row !-->
                        <div class="row">
                            <div class="col-12 col-md-auto">
                                <label for="name" class="text-secondary">Acertar o placar</label>
                                <div class="input-group mb-3 rounded">
                                    <input type="number" name="ap" id="ap" class="form-control form-control-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <small>pontos</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-auto">
                                <label for="name" class="text-secondary">Acertar os gols do vencedor</label>
                                <div class="input-group mb-3 rounded">
                                    <input type="number" name="gv" id="gv" class="form-control form-control-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <small>pontos</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-auto">
                                <label for="name" class="text-secondary">Acertar o saldo de gols</label>
                                <div class="input-group mb-3 rounded">
                                    <input type="number" name="sg" id="sg" class="form-control form-control-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <small>pontos</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-auto">
                                <label for="name" class="text-secondary">Acertar os gols do perdedor</label>
                                <div class="input-group mb-3 rounded">
                                    <input type="number" name="gp" id="gp" class="form-control form-control-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <small>pontos</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-auto">
                                <label for="name" class="text-secondary">Acertar o vencedor</label>
                                <div class="input-group mb-3 rounded">
                                    <input type="number" name="av" id="av" class="form-control form-control-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <small>pontos</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.row !-->
                        <div class="row justify-content-center justify-content-md-start mt-4">
                            <div class="col-12 col-md-6">
                                <button type="submit" class="btn btn-lg btn-pal-1 text-uppercase small py-4 px-4">Confirmar criação</button>
                            </div>
                        </div><!-- /.row !-->
                    </form>
                </div><!-- /.card-body !-->
            </div><!-- /.card !-->
        </div>
    </div><!-- /.row !-->
</section>