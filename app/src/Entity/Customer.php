<?php

namespace App\Entity;

use App\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CustomerRepository")
 */
class Customer extends User
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
     * @ORM\Column(type="date")
     */
    protected $date_inscription;

    /**
     * @ORM\Column(type="integer")
     */
    protected $carte_credit;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Vehicule", mappedBy="id_client")
     */
    protected $cars;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Booking", mappedBy="id_client")
     */
    protected $bookings;

    public function __construct()
    {
        $this->cars = new ArrayCollection();
        $this->bookings = new ArrayCollection();
        $this->date_inscription = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->date_inscription;
    }

    public function setDateInscription(\DateTimeInterface $date_inscription): self
    {
        $this->date_inscription = $date_inscription;
        return $this;
    }

    public function getCarteCredit(): ?int
    {
        return $this->carte_credit;
    }

    public function setCarteCredit(int $carte_credit): self
    {
        $this->carte_credit = $carte_credit;

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
            $car->setIdClient($this);
        }

        return $this;
    }

    public function removeCar(Cars $car): self
    {
        if ($this->cars->contains($car)) {
            $this->cars->removeElement($car);
            // set the owning side to null (unless already changed)
            if ($car->getIdClient() === $this) {
                $car->setIdClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Bookings[]
     */
    public function getBookings(): Collection
    {
        return $this->bookings;
    }

    public function addBooking(Bookings $booking): self
    {
        if (!$this->bookings->contains($booking)) {
            $this->bookings[] = $booking;
            $booking->setIdClient($this);
        }

        return $this;
    }

    public function removeBooking(Bookings $booking): self
    {
        if ($this->bookings->contains($booking)) {
            $this->bookings->removeElement($booking);
            // set the owning side to null (unless already changed)
            if ($booking->getIdClient() === $this) {
                $booking->setIdClient(null);
            }
        }

        return $this;
    }
}
