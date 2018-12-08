<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Users extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }

    /**
     * 
     */
    public function index_get()
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
                'message' => 'No registered users'
            ], REST_Controller::HTTP_NO_CONTENT);
        }
    }

    public function users_get()
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

}
