<?php

namespace App\Entity;

use App\Entity\User;
use App\Entity\Booking;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;


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
     * @Serializer\Groups({"booking"})
     */
    protected $id;

    /**
     * @ORM\Column(type="date")
     */
    protected $date_register;

    /**
     * @ORM\Column(type="integer")
     */
    protected $credit_card;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Booking", mappedBy="customer", fetch="EAGER")
     */
    protected $bookings;


    public function __construct()
    {
        $this->cars = new ArrayCollection();
        $this->bookings = new ArrayCollection();
        $this->date_register = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateRegister(): ?\DateTimeInterface
    {
        return $this->date_register;
    }

    public function setDateRegister(\DateTimeInterface $date_register): self
    {
        $this->date_register = $date_register;
        return $this;
    }

    public function getCreditCard(): ?int
    {
        return $this->credit_card;
    }

    public function setCreditCard(int $credit_card): self
    {
        $this->credit_card = $credit_card;
        return $this;
    }

    /**
     * @return Collection|Bookings[]
     */
    public function getBookings(): Collection
    {
        return $this->bookings;
    }

    public function addBooking(Booking $booking): self
    {
        if (!$this->bookings->contains($booking)) {
            $this->bookings[] = $booking;
            $booking->setIdClient($this);
        }
        return $this;
    }

    public function removeBooking(Booking $booking): self
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
