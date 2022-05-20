<?php

namespace Gyroscops\Api\Model;

class UserAuthorization
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
     * @var string|null
     */
    protected $user;
    /**
     * 
     *
     * @var string|null
     */
    protected $workspace;
    /**
     * 
     *
     * @var string|null
     */
    protected $organization;
    /**
     * 
     *
     * @var string
     */
    protected $resource;
    /**
     * 
     *
     * @var string[]
     */
    protected $authorizations;
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
     * @return string|null
     */
    public function getUser() : ?string
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param string|null $user
     *
     * @return self
     */
    public function setUser(?string $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getWorkspace() : ?string
    {
        return $this->workspace;
    }
    /**
     * 
     *
     * @param string|null $workspace
     *
     * @return self
     */
    public function setWorkspace(?string $workspace) : self
    {
        $this->workspace = $workspace;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOrganization() : ?string
    {
        return $this->organization;
    }
    /**
     * 
     *
     * @param string|null $organization
     *
     * @return self
     */
    public function setOrganization(?string $organization) : self
    {
        $this->organization = $organization;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResource() : string
    {
        return $this->resource;
    }
    /**
     * 
     *
     * @param string $resource
     *
     * @return self
     */
    public function setResource(string $resource) : self
    {
        $this->resource = $resource;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getAuthorizations() : array
    {
        return $this->authorizations;
    }
    /**
     * 
     *
     * @param string[] $authorizations
     *
     * @return self
     */
    public function setAuthorizations(array $authorizations) : self
    {
        $this->authorizations = $authorizations;
        return $this;
    }
}