<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

final class Passenger extends User{

    /**
     * @ORM\Column(type="integer")
     */

    private int $numPasseport;

    public function __construct(string $f, string $l, string $e,int $NP)
    {
        parent::__construct($f, $l, $e);
        $this->numPasseport = $NP;
    }


    /**
     * Get the value of numPasseport
     */ 
    public function getNumPasseport(): int
    {
        return $this->numPasseport;
    }

    /**
     * Set the value of numPasseport
     *
     * @return  self
     */ 
    public function setNumPasseport(int $numPasseport)
    {
        $this->numPasseport = $numPasseport;

        return $this;
    }
    public function cancelTicket()
    {
        
    }
    public function reserveTicket()
    {
        
    }
    public function registration()
    {
        
    }
}