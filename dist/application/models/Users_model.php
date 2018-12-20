<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Manipulação de dados do usuário.
 * 
 * @author  Daniel Ferreira
 * @author  Guilherme do Valle
 * @author  Lucas Santos 
 * @version 1.0.0
 * @since   1.0.0
 */
class Users_model extends SISB_Model {

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
        $this->load->library('session');
    }

    /**
     * Obtenção de dados de usuários.
     * 
     * @version 1.0.0
     * @since   1.0.0
     * @return  array
     */
    public function get($id = NULL)
    {
        $result = array();
        $result_mode = self::MULTIPLE_RESULTS;
        $qb = $this->doctrine->get_entity_manager()->createQueryBuilder();
        $qb->select('users')->from('Entity\\User', 'users');

        if ($id !== NULL)
        {
            $qb->where('users.id = :id')
                ->setParameters(array(
                    'id' => $id
                ));
            $result_mode = self::SINGLE_RESULT;
        }

        $query = $qb->getQuery();

        return $this->result($query, $result_mode);        
    }

    /**
     * Criação de um novo usuário.
     * 
     * @version 1.0.0
     * @since   1.0.0
     * @return  void
     */
    public function new($form_data = array())
    {
        if ( ! empty(array_filter($form_data)))
        {
            $user = new \Entity\User();
            $user->set_access_level(0); # usuário comum (não administrador)
            $user->set_state(0); # status da conta; 0 = normal
            $user->set_name($form_data['name']);
            $user->set_email($form_data['email']);
            $user->set_password($form_data['password']); # criptografar a senha?

            # iniciar persistência
            $this->doctrine->get_entity_manager()->persist($user);
            $this->doctrine->get_entity_manager()->flush();
        }
        else
        {
            # exception ?
        }
    }

    /**
     * Autenticação do usuário.
     * 
     * @version 1.0.0
     * @since   1.0.0
     * @return  int
     */
    public function authenticate($form_data = array())
    {
        if( ! empty($form_data))
        {
            $response = 0;
            $qb = $this->doctrine->get_entity_manager()->createQueryBuilder();
            $qb->select('users')
                ->from('Entity\\User', 'users')
                ->where('users.email = :email')
                ->setParameters(array(
                    'email' => $form_data['email']
                ));
            $query = $qb->getQuery();

            # e-mail existe?
            if ( ! empty(array_filter($query->getResult())))
            {
                unset($qb); # reseta query builder
                $qb = $this->doctrine->get_entity_manager()->createQueryBuilder();
                $qb->select('users')
                    ->from('Entity\\User', 'users')
                    ->where('users.email = :email')
                    ->andWhere('users.password = :password')
                    ->setParameters(array(
                        'email' => $form_data['email'],
                        'password' => $form_data['password']
                    ))
                    ->setMaxResults(1);
                $query = $qb->getQuery();

                # verificação de senha
                if( ! empty(($user = $query->getOneOrNullResult())))
                {
                    $response = 1;
                    # inicializar sessão
                    $this->session->set_userdata(array(
                        'uid' => $this->encryption->encrypt($user->get_id())
                    ));
                }
                # senha inválida
                else
                {
                    $response = -2;
                }
            }
            # e-mail inválido
            else 
            {
                $response = -1;
            }
            return $response;
        }
        else
        {
            # exception ?
        }
    }

}