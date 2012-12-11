<?php

namespace Pasinter\AdManagerBundle\Entity;


class Interaction
{

  
    /**
     * @var string $code
     */
    private $code;

    /**
     * @var string $group
     */
    private $group;

    /**
     * @var string $pageId
     */
    private $pageId;

    /**
     * @var string $pageType
     */
    private $pageType;

    /**
     * @var integer $userId
     */
    private $userId;

    /**
     * @var string $userIp
     */
    private $userIp;

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
     * Set code
     *
     * @param string $code
     * @return Interaction
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
     * Set group
     *
     * @param string $group
     * @return Interaction
     */
    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Get group
     *
     * @return string 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set pageId
     *
     * @param string $pageId
     * @return Interaction
     */
    public function setPageId($pageId)
    {
        $this->pageId = $pageId;
        return $this;
    }

    /**
     * Get pageId
     *
     * @return string 
     */
    public function getPageId()
    {
        return $this->pageId;
    }

    /**
     * Set pageType
     *
     * @param string $pageType
     * @return Interaction
     */
    public function setPageType($pageType)
    {
        $this->pageType = $pageType;
        return $this;
    }

    /**
     * Get pageType
     *
     * @return string 
     */
    public function getPageType()
    {
        return $this->pageType;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Interaction
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userIp
     *
     * @param string $userIp
     * @return Interaction
     */
    public function setUserIp($userIp)
    {
        $this->userIp = $userIp;
        return $this;
    }

    /**
     * Get userIp
     *
     * @return string 
     */
    public function getUserIp()
    {
        return $this->userIp;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     * @return Interaction
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
     * @return Interaction
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
}