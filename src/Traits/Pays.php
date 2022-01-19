<?php

namespace App\Traits;

use Doctrine\ORM\Mapping as ORM;


trait Pays{

    /**
     * @ORM\Column(length=100)
     */

    private string $pays;

    public function Pays(string $pays){
        $this->pays = $pays;
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