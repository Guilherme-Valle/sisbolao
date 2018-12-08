<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends SISB_model {

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

}