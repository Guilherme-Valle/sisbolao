<nav aria-label="breadcrumb" class="py-4 bg-pal-2-2">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb bg-transparent m-0 small">
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
                    <form data-action="<?php echo $base_url; ?>/api/sessions" data-ajax-submit data-ajax-submit-alert data-ajax-submit-redirect>
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label for="email" class="text-secondary">E-mail</label>
                                    <input type="email" name="email" id="email" class="form-control form-control-lg">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label for="password" class="text-secondary">Senha</label>
                                    <input type="password" name="password" id="password" class="form-control form-control-lg">
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