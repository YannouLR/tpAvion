<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Traits\Pays;

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

    use pays;

    public function __construct(string $f, string $l, string $e, string $p)
    {
        $this->firstname = $f;
        $this->lastname = $l;
        $this->email = $e;
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
     * Get the value of firstname
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @param string $firstname
     *
     * @return self
     */
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @param string $lastname
     *
     * @return self
     */
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}