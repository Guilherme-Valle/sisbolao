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
    }

    protected function build_result(Doctrine\ORM\Query $query, $result_mode = self::MULTIPLE_RESULTS, $array = FALSE)
    {
        $this->hydration_mode = ($array ? Doctrine\ORM\Query::HYDRATE_ARRAY : NULL);
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

    /**
     * 
     * @param   Doctrine\ORM\Query  $query
     * @return  mixed
     */
    final protected function result(Doctrine\ORM\Query $query, $result_mode = self::MULTIPLE_RESULTS)
    {
        return $this->build_result($query, $result_mode);
    }

    /**
     * 
     * @param   Doctrine\ORM\Query  $query
     * @return  mixed
     */
    final protected function result_array(Doctrine\ORM\Query $query, $result_mode = self::MULTIPLE_RESULTS)
    {
        return $this->build_result($query, $result_mode, TRUE);
    }

}
