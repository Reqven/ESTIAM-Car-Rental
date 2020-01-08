<?php

namespace App\Entity;

use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmployeeRepository")
 */
class Employee extends User
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Agency", inversedBy="id_employe")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $id_agence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $poste;

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAgence(): ?Agency
    {
        return $this->id_agence;
    }

    public function setIdAgence(?Agency $id_agence): self
    {
        $this->id_agence = $id_agence;
        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(string $poste): self
    {
        $this->poste = $poste;
        return $this;
    }
}
