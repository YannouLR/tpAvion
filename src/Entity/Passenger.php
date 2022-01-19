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

    public function __construct(string $f, string $l, string $e, string $p,int $NP)
    {
        parent::__construct($f, $l, $e, $p);
        $this->numPasseport = $NP;
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

    /**
     * Get the value of numPasseport
     *
     * @return int
     */
    public function getNumPasseport(): int
    {
        return $this->numPasseport;
    }

    /**
     * Set the value of numPasseport
     *
     * @param int $numPasseport
     *
     * @return self
     */
    public function setNumPasseport(int $numPasseport): self
    {
        $this->numPasseport = $numPasseport;

        return $this;
    }
}