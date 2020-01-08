<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AgencyRepository")
 */
class Agency
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_agence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $num_voie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_rue;

    /**
     * @ORM\Column(type="integer")
     */
    private $code_postal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Employee", mappedBy="id_agence")
     */
    private $id_employe;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Vehicule", mappedBy="id_agence")
     */
    private $cars;

    public function __construct()
    {
        $this->id_employe = new ArrayCollection();
        $this->cars = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAgency(): ?string
    {
        return $this->nom_agence;
    }

    public function setNomAgency(string $nom_agence): self
    {
        $this->nom_agence = $nom_agence;

        return $this;
    }

    public function getNumVoie(): ?string
    {
        return $this->num_voie;
    }

    public function setNumVoie(string $num_voie): self
    {
        $this->num_voie = $num_voie;

        return $this;
    }

    public function getNomRue(): ?string
    {
        return $this->nom_rue;
    }

    public function setNomRue(string $nom_rue): self
    {
        $this->nom_rue = $nom_rue;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->code_postal;
    }

    public function setCodePostal(int $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * @return Collection|Employees[]
     */
    public function getIdEmploye(): Collection
    {
        return $this->id_employe;
    }

    public function addIdEmploye(Employees $idEmploye): self
    {
        if (!$this->id_employe->contains($idEmploye)) {
            $this->id_employe[] = $idEmploye;
            $idEmploye->setIdAgency($this);
        }

        return $this;
    }

    public function removeIdEmploye(Employees $idEmploye): self
    {
        if ($this->id_employe->contains($idEmploye)) {
            $this->id_employe->removeElement($idEmploye);
            // set the owning side to null (unless already changed)
            if ($idEmploye->getIdAgency() === $this) {
                $idEmploye->setIdAgency(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Cars[]
     */
    public function getCars(): Collection
    {
        return $this->cars;
    }

    public function addCar(Cars $car): self
    {
        if (!$this->cars->contains($car)) {
            $this->cars[] = $car;
            $car->setIdAgency($this);
        }

        return $this;
    }

    public function removeCar(Cars $car): self
    {
        if ($this->cars->contains($car)) {
            $this->cars->removeElement($car);
            // set the owning side to null (unless already changed)
            if ($car->getIdAgency() === $this) {
                $car->setIdAgency(null);
            }
        }

        return $this;
    }
}
