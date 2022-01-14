<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class User{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\COlumn(type="integer")
     */

    private int $id;

    /**
     * @ORM\Column(length="100")
     */

    private string $firstname;

    /**
     * @ORM\Column(length="100")
     */

    private string $lastname;

    /**
     * @ORM\Column(length="100")
     */

    private string $email;

    public function __construct(string $f, string $l, string $e)
    {
        $this->firstname = $f;
        $this->lastname = $l;
        $this->email = $e;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname() : string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }
}