<?php

namespace Entity;

/**
 * @Entity
 * @table(name="hunches")
 */
class Hunch {

    /**
    * @Id
    * @Column(type="integer", name="id")
    * @GeneratedValue
    */
    private $id;

    /**
     * @ManyToOne(targetEntity="Bet", inversedBy="hunches", cascade={ "persist" })
     * @JoinColumn(name="bet_id", referencedColumnName="id")
     */
    private $bet;

    /**
     * @OneToOne(targetEntity="Scoreboard")
     * @JoinColumn(name="scoreboard_id", referencedColumnName="id")
     */
    private $hunch_scoreboard;

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
     * Get the value of bet
     * 
     * @return  Bet
     */ 
    public function get_bet()
    {
        return $this->bet;
    }

    /**
     * Set the value of bet
     *
     * @return  self
     */ 
    public function set_bet(Entity\Bet $bet)
    {
        $this->bet = $bet;

        return $this;
    }

    /**
     * Get the value of hunch_scoreboard
     * 
     * @return  Scoreboard
     */ 
    public function get_hunch_scoreboard()
    {
        return $this->hunch_scoreboard;
    }

    /**
     * Set the value of hunch_scoreboard
     *
     * @return  self
     */ 
    public function set_hunch_scoreboard(Entity\Scoreboard $hunch_scoreboard)
    {
        $this->hunch_scoreboard = $hunch_scoreboard;

        return $this;
    }

}
