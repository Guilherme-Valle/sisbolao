<?php

namespace Entity;

/**
 * @Entity
 * @table(name="matches")
 */
class Match {

    /**
    * @Id
    * @Column(type="integer", name="id")
    * @GeneratedValue
    */
    private $id;

    /**
     * @ManyToOne(targetEntity="Round", inversedBy="matches", cascade={ "persist" })
     * @JoinColumn(name="round_id", referencedColumnName="id")
     */
    private $round;

    /**
     * @OneToOne(targetEntity="Scoreboard")
     * @JoinColumn(name="scoreboard_id", referencedColumnName="id")
     */
    private $scoreboard;

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
    public function set_round(Entity\Round $round)
    {
        $this->round = $round;

        return $this;
    }

    /**
     * Get the value of scoreboard
     * 
     * @return  Scoreboard
     */ 
    public function get_scoreboard()
    {
        return $this->scoreboard;
    }

    /**
     * Set the value of scoreboard
     *
     * @return  self
     */ 
    public function set_scoreboard(Entity\Scoreboard $scoreboard)
    {
        $this->scoreboard = $scoreboard;

        return $this;
    }

}
