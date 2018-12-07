<?php

namespace Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 */
class Bettor extends User {

    /**
     * @OneToMany(targetEntity="Bet", mappedBy="bettor", cascade={ "persist" })
     * @JoinTable(name="bet",
     *      joinColumns={@JoinColumn(name="bettor_id", referencedColumnName="id")}
     * )
     */
    private $bets;

}
