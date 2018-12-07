<?php

namespace Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @table(name="rounds")
 */
class Round {

    /**
    * @Id
    * @Column(type="integer", name="id")
    * @GeneratedValue
    */
    private $id;

    /**
     * @ManyToOne(targetEntity="Championship", inversedBy="rounds", cascade={ "persist" })
     * @JoinColumn(name="championship_id", referencedColumnName="id")
     */
    private $championship;

    /**
     * @OneToMany(targetEntity="Match", mappedBy="round", cascade={ "persist" })
     * @JoinTable(name="matches",
     *      joinColumns={@JoinColumn(name="match_id", referencedColumnName="id")}
     * )
     */
    private $matches;

    /**
     * 
     */
    public function __construct()
    {
        $this->matches = new ArrayCollection();
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
     * Get the value of championship
     * 
     * @return Championship
     */ 
    public function get_championship()
    {
        return $this->championship;
    }

    /**
     * Set the value of championship
     *
     * @return  self
     */ 
    public function set_championship(Entity\Championship $championship)
    {
        $this->championship = $championship;

        return $this;
    }

    /**
     * Get value of matches
     * 
     * @return  ArrayCollection
     */ 
    public function get_matches()
    {
        return $this->matches;
    }

    /**
     * Set value of matches
     *
     * @return  self
     */ 
    public function set_matches(ArrayCollection $matches)
    {
        $this->matches = $matches;

        return $this;
    }

}
