<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class User
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $firstName;
    /**
     * @var string|null
     */
    protected $lastName;
    /**
     * @var string|null
     */
    protected $username;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * @var string|null
     */
    protected $password;
    /**
     * @var bool|null
     */
    protected $enabled;
    /**
     * @var string[][]|null
     */
    protected $roles;
    /**
     * @var string[]|null
     */
    protected $authorizations;
    /**
     * @var string|null
     */
    protected $organization;
    /**
     * @var string[]|null
     */
    protected $additionalOrganizations;
    /**
     * @var string[]|null
     */
    protected $workspaces;
    /**
     * @var string|null
     */
    protected $currentWorkspace;
    /**
     * @var string[]|null
     */
    protected $referralCodes;
    /**
     * @var string[]|null
     */
    protected $acceptedReferralRequests;
    /**
     * @var string|null
     */
    protected $userIdentifier;
    /**
     * @var string|null
     */
    protected $salt;
    /**
     * @var string[]|null
     */
    protected $workspace;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * @return string[][]|null
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }

    /**
     * @param string[][]|null $roles
     */
    public function setRoles(?array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAuthorizations(): ?array
    {
        return $this->authorizations;
    }

    /**
     * @param string[]|null $authorizations
     */
    public function setAuthorizations(?array $authorizations): self
    {
        $this->authorizations = $authorizations;

        return $this;
    }

    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    public function setOrganization(?string $organization): self
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAdditionalOrganizations(): ?array
    {
        return $this->additionalOrganizations;
    }

    /**
     * @param string[]|null $additionalOrganizations
     */
    public function setAdditionalOrganizations(?array $additionalOrganizations): self
    {
        $this->additionalOrganizations = $additionalOrganizations;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getWorkspaces(): ?array
    {
        return $this->workspaces;
    }

    /**
     * @param string[]|null $workspaces
     */
    public function setWorkspaces(?array $workspaces): self
    {
        $this->workspaces = $workspaces;

        return $this;
    }

    public function getCurrentWorkspace(): ?string
    {
        return $this->currentWorkspace;
    }

    public function setCurrentWorkspace(?string $currentWorkspace): self
    {
        $this->currentWorkspace = $currentWorkspace;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getReferralCodes(): ?array
    {
        return $this->referralCodes;
    }

    /**
     * @param string[]|null $referralCodes
     */
    public function setReferralCodes(?array $referralCodes): self
    {
        $this->referralCodes = $referralCodes;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAcceptedReferralRequests(): ?array
    {
        return $this->acceptedReferralRequests;
    }

    /**
     * @param string[]|null $acceptedReferralRequests
     */
    public function setAcceptedReferralRequests(?array $acceptedReferralRequests): self
    {
        $this->acceptedReferralRequests = $acceptedReferralRequests;

        return $this;
    }

    public function getUserIdentifier(): ?string
    {
        return $this->userIdentifier;
    }

    public function setUserIdentifier(?string $userIdentifier): self
    {
        $this->userIdentifier = $userIdentifier;

        return $this;
    }

    public function getSalt(): ?string
    {
        return $this->salt;
    }

    public function setSalt(?string $salt): self
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getWorkspace(): ?array
    {
        return $this->workspace;
    }

    /**
     * @param string[]|null $workspace
     */
    public function setWorkspace(?array $workspace): self
    {
        $this->workspace = $workspace;

        return $this;
    }
}
