<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields= {"email"}, message= "L'email que vous avez indiqué est déjà utilisé")
 * 
 * @ORM\MappedSuperclass
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({
 *  "User" = "User",
 *  "Customer" = "Customer",
 *  "Employee" = "Employee"})
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $Prenom;

    /**
     * @ORM\Column(type="date")
     */
    protected $Date_Naissance;

    /**
     * @ORM\Column(type="integer")
     */
    protected $num_voie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $nom_rue;

    /**
     * @ORM\Column(type="integer")
     */
    protected $code_postale;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $ville;

    /**
     * @ORM\Column(type="integer")
     */
    protected $portable;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=8, minMessage="votre mot de passe doit faire minimum 8 caractères")
     */
    protected $password;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->Date_Naissance;
    }

    public function setDateNaissance(\DateTimeInterface $Date_Naissance): self
    {
        $this->Date_Naissance = $Date_Naissance;

        return $this;
    }

    public function getNumVoie(): ?int
    {
        return $this->num_voie;
    }

    public function setNumVoie(int $num_voie): self
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

    public function getCodePostale(): ?int
    {
        return $this->code_postale;
    }

    public function setCodePostale(int $code_postale): self
    {
        $this->code_postale = $code_postale;

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

    public function getPortable(): ?int
    {
        return $this->portable;
    }

    public function setPortable(int $portable): self
    {
        $this->portable = $portable;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function eraseCredentials() {}

    public function getUsername()
    {
        return $this->email;
    }

    public function getSalt()
    {
        return null;
    }

    public function getRoles()
    {
        return ['ROLE_USER'];
    }
}
