<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Ticket{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    private int $id;
    
    /**
     * @ORM\Column(type="integer")
     */

    private int $numTicket;

    /**
     * @ORM\ManyToOne(targetEntity="Passenger")
     * @ORM\JoinColumn(name="id_passenger", referencedColumnName="id")
     */

    private Passenger $passenger;

    public function __construct(int $NT, Passenger $p)        
    {
        $this->numTicket = $NT;
        $this->passenger = $p;
    }

    /**
     * Get the value of numTicket
     */ 
    public function getNumTicket()
    {
        return $this->numTicket;
    }

    /**
     * Set the value of numTicket
     *
     * @return  self
     */ 
    public function setNumTicket($numTicket)
    {
        $this->numTicket = $numTicket;

        return $this;
    }

    /**
     * Get the value of passenger
     */ 
    public function getPassenger()
    {
        return $this->passenger;
    }

    /**
     * Set the value of passenger
     *
     * @return  self
     */ 
    public function setPassenger($passenger)
    {
        $this->passenger = $passenger;

        return $this;
    }
}