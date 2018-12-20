<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Users extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->database(); # Usado somente em contexto de validação
    }

    /**
     * 
     */
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === NULL || ! is_int($id) || $id < 0)
        {
            $this->set_response([
                'status' => FALSE,
                'message' => 'Invalid id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
        else
        {
            $result = $this->users_model->get();
            if ( (is_array($result) && ! empty(array_filter($result)))
                    || $result !== NULL )
            {
                $this->set_response($result, REST_Controller::HTTP_OK);
            }
            else
            {
                $this->set_response([
                    'status' => FALSE,
                    'message' => 'User could not be found'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_post()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        # Mensagem padrão de campo obrigatório
        $required_message = 'O campo {field} é obrigatório';

        # Regras de validação do campo nome
        $this->form_validation->set_rules(
            'name', 'Nome', 
            'required', 
            array(
                'required' => $required_message
            )
        );

        # Regras de validação do campo e-mail
        $this->form_validation->set_rules(
            'email', 'E-mail', 
            'required|valid_email|is_unique[users.email]', 
            array(
                'required' => $required_message,
                'valid_email' => 'Formato de e-mail inválido',
                'is_unique' => 'Este e-mail já está sendo utilizado'
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

        # Regras de validação do campo de confirmação de senha
        $this->form_validation->set_rules(
            'confirm_password', 'Confirmação da senha', 
            'required|matches[password]',
            array(
                'required' => $required_message,
                'matches' => 'As senhas informadas não conferem'
            )
        );

        # Teste de validação
        if ($this->form_validation->run() !== FALSE)
        {
            $this->users_model->new($this->input->post(NULL, TRUE));
            $this->set_response([
                'status' => TRUE,
                'message' => 'Cadastro realizado com sucesso!'
            ], REST_Controller::HTTP_CREATED);
        }
        else
        {
            $this->set_response([
                'status' => FALSE,
                'message' => 'Falha ao realizar o cadastro.',
                'errors' => $this->form_validation->error_array()
            ], REST_Controller::HTTP_CREATED);
        }
    }

}
