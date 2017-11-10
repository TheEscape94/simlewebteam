<?php

namespace AppBundle\Entity;

/**
 * Themes
 */
class Themes
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $previewlink;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var string
     */
    private $previewImg;


    function __construct()
    {
        $this->createdAt = new \DateTime();
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
     * Set previewlink
     *
     * @param string $previewlink
     *
     * @return Themes
     */
    public function setPreviewlink($previewlink)
    {
        $this->previewlink = $previewlink;

        return $this;
    }

    /**
     * Get previewlink
     *
     * @return string
     */
    public function getPreviewlink()
    {
        return $this->previewlink;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Themes
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
     * Set description
     *
     * @param string $description
     *
     * @return Themes
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Themes
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

    /**
     * Set previewImg
     *
     * @param string $previewImg
     *
     * @return Themes
     */
    public function setPreviewImg($previewImg)
    {
        $this->previewImg = $previewImg;

        return $this;
    }

    /**
     * Get previewImg
     *
     * @return string
     */
    public function getPreviewImg()
    {
        return $this->previewImg;
    }
}

