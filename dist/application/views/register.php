<nav aria-label="breadcrumb" class="py-4 bg-pal-2-2">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb bg-transparent m-0 small">
                <li class="breadcrumb-item">
                    <a href="<?php echo $base_url; ?>">Inicio</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
            </ol>
        </div><!-- /.row !-->
    </div><!-- /.container !-->
</nav><!-- /breadcrumb !-->

<section id="registration-form" class="py-5 my-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-9 col-lg-7">
                <div class="blur-shadow p-5">
                    <form>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label for="name" class="text-secondary">Nome *</label>
                                    <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="Insira o nome completo">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label for="email" class="text-secondary">E-mail *</label>
                                    <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Insira um e-mail válido">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label for="password" class="text-secondary">Senha *</label>
                                    <input type="password" name="password" id="password" class="form-control form-control-lg">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mb-4">
                                    <label for="confirm_password" class="text-secondary">Confirmar senha *</label>
                                    <input type="password" name="confirm_password" id="confirm_password" class="form-control form-control-lg">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" name="terms_check" id="terms_check" class="form-check-input">
                                        <label class="form-check-label small text-secondary" for="terms-check">
                                            Clicando em <strong>Cadastrar</strong>, você concorda com nossos <a role="button">Termos e Serviços</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <button type="submit" class="btn btn-lg btn-pal-1 text-uppercase small py-4 px-5 w-100">Cadastrar</button>
                            </div>
                            <div class="col-12 col-sm-6">
                                <button type="submit" class="btn btn-lg btn-pal-4 text-uppercase small py-4 px-5 w-100">Apagar Formulário</button>
                            </div>
                        </div><!-- /.row !-->
                    </form>
                </div>
            </div>
        </div><!-- /.row !-->
    </div><!-- /.container !-->
</section><!-- /#registration-form !-->
