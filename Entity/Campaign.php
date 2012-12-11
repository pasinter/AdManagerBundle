<?php

namespace Pasinter\AdManagerBundle\Entity;


class Campaign
{

    /**
     * @var string $code
     */
    private $code;

    /**
     * @var string $description
     */
    private $description;

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
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $ads;

    public function __construct()
    {
        $this->ads = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getCode();
    }
    
    /**
     * Set code
     *
     * @param string $code
     * @return Campaign
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Campaign
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
     * @param datetime $createdAt
     * @return Campaign
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
     * @return Campaign
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
     * Add ads
     *
     * @param Pasinter\AdManagerBundle\Entity\Ad $ad
     * @return Campaign
     */
    public function addAd(\Pasinter\AdManagerBundle\Entity\Ad $ad)
    {
        $this->ads[] = $ad;
        if(null !== $ad) {
            $ad->setCampaign($this);
        }
        
        return $this;
    }
    
    /**
     *
     * @param Pasinter\AdManagerBundle\Entity\Ad $ad
     * @return Campaign
     */
    public function addAds(\Pasinter\AdManagerBundle\Entity\Ad $ad)
    {
        return $this->addAd($ad);
    }

    /**
     * Remove ad
     *
     * @param Pasinter\AdManagerBundle\Entity\Ad $ad
     */
    public function removeAd(\Pasinter\AdManagerBundle\Entity\Ad $ad)
    {
        $this->ads->removeElement($ad);
    }

    /**
     * Get ads
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getAds()
    {
        return $this->ads;
    }
    
    public function getAdsCount()
    {
        return count($this->ads);
    }
}