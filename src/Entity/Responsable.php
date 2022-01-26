<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

final class Responsable extends User{

    /**
     * @ORM\Column(length="100")
     */

    private int $numBadge;

    private array $listPassenger = [];

    public function __construct(string $f, string $p, string $l, string $e,int $NB)
    {
        parent::__construct($f, $l, $e, $p);
        $this->numBadge = $NB;
    }




    /**
     * Get the value of numBadge
     *
     * @return int
     */
    public function getNumBadge(): int
    {
        return $this->numBadge;
    }

    /**
     * Set the value of numBadge
     *
     * @param int $numBadge
     *
     * @return self
     */
    public function setNumBadge(int $numBadge): self
    {
        $this->numBadge = $numBadge;

        return $this;
    }
}