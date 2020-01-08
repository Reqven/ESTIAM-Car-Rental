<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VehiculeRepository")
 */
class Vehicule
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Agency", inversedBy="cars")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_agence;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer", inversedBy="cars")
     */
    private $id_client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $plaque_matricule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $modele;

    /**
     * @ORM\Column(type="date")
     */
    private $annee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $boite_vitesse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cylindre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $carburant;

    /**
     * @ORM\Column(type="boolean")
     */
    private $jeune_conducteur;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="boolean")
     */
    private $disponible;

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

    public function getIdClient(): ?Customers
    {
        return $this->id_client;
    }

    public function setIdClient(?Customers $id_client): self
    {
        $this->id_client = $id_client;

        return $this;
    }

    public function getPlaqueMatricule(): ?string
    {
        return $this->plaque_matricule;
    }

    public function setPlaqueMatricule(string $plaque_matricule): self
    {
        $this->plaque_matricule = $plaque_matricule;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getAnnee(): ?\DateTimeInterface
    {
        return $this->annee;
    }

    public function setAnnee(\DateTimeInterface $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getBoiteVitesse(): ?string
    {
        return $this->boite_vitesse;
    }

    public function setBoiteVitesse(string $boite_vitesse): self
    {
        $this->boite_vitesse = $boite_vitesse;

        return $this;
    }

    public function getCylindre(): ?string
    {
        return $this->cylindre;
    }

    public function setCylindre(string $cylindre): self
    {
        $this->cylindre = $cylindre;

        return $this;
    }

    public function getCarburant(): ?string
    {
        return $this->carburant;
    }

    public function setCarburant(string $carburant): self
    {
        $this->carburant = $carburant;

        return $this;
    }

    public function getJeuneConducteur(): ?bool
    {
        return $this->jeune_conducteur;
    }

    public function setJeuneConducteur(bool $jeune_conducteur): self
    {
        $this->jeune_conducteur = $jeune_conducteur;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDisponible(): ?bool
    {
        return $this->disponible;
    }

    public function setDisponible(bool $disponible): self
    {
        $this->disponible = $disponible;

        return $this;
    }
}
