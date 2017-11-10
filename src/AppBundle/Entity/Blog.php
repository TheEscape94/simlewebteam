<?php

namespace AppBundle\Entity;

/**
 * Blog
 */
class Blog
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
    private $blogTxt;

    /**
     * @var string
     */
    private $blogImg;

    /**
     * @var string
     */
    private $ytLink;

    /**
     * @var string
     */
    private $link;

    /**
     * @var int
     */
    private $views;

    /**
     * @var int
     */
    private $category;

    /**
     * @var \DateTime
     */
    private $createdAt;


    function __construct()
    {
        $this->views = 0;
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
     * Set name
     *
     * @param string $name
     *
     * @return Blog
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
     * Set blogTxt
     *
     * @param string $blogTxt
     *
     * @return Blog
     */
    public function setBlogTxt($blogTxt)
    {
        $this->blogTxt = $blogTxt;

        return $this;
    }

    /**
     * Get blogTxt
     *
     * @return string
     */
    public function getBlogTxt()
    {
        return $this->blogTxt;
    }

    /**
     * Set blogImg
     *
     * @param string $blogImg
     *
     * @return Blog
     */
    public function setBlogImg($blogImg)
    {
        $this->blogImg = $blogImg;

        return $this;
    }

    /**
     * Get blogImg
     *
     * @return string
     */
    public function getBlogImg()
    {
        return $this->blogImg;
    }

    /**
     * Set ytLink
     *
     * @param string $ytLink
     *
     * @return Blog
     */
    public function setYtLink($ytLink)
    {
        $this->ytLink = $ytLink;

        return $this;
    }

    /**
     * Get ytLink
     *
     * @return string
     */
    public function getYtLink()
    {
        return $this->ytLink;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Blog
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set views
     *
     * @param integer $views
     *
     * @return Blog
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return int
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Blog
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
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param int $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }
}

