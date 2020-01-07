<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmployeesRepository")
 */
class Employees
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Agences", inversedBy="id_employe")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_agence;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Peoples", inversedBy="employees", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_personne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $poste;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAgence(): ?Agences
    {
        return $this->id_agence;
    }

    public function setIdAgence(?Agences $id_agence): self
    {
        $this->id_agence = $id_agence;

        return $this;
    }

    public function getIdPersonne(): ?Peoples
    {
        return $this->id_personne;
    }

    public function setIdPersonne(Peoples $id_personne): self
    {
        $this->id_personne = $id_personne;

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
