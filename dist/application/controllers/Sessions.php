<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

/**
 * Controlador de sessões dos usuários.
 * 
 * @author  Daniel Ferreira
 * @author  Guilherme do Valle
 * @author  Lucas Santos 
 * @version 1.0.0
 * @since   1.0.0
 */
class Sessions extends REST_Controller {

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
        $this->load->model('users_model');
    }

    /**
     * Requisições POST para criação de novos usuários.
     * 
     * @version 1.0.0
     * @since   1.0.0
     * @return  JSON
     */
    public function index_post()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        # Mensagem padrão de campo obrigatório
        $required_message = 'O campo {field} é obrigatório';

        # Regras de validação do campo e-mail
        $this->form_validation->set_rules(
            'email', 'E-mail', 
            'required|valid_email', 
            array(
                'required' => $required_message,
                'valid_email' => 'Formato de e-mail inválido'
            )
        );

        # Regras de validação do campo senha
        $this->form_validation->set_rules(
            'password', 'Senha', 
            'required',
            array(
                'required' => $required_message
            )
        );

        # Teste de validação
        if ($this->form_validation->run() !== FALSE)
        {
            $response_code = $this->users_model->authenticate($this->input->post(NULL, TRUE));
            switch ($response_code)
            {
                case 1: # sucesso
                    $this->set_response([
                        'status' => TRUE,
                        'message' => 'Login realizado com sucesso.',
                        'redirect_to' => ($this->session->has_userdata('redirect_to') ? $this->session->userdata('redirect_to') : base_url('painel'))
                    ], REST_Controller::HTTP_ACCEPTED);
                    break;
                case -1: # e-mail inválido
                    $this->set_response([
                        'status' => TRUE,
                        'message' => 'Endereço de e-mail incorreto ou inexistente.'
                    ], REST_Controller::HTTP_NOT_FOUND);
                    break;
                case -2: # senha inválida
                    $this->set_response([
                        'status' => TRUE,
                        'message' => 'Senha incorreta.'
                    ], REST_Controller::HTTP_NOT_FOUND);
                    break;
            }
        }
        else
        {
            $this->set_response([
                'status' => FALSE,
                'message' => 'Falha ao realizar o login.',
                'errors' => $this->form_validation->error_array()
            ], REST_Controller::HTTP_CREATED);
        }
    }

}
