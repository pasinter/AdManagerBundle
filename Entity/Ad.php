<?php

namespace Pasinter\AdManagerBundle\Entity;


class Ad
{

  
    /**
     * @var string $title
     */
    private $title;

    /**
     * @var string $link
     */
    private $link;

    /**
     * @var boolean $newWindow
     */
    private $newWindow = false;

    /**
     * @var datetime $createdAt
     */
    private $createdAt;

    /**
     * @var datetime $updatedAt
     */
    private $updatedAt;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Pasinter\AdManagerBundle\Entity\Campaign
     */
    private $campaign;

    /**
     * @var Application\Sonata\MediaBundle\Entity\Media
     */
    private $image;
    
    /**
     * @var integer $position
     */
    private $position = 0;


    /**
    * To string
    * 
    * @return string id
    */ 
    public function __toString()
    {
        return $this->getTitle();
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Ad
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return Ad
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
     * Set newWindow
     *
     * @param boolean $newWindow
     * @return Ad
     */
    public function setNewWindow($newWindow)
    {
        $this->newWindow = $newWindow;
        return $this;
    }

    /**
     * Get newWindow
     *
     * @return boolean 
     */
    public function getNewWindow()
    {
        return $this->newWindow;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     * @return Ad
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param datetime $updatedAt
     * @return Ad
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set campaign
     *
     * @param Pasinter\AdManagerBundle\Entity\Campaign $campaign
     * @return Ad
     */
    public function setCampaign(\Pasinter\AdManagerBundle\Entity\Campaign $campaign = null)
    {
        $this->campaign = $campaign;
        return $this;
    }

    /**
     * Get campaign
     *
     * @return Pasinter\AdManagerBundle\Entity\Campaign
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Set image
     *
     * @param Application\Sonata\MediaBundle\Entity\Media $image
     * @return Ad
     */
    public function setImage(\Application\Sonata\MediaBundle\Entity\Media $image = null)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Get image
     *
     * @return Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getImage()
    {
        return $this->image;
    }


    /**
     * Set position
     *
     * @param integer $position
     * @return Ad
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }
}