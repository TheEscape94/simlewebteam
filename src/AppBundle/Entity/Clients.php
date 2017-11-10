<?php

namespace AppBundle\Entity;

/**
 * Clients
 */
class Clients
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var int
     */
    private $phone;

    /**
     * @var string
     */
    private $city;

    /**
     * @var int
     */
    private $packet;

    /**
     * @var int
     */
    private $price;

    /**
     * @var string
     */
    private $domen;

    /**
     * @var string
     */
    private $note;

    /**
     * @var \DateTime
     */
    private $payingDate;

    /**
     * @var bool
     */
    private $enabled;

    /**
     * @var \DateTime
     */
    private $createdAt;


    function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->enabled = 1;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Clients
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Clients
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Clients
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return Clients
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return int
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Clients
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set packet
     *
     * @param integer $packet
     *
     * @return Clients
     */
    public function setPacket($packet)
    {
        $this->packet = $packet;

        return $this;
    }

    /**
     * Get packet
     *
     * @return int
     */
    public function getPacket()
    {
        return $this->packet;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Clients
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set domen
     *
     * @param string $domen
     *
     * @return Clients
     */
    public function setDomen($domen)
    {
        $this->domen = $domen;

        return $this;
    }

    /**
     * Get domen
     *
     * @return string
     */
    public function getDomen()
    {
        return $this->domen;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Clients
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set payingDate
     *
     * @param \DateTime $payingDate
     *
     * @return Clients
     */
    public function setPayingDate($payingDate)
    {
        $this->payingDate = $payingDate;

        return $this;
    }

    /**
     * Get payingDate
     *
     * @return \DateTime
     */
    public function getPayingDate()
    {
        return $this->payingDate;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Clients
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Clients
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}

