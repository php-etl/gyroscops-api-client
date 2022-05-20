<?php

namespace Gyroscops\Api\Model;

class OnPremiseRequestOnPremiseRequestRead
{
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $firstName;
    /**
     * 
     *
     * @var string
     */
    protected $lastName;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt() : \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}