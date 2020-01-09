<?php

namespace App\Entity;

use App\Entity\Customer;
use App\Entity\Vehicule;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\BookingRepository")
 */
class Booking
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Serializer\Groups({"booking"})
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Customer", cascade={"detach", "merge"}, inversedBy="bookings")
     * @ORM\JoinColumn(name="customer", referencedColumnName="id", nullable=false)
     * @Serializer\Type("App\Entity\Customer")
     * @Serializer\Groups({"booking"})
     */
    private $customer;

    /**
     * @ORM\Column(type="string", length=255)
     * @Serializer\Groups({"booking"})
     */
    private $status;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_booked;

    /**
     * @ORM\Column(type="date")
     * @Assert\GreaterThan("today")
     * @Serializer\Groups({"booking"})
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    private $date_start;

    /**
     * @ORM\Column(type="date")
     * @Assert\GreaterThan(propertyPath="date_start")
     * @Serializer\Groups({"booking"})
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    private $date_end;

    /**
     * @ORM\ManyToMany(targetEntity="Vehicule", inversedBy="bookings")
     * @ORM\JoinTable(name="booking_vehicule")
     * @Serializer\Groups({"booking"})
     */
    private $vehicules;

    /**
     * @ORM\Column(type="float")
     * @Serializer\Groups({"booking"})
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

    /**
     * @return Collection|Vehicules[]
     */
    public function getVehicules(): Collection
    {
        return $this->vehicules;
    }

    public function addVehicule(Vehicule $vehicule)
    {
        if ($this->vehicules->contains($vehicule)) {
            return;
        }
        $this->vehicules->add($vehicule);
        $this->calculate();
        //$vehicule->addUser($this);
    }

    public function removeVehicule(Vehicule $Vehicule)
    {
        if (!$this->vehicules->contains($vehicule)) {
            return;
        }
        $this->vehicules->removeElement($vehicule);
        $this->calculate();
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

    public function getVehiculePrice(Vehicule $vehicule): float
    {
        if (!$this->vehicules->contains($vehicule)) {
            return 0;
        }
        try {
            $interval = date_diff($this->date_start, $this->date_end);
            return $vehicule->getPrice() * $interval->format('%a');
        } catch(\Exception $e) {
            return $vehicule->getPrice();
        }
    }

    public function calculate(): self
    {
        $price = 0;
        foreach($this->vehicules->getValues() as $vehicule) {
            $price += $this->getVehiculePrice($vehicule);
        }
        return $this->setPrice($price);
    }

    public function isReady(): bool
    {
        return $this->date_start && $this->date_end && !$this->vehicules->isEmpty();
    }
}
