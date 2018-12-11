<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SISB_Model extends CI_Model {

    const SINGLE_RESULT = 1;
    const MULTIPLE_RESULTS = 2;

    /**
     * 
     * @since   1.0.0
     */
    protected $hydration_mode;
    
    /**
     * 
     * @since   1.0.0
     */
    protected $result;

    public function __construct()
    {
        $this->hydration_mode = NULL;
        $this->result = array();
        if ($this->config->item('rest_mode') === TRUE)
        {
            $this->hydration_mode = Doctrine\ORM\Query::HYDRATE_ARRAY;
        }
    }

    /**
     * 
     * @param   Doctrine\ORM\Query  $query
     * @return  mixed
     */
    final protected function result(Doctrine\ORM\Query $query, $result_mode = self::MULTIPLE_RESULTS)
    {
        switch ($result_mode)
        {
            case self::MULTIPLE_RESULTS:
                $this->result = $query->getResult($this->hydration_mode);
                break;
            case self::SINGLE_RESULT:
                $this->result = $query->getSingleResult($this->hydration_mode);
                break;
        }
        return $this->result;
    }

}
