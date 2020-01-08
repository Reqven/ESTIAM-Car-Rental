<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Place
 *
 * @ORM\Table(name="place")
 * @ORM\Entity(repositoryClass="App\Repository\PlaceRepository")
 */
class Place
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(max=255)
     * @Assert\NotBlank()
     */
    private $address;

    /**
     * @ORM\Column(type="string", length=5)
     * @Assert\Length(min=5, max=5)
     * @Assert\NotBlank()
     */
    private $zipcode;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\Length(max=100)
     * @Assert\NotBlank()
     */
    private $city;


    public function __clone()
    {
        $this->id = null;
    }


    /**
     * Get id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set address
     * @param string $address
     * @return Place
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Get address
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zipcode
     * @param string $zipcode
     * @return Place
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }
    /**
     * Get zipcode
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set city
     * @param string $city
     * @return Place
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
    /**
     * Get city
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Get agency
     * @return Agency
     */
    public function getAgency()
    {
        return $this->agency;
    }
    /**
     * Set agency
     * @param Agency $agency
     * @return Place
     */
    public function setAgency(Agency $agency)
    {
        $this->agency = $agency;
        return $this;
    }

    /**
     * toText
     * @return string
     */
    public function toText()
    {
        return $this->address.' '.$this->zipcode;
    }
}

