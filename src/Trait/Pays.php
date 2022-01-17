<?php

namespace App\Traits;

use Doctrine\ORM\Mapping as ORM;


trait Pays{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    private int $id;

    /**
     * @ORM\Column(length=100)
     */

    private string $pays;

    public function Pays(string $pays){
        $this->pays = $pays;
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
     * Get the value of pays
     *
     * @return string
     */
    public function getPays(): string
    {
        return $this->pays;
    }

    /**
     * Set the value of pays
     *
     * @param string $pays
     *
     * @return self
     */
    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }
}