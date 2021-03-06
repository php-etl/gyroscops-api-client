<?php

namespace Gyroscops\Api\Model;

class User
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
    protected $username;
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
    protected $password;
    /**
     * 
     *
     * @var bool
     */
    protected $enabled;
    /**
     * 
     *
     * @var string[]
     */
    protected $roles;
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
    protected $organization;
    /**
     * 
     *
     * @var string[]
     */
    protected $additionalOrganizations;
    /**
     * 
     *
     * @var string[]
     */
    protected $workspaces;
    /**
     * 
     *
     * @var string|null
     */
    protected $currentWorkspace;
    /**
     * 
     *
     * @var string[]
     */
    protected $referralCodes;
    /**
     * 
     *
     * @var string[]
     */
    protected $acceptedReferralRequests;
    /**
     * 
     *
     * @var string
     */
    protected $userIdentifier;
    /**
     * 
     *
     * @var string
     */
    protected $salt;
    /**
     * 
     *
     * @var string[]
     */
    protected $workspace;
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
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username) : self
    {
        $this->username = $username;
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
    public function getPassword() : string
    {
        return $this->password;
    }
    /**
     * 
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password) : self
    {
        $this->password = $password;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * 
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getRoles() : array
    {
        return $this->roles;
    }
    /**
     * 
     *
     * @param string[] $roles
     *
     * @return self
     */
    public function setRoles(array $roles) : self
    {
        $this->roles = $roles;
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
    public function getOrganization() : string
    {
        return $this->organization;
    }
    /**
     * 
     *
     * @param string $organization
     *
     * @return self
     */
    public function setOrganization(string $organization) : self
    {
        $this->organization = $organization;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getAdditionalOrganizations() : array
    {
        return $this->additionalOrganizations;
    }
    /**
     * 
     *
     * @param string[] $additionalOrganizations
     *
     * @return self
     */
    public function setAdditionalOrganizations(array $additionalOrganizations) : self
    {
        $this->additionalOrganizations = $additionalOrganizations;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getCurrentWorkspace() : ?string
    {
        return $this->currentWorkspace;
    }
    /**
     * 
     *
     * @param string|null $currentWorkspace
     *
     * @return self
     */
    public function setCurrentWorkspace(?string $currentWorkspace) : self
    {
        $this->currentWorkspace = $currentWorkspace;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getReferralCodes() : array
    {
        return $this->referralCodes;
    }
    /**
     * 
     *
     * @param string[] $referralCodes
     *
     * @return self
     */
    public function setReferralCodes(array $referralCodes) : self
    {
        $this->referralCodes = $referralCodes;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getAcceptedReferralRequests() : array
    {
        return $this->acceptedReferralRequests;
    }
    /**
     * 
     *
     * @param string[] $acceptedReferralRequests
     *
     * @return self
     */
    public function setAcceptedReferralRequests(array $acceptedReferralRequests) : self
    {
        $this->acceptedReferralRequests = $acceptedReferralRequests;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserIdentifier() : string
    {
        return $this->userIdentifier;
    }
    /**
     * 
     *
     * @param string $userIdentifier
     *
     * @return self
     */
    public function setUserIdentifier(string $userIdentifier) : self
    {
        $this->userIdentifier = $userIdentifier;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSalt() : string
    {
        return $this->salt;
    }
    /**
     * 
     *
     * @param string $salt
     *
     * @return self
     */
    public function setSalt(string $salt) : self
    {
        $this->salt = $salt;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getWorkspace() : array
    {
        return $this->workspace;
    }
    /**
     * 
     *
     * @param string[] $workspace
     *
     * @return self
     */
    public function setWorkspace(array $workspace) : self
    {
        $this->workspace = $workspace;
        return $this;
    }
}