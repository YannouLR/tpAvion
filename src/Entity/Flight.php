<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Flight{

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
     * Get the value of numFlight
     *
     * @return int
     */
    public function getNumFlight(): int
    {
        return $this->numFlight;
    }

    /**
     * Set the value of numFlight
     *
     * @param int $numFlight
     *
     * @return self
     */
    public function setNumFlight(int $numFlight): self
    {
        $this->numFlight = $numFlight;

        return $this;
    }

     /**
      * Get the value of departure
      *
      * @return Airport
      */
     public function getDeparture(): Airport
     {
          return $this->departure;
     }

     /**
      * Set the value of departure
      *
      * @param Airport $departure
      *
      * @return self
      */
     public function setDeparture(Airport $departure): self
     {
          $this->departure = $departure;

          return $this;
     }

    /**
     * Get the value of final
     *
     * @return Airport
     */
    public function getFinal(): Airport
    {
        return $this->final;
    }

    /**
     * Set the value of final
     *
     * @param Airport $final
     *
     * @return self
     */
    public function setFinal(Airport $final): self
    {
        $this->final = $final;

        return $this;
    }
}