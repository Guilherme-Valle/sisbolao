<?php

namespace Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @table(name="bettingset")
 */
class Betting_set {

    /**
    * @Id
    * @Column(type="integer", name="id")
    * @GeneratedValue
    */
    private $id;

    /**
     * @OneToOne(targetEntity="Bettor")
     * @JoinColumn(name="creator_id", referencedColumnName="id")
     */
    private $creator;

    /**
     * @OneToMany(targetEntity="Bet", mappedBy="bettingset", cascade={ "persist" })
     * @JoinTable(name="bets",
     *      joinColumns={@JoinColumn(name="set_id", referencedColumnName="id")}
     * )
     */
    private $bets;

    /**
     * @OneToOne(targetEntity="Round")
     * @JoinColumn(name="round_id", referencedColumnName="id")
     */
    private $round;

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
     * Get the value of creator
     * 
     * @return  Bettor
     */ 
    public function get_creator()
    {
        return $this->creator;
    }

    /**
     * Set the value of creator
     *
     * @return  self
     */ 
    public function set_creator(Entity\Bettor $creator)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get the value of bets
     * 
     * @return  ArrayCollection
     */ 
    public function get_bets()
    {
        return $this->bets;
    }

    /**
     * Set the value of bets
     *
     * @return  self
     */ 
    public function set_bets(ArrayCollection $bets)
    {
        $this->bets = $bets;

        return $this;
    }

    /**
     * Get the value of round
     * 
     * @return  Round
     */ 
    public function get_round()
    {
        return $this->round;
    }

    /**
     * Set the value of round
     *
     * @return  self
     */ 
    public function set_round(Round $round)
    {
        $this->round = $round;

        return $this;
    }

}
