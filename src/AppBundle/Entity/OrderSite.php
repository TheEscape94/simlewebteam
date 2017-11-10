<?php

namespace AppBundle\Entity;

/**
 * OrderSite
 */
class OrderSite
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $theme;

    /**
     * @var string
     */
    private $domen;

    /**
     * @var int
     */
    private $host;

    /**
     * @var int
     */
    private $socialn;

    /**
     * @var int
     */
    private $material;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var bool
     */
    private $isRead;

    /**
     * @var \DateTime
     */
    private $createdAt;


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
     * Set theme
     *
     * @param string $theme
     *
     * @return OrderSite
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set domen
     *
     * @param string $domen
     *
     * @return OrderSite
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
     * Set host
     *
     * @param int $host
     *
     * @return OrderSite
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return int
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set socialn
     *
     * @param integer $socialn
     *
     * @return OrderSite
     */
    public function setSocialn($socialn)
    {
        $this->socialn = $socialn;

        return $this;
    }

    /**
     * Get socialn
     *
     * @return int
     */
    public function getSocialn()
    {
        return $this->socialn;
    }

    /**
     * Set material
     *
     * @param integer $material
     *
     * @return OrderSite
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get material
     *
     * @return int
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return OrderSite
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return OrderSite
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
     * Set email
     *
     * @param string $email
     *
     * @return OrderSite
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
     * @param string $phone
     *
     * @return OrderSite
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return bool
     */
    public function isRead()
    {
        return $this->isRead;
    }

    /**
     * @param bool $isRead
     */
    public function setIsRead($isRead)
    {
        $this->isRead = $isRead;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**s
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}

