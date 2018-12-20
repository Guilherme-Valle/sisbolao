<section class="dashboard-body__content px-4 py-4">
    <nav aria-label="breadcrumb" class="mb-4">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb bg-transparent m-0 small">
                    <li class="breadcrumb-item">
                        <a href="#">Inicio</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Rodadas</li>
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
                            <h5 class="text-muted font-weight-light">Cadastrar Rodada</h5>
                        </div>
                    </div>
                </div><!-- /.card-header !-->
                <div class="card-body">
                    <form>
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label for="name" class="text-secondary">Nome</label>
                                    <input type="text" name="name" id="name" class="form-control form-control-lg">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <button type="submit" class="btn btn-lg btn-pal-1 text-uppercase small py-4 px-4">Confirmar Cadastro</button>
                            </div>
                        </div><!-- /.row !-->
                    </form>
                </div><!-- /.card-body !-->
            </div><!-- /.card !-->
        </div>
    </div><!-- /.row !-->
    <div class="row"> 
        <div class="col-12">
            <div class="card border-0 rounded p-3 blur-shadow mr-0">
                <div class="card-header bg-white">
                    <div class="row">
                        <div class="col-6 pt-2">
                            <h5 class="text-muted font-weight-light">Rodadas Cadastradas</h5>
                        </div>
                    </div>
                </div><!-- /.card-header !-->
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-hover small">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Campeonato</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1ª rodada</td>
                                    <td>Campeonato Brasileiro - Série A</td>
                                    <td>
                                        <a href="#!" class="btn btn-sm btn-pal-2">
                                            <small>Editar</small>
                                        </a>
                                        <a href="#!" class="btn btn-sm btn-danger">
                                            <small>Excluir</small>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1ª rodada</td>
                                    <td>Campeonato Baiano - Série A</td>
                                    <td>
                                        <a href="#!" class="btn btn-sm btn-pal-2">
                                            <small>Editar</small>
                                        </a>
                                        <a href="#!" class="btn btn-sm btn-danger">
                                            <small>Excluir</small>
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
