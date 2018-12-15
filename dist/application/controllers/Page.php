<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controlador genérico de rotas e templates.
 * 
 * @since   1.0.0
 */
class Page extends CI_Controller {

    /**
     * Dados a serem exibidos na página.
     * 
     * @since   1.0.0
     */
    private $data;

    /**
     * Método construtor.
     * 
     * @version 1.0.0
     * @since   1.0.0
     * @return  void
     */
    public function __construct()
    {
        parent::__construct();
        $this->data = array();

        # Dados do sistema
        $this->data['base_url'] = substr(base_url(), 0, -1);

        # Links atribuídos à menus
        $this->data['links'] = array(
            'home' => base_url(),
            'betting-sets' => base_url('boloes'),
            'ranking' => base_url('ranking-apostadores'),
            'register' => base_url('cadastro'),
            'login' => base_url('entrar'),
            # Links do Painel de Controle
            'dashboard' => base_url('painel'),
            'dashboard-account-edit' => base_url('painel/editar-conta'),
            'dashboard-my-betting-sets' => base_url('painel/meus-boloes')
        );
    }

    /**
     * Monta condicionalmente o título da página.
     * 
     * @version 1.0.0
     * @since   1.0.0
     * @return  string
     */
    private function build_page_title($page)
    {
        $title_affix = 'sisbolão - Bolões de Futebol Online';
        $title = '';

        switch ($page)
        {
            case 'register':
                $title = 'Cadastro';
                break;
            case 'login':
                $title = 'Entrar';
                break;
            case 'dashboard':
                $title = 'Painel de Controle';
                break;
        }

        if ( ! empty($title))
        {
            $title = $title . ' - ' . $title_affix;
        }
        else
        {
            $title = &$title_affix;
        }

        return $title;
    }

    /**
     * Renderizador de templates responsável por
     * gerenciar as rotas e carregar os devidos arquivos.
     * 
     * @version 1.0.0
     * @since   1.0.0
     * @return  void
     */
    public function render($page = 'home')
    {
        $this->data['current_page'] = $page;
        $this->data['page_title'] = $this->build_page_title($page);
        $this->data['links'][$page] = '#!'; # desativar link para página atual
        $header = 'header';
        $sidebar = '';
        $body = '';
        $footer = 'footer';

        # Usuário com sessão ativa?
        if ($this->session->has_userdata('uid'))
        {
            # obter dados do usuário
        } 

        # Rota ligada ao painel de controle?
        if (preg_match('/^(dashboard){1}/', $page))
        {
            $header = 'dashboard/header';
            $sidebar = 'dashboard/sidebar';
            $footer = 'dashboard/footer';

            /* Bloqueia o acesso ai Painel de Controle caso o usuário
             * não possua uma sessão válida.
             */
            if ( ! $this->session->has_userdata('uid'))
            {
                /* Armazena a URL que o usuário tentou acessar para redirecioná-lo
                 * após o login.
                 */
                $this->session->set_userdata('redirect_to', current_url());
                redirect(base_url('entrar'));
                return;
            }
        }

        # Atribuições relativas
        switch ($page)
        {
            # Página inicial
            case 'home':
                $body = 'home';
                break;
            case 'register':
                $body = 'register';
                break;
            case 'login':
                $body = 'login';
                break;
            case 'dashboard':
                $body = 'dashboard/home';
                break;
        }

        # Carrega os templates
        $this->load->vars($this->data);
        $this->load->view($header);
        if ( ! empty($sidebar))
        {
            $this->load->view($sidebar);
        }
        $this->load->view($body);
        $this->load->view($footer);
    }

}
