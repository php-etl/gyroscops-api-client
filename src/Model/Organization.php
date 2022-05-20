<?php

namespace Gyroscops\Api\Model;

class Organization
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
     * @var string[]
     */
    protected $authorizations;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string[]
     */
    protected $users;
    /**
     * 
     *
     * @var string[]
     */
    protected $externalCollaborators;
    /**
     * 
     *
     * @var string[]
     */
    protected $workspaces;
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
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getUsers() : array
    {
        return $this->users;
    }
    /**
     * 
     *
     * @param string[] $users
     *
     * @return self
     */
    public function setUsers(array $users) : self
    {
        $this->users = $users;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getExternalCollaborators() : array
    {
        return $this->externalCollaborators;
    }
    /**
     * 
     *
     * @param string[] $externalCollaborators
     *
     * @return self
     */
    public function setExternalCollaborators(array $externalCollaborators) : self
    {
        $this->externalCollaborators = $externalCollaborators;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getWorkspaces() : array
    {
        return $this->workspaces;
    }
    /**
     * 
     *
     * @param string[] $workspaces
     *
     * @return self
     */
    public function setWorkspaces(array $workspaces) : self
    {
        $this->workspaces = $workspaces;
        return $this;
    }
}