<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class flight{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    private int $id;

    /**
     * @ORM\Column(type="integer")
     */

    private int $numFlight;

    /**
     * @ORM\ManyToOne(targetEntity="Airport")
     * @ORM\JoinColumn(name="departure", referencedColumnName="id")
     */

     private Airport $departure;

 /**
     * @ORM\ManyToOne(targetEntity="Airport")
     * @ORM\JoinColumn(name="final", referencedColumnName="id")
     */

    private Airport $final;

    public function __construct(int $nf, Airport $d, Airport $f)
    {
        $this->numFlight = $nf;
        $this->departure = $d;
        $this->final = $f;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of numFlight
     */ 
    public function getNumFlight()
    {
        return $this->numFlight;
    }

    /**
     * Set the value of numFlight
     *
     * @return  self
     */ 
    public function setNumFlight($numFlight)
    {
        $this->numFlight = $numFlight;

        return $this;
    }

     /**
      * Get the value of departure
      */ 
     public function getDeparture()
     {
          return $this->departure;
     }

     /**
      * Set the value of departure
      *
      * @return  self
      */ 
     public function setDeparture($departure)
     {
          $this->departure = $departure;

          return $this;
     }

    /**
     * Get the value of final
     */ 
    public function getFinal()
    {
        return $this->final;
    }

    /**
     * Set the value of final
     *
     * @return  self
     */ 
    public function setFinal($final)
    {
        $this->final = $final;

        return $this;
    }
}