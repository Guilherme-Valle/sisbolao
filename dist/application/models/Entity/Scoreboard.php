<?php

namespace Entity;

/**
 * @Entity
 * @table(name="scoreboards")
 */
class Scoreboard {

    /**
    * @Id
    * @Column(type="integer", name="id")
    * @GeneratedValue
    */
    private $id;

    /**
     * @Column(name="visitor")
     */
    private $visitor;

    /**
     * @Column(name="principal")
     */
    private $principal;

    /**
     * @OneToOne(targetEntity="Match")
     * @JoinColumn(name="match_id", referencedColumnName="id")
     */
    private $match;

    /**
     * Get the value of id
     * 
     * @return  int
     */ 
    public function get_id()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function set_id($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of visitor
     * 
     * @return  int
     */ 
    public function get_visitor()
    {
        return $this->visitor;
    }

    /**
     * Set the value of visitor
     *
     * @return  self
     */ 
    public function set_visitor($visitor)
    {
        $this->visitor = $visitor;

        return $this;
    }

    /**
     * Get the value of principal
     * 
     * @return  int
     */ 
    public function get_principal()
    {
        return $this->principal;
    }

    /**
     * Set the value of principal
     *
     * @return  self
     */ 
    public function set_principal($principal)
    {
        $this->principal = $principal;

        return $this;
    }

    /**
     * Get the value of match
     * 
     * @return  Match
     */ 
    public function get_match()
    {
        return $this->match;
    }

    /**
     * Set the value of match
     *
     * @return  self
     */ 
    public function set_match(Entity\Match $match)
    {
        $this->match = $match;

        return $this;
    }

}
