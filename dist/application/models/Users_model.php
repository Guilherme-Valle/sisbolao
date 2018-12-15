<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends SISB_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

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

            # Iniciar persistência
            $this->doctrine->get_entity_manager()->persist($user);
            $this->doctrine->get_entity_manager()->flush();
        }
        else
        {
            // exception ?
        }
    }

}