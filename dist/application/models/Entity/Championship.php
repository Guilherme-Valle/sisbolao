<?php

namespace Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @table(name="championships")
 */
class Championship {

    /**
    * @Id
    * @Column(type="integer", name="id")
    * @GeneratedValue
    */
    private $id;

    /**
     * @OneToMany(targetEntity="Round", mappedBy="championship", cascade={ "persist" })
     * @JoinTable(name="hunch",
     *      joinColumns={@JoinColumn(name="championship_id", referencedColumnName="id")}
     * )
     */
    private $rounds;

    /**
     * 
     */
    public function __construct()
    {
        $this->rounds = new ArrayCollection();
    }

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
     * Get the value of rounds
     * 
     * @return  ArrayCollection
     */ 
    public function get_rounds()
    {
        return $this->rounds;
    }

    /**
     * Set the value of rounds
     *
     * @return  self
     */ 
    public function set_rounds(ArrayCollection $rounds)
    {
        $this->rounds = $rounds;

        return $this;
    }

}
