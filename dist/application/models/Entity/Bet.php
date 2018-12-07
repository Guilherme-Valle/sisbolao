<?php

namespace Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @table(name="bets")
 */
class Bet {

    /**
    * @Id
    * @Column(type="integer", name="id")
    * @GeneratedValue
    */
    private $id;

    /**
     * @ManyToOne(targetEntity="Betting_set", inversedBy="bets", cascade={ "persist" })
     * @JoinColumn(name="set_id", referencedColumnName="id")
     */
    private $bettingset;

    /**
     * @ManyToOne(targetEntity="Bettor", inversedBy="bets", cascade={ "persist" })
     * @JoinColumn(name="bettor_id", referencedColumnName="id")
     */
    private $bettor;

    /**
     * @OneToMany(targetEntity="Hunch", mappedBy="bet", cascade={ "persist" })
     * @JoinTable(name="hunch",
     *      joinColumns={@JoinColumn(name="bet_id", referencedColumnName="id")}
     * )
     */
    private $hunches;

    /**
     * 
     */
    public function __construct()
    {
        $this->hunches = new ArrayCollection();
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
     * Get the value of bettingset
     * 
     * @return  Betting_set
     */ 
    public function get_bettingset()
    {
        return $this->set;
    }

    /**
     * Set the value of bettingset
     *
     * @return  self
     */ 
    public function set_bettingset(Entity\Betting_set $set)
    {
        $this->set = $set;

        return $this;
    }

    /**
     * Get the value of bettor
     * 
     * @return  Bettor
     */ 
    public function get_bettor()
    {
        return $this->bettor;
    }

    /**
     * Set the value of bettor
     *
     * @return  self
     */ 
    public function set_bettor(Bettor $bettor)
    {
        $this->bettor = $bettor;

        return $this;
    }

    /**
     * Get the value of hunches
     * 
     * @return  ArrayCollection
     */ 
    public function get_hunches()
    {
        return $this->hunches;
    }

    /**
     * Set the value of hunches
     *
     * @return  self
     */ 
    public function set_hunches(ArrayCollection $hunches)
    {
        $this->hunches = $hunches;

        return $this;
    }

}
