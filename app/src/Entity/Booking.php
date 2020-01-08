<?php

namespace App\Entity;

use App\Entity\Customer;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookingRepository")
 */
class Booking
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Customer", cascade={"detach", "merge"}, inversedBy="bookings")
     * @ORM\JoinColumn(name="customer", referencedColumnName="id", nullable=false)
     */
    private $customer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_booked;

    /**
     * @ORM\Column(type="date")
     */
    private $date_start;

    /**
     * @ORM\Column(type="date")
     */
    private $date_end;

    /* @ORM\ManyToMany(targetEntity="Vehicule")
     * @ORM\JoinTable(name="booking_vehicule",
     *    joinColumns={@ORM\JoinColumn(name="booking_id", referencedColumnName="id")},
     *    inverseJoinColumns={@ORM\JoinColumn(name="vehicule_id", referencedColumnName="id")}
     * )
     */
    private $vehicules;

    /**
     * @ORM\Column(type="float")
     */
    private $price;


    public function __construct()
    {
        $this->vehicules = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getDateBooked(): ?\DateTimeInterface
    {
        return $this->date_booked;
    }

    public function setDateBooked(\DateTimeInterface $date_booked): self
    {
        $this->date_booked = $date_booked;
        return $this;
    }

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->date_start;
    }

    public function setDateStart(\DateTimeInterface $date_start): self
    {
        $this->date_start = $date_start;
        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->date_end;
    }

    public function setDateEnd(\DateTimeInterface $date_end): self
    {
        $this->date_end = $date_end;
        return $this;
    }


    public function addVehicule(Vehicule $vehicule)
    {
        if ($this->vehicules->contains($vehicule)) {
            return;
        }
        $this->vehicules->add($vehicule);
        //$vehicule->addUser($this);
    }

    public function removeVehicule(Vehicule $Vehicule)
    {
        if (!$this->vehicules->contains($vehicule)) {
            return;
        }
        $this->vehicules->removeElement($vehicule);
        //$vehicule->removeUser($this);
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }
}
