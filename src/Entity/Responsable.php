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

    public function __construct(string $f, string $l, string $e,int $NB)
    {
        parent::__construct($f, $l, $e);
        $this->numBadge = $NB;
    }

}