<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Traits\Pays;

/**
 * @ORM\Entity
 */

class Airport{
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    private int $id;

    /**
     * @ORM\Column(length="100")
     */

    private string $nom;
    
    use Pays;

    public function __construct(string $n, string $p)
    {
        $this->nom = $n;
        $this->pays = $p;
    }


    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
}