<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="unique_passenger", fields={"numTicket", "passenger", "user"})})

 */

class Ticket{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    private int $numTicket;

    /**
     * @ORM\ManyToOne(targetEntity="Passenger")
     * @ORM\JoinColumn(name="id_passenger", referencedColumnName="id")
     */

    private Passenger $passenger;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="id_User", referencedColumnName="id")
     */

    private User $user;

    /**
     * @ORM\ManyToOne(targetEntity="Flight")
     * @ORM\JoinColumn(name="id_flight", referencedColumnName="id")
     */

    private flight $flight;

    public function __construct(int $NT, Passenger $p, User $u, flight $f)        
    {
        $this->numTicket = $NT;
        $this->passenger = $p;
        $this->user = $u;
        $this->flight = $f;
    }

    /**
     * Get the value of numTicket
     */ 
    public function getNumTicket(): int
    {
        return $this->numTicket;
    }

    /**
     * Set the value of numTicket
     *
     * @return  self
     */ 
    public function setNumTicket(int $numTicket)
    {
        $this->numTicket = $numTicket;

        return $this;
    }

    /**
     * Get the value of passenger
     */ 
    public function getPassenger(): Passenger
    {
        return $this->passenger;
    }

    /**
     * Set the value of passenger
     *
     * @return  self
     */ 
    public function setPassenger(Passenger $passenger)
    {
        $this->passenger = $passenger;

        return $this;
    }

    /**
     * Get the value of user
     */ 
    public function getUser() :User
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */ 
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of flight
     */ 
    public function getFlight(): Flight
    {
        return $this->flight;
    }

    /**
     * Set the value of flight
     *
     * @return  self
     */ 
    public function setFlight(Flight $flight)
    {
        $this->flight = $flight;

        return $this;
    }
}