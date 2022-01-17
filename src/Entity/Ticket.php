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
     *
     * @return int
     */
    public function getNumTicket(): int
    {
        return $this->numTicket;
    }

    /**
     * Set the value of numTicket
     *
     * @param int $numTicket
     *
     * @return self
     */
    public function setNumTicket(int $numTicket): self
    {
        $this->numTicket = $numTicket;

        return $this;
    }

    /**
     * Get the value of passenger
     *
     * @return Passenger
     */
    public function getPassenger(): Passenger
    {
        return $this->passenger;
    }

    /**
     * Set the value of passenger
     *
     * @param Passenger $passenger
     *
     * @return self
     */
    public function setPassenger(Passenger $passenger): self
    {
        $this->passenger = $passenger;

        return $this;
    }

    /**
     * Get the value of user
     *
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @param User $user
     *
     * @return self
     */
    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of flight
     *
     * @return flight
     */
    public function getFlight(): flight
    {
        return $this->flight;
    }

    /**
     * Set the value of flight
     *
     * @param flight $flight
     *
     * @return self
     */
    public function setFlight(flight $flight): self
    {
        $this->flight = $flight;

        return $this;
    }
}