<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PeoplesRepository")
 * @UniqueEntity(
 * fields= {"email"}
 * message= "L'email que vous avez indiqué est déjà utilisé")
 */
class Peoples implements UserInterface
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
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_Naissance;

    /**
     * @ORM\Column(type="integer")
     */
    private $num_voie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_rue;

    /**
     * @ORM\Column(type="integer")
     */
    private $code_postale;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="integer")
     */
    private $portable;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Customers", mappedBy="id_personne", cascade={"persist", "remove"})
     */
    private $clients;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Employees", mappedBy="id_personne", cascade={"persist", "remove"})
     */
    private $employees;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=8, minMessage="votre mot de passe doit faire minimum 8 caractères)
     */
    private $password;

    /**
     * @Assert\EqualTo(propertyPath="password",message="les mots de passes sont différents")
     */
    public $confirm_password;

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

    public function getClients(): ?Customers
    {
        return $this->clients;
    }

    public function setClients(Customers $clients): self
    {
        $this->clients = $clients;

        // set the owning side of the relation if necessary
        if ($clients->getIdPersonne() !== $this) {
            $clients->setIdPersonne($this);
        }

        return $this;
    }

    public function getEmployees(): ?Employees
    {
        return $this->employees;
    }

    public function setEmployees(Employees $employees): self
    {
        $this->employees = $employees;

        // set the owning side of the relation if necessary
        if ($employees->getIdPersonne() !== $this) {
            $employees->setIdPersonne($this);
        }

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

    public function eraseCredentials(){}

    public function getUsername(){}

    public function getSalt() {}

    public function getRoles(){
        return ['ROLE_USER'];
    }
}
