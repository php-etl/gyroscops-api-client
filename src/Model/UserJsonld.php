<?php

namespace Gyroscops\Api\Model;

class UserJsonld
{
    /**
     * @var mixed
     */
    protected $context;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $id2;
    /**
     * @var string
     */
    protected $firstName;
    /**
     * @var string
     */
    protected $lastName;
    /**
     * @var string
     */
    protected $username;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var bool
     */
    protected $enabled;
    /**
     * @var string[][]
     */
    protected $roles;
    /**
     * @var string[]
     */
    protected $authorizations;
    /**
     * @var string
     */
    protected $organization;
    /**
     * @var string[]
     */
    protected $additionalOrganizations;
    /**
     * @var string[]
     */
    protected $workspaces;
    /**
     * @var string|null
     */
    protected $currentWorkspace;
    /**
     * @var string[]
     */
    protected $referralCodes;
    /**
     * @var string[]
     */
    protected $acceptedReferralRequests;
    /**
     * @var string
     */
    protected $userIdentifier;
    /**
     * @var string
     */
    protected $salt;
    /**
     * @var string[]
     */
    protected $workspace;

    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param mixed $context
     */
    public function setContext($context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getId2(): string
    {
        return $this->id2;
    }

    public function setId2(string $id2): self
    {
        $this->id2 = $id2;

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * @return string[][]
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param string[][] $roles
     */
    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getAuthorizations(): array
    {
        return $this->authorizations;
    }

    /**
     * @param string[] $authorizations
     */
    public function setAuthorizations(array $authorizations): self
    {
        $this->authorizations = $authorizations;

        return $this;
    }

    public function getOrganization(): string
    {
        return $this->organization;
    }

    public function setOrganization(string $organization): self
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getAdditionalOrganizations(): array
    {
        return $this->additionalOrganizations;
    }

    /**
     * @param string[] $additionalOrganizations
     */
    public function setAdditionalOrganizations(array $additionalOrganizations): self
    {
        $this->additionalOrganizations = $additionalOrganizations;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getWorkspaces(): array
    {
        return $this->workspaces;
    }

    /**
     * @param string[] $workspaces
     */
    public function setWorkspaces(array $workspaces): self
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
     * @return string[]
     */
    public function getReferralCodes(): array
    {
        return $this->referralCodes;
    }

    /**
     * @param string[] $referralCodes
     */
    public function setReferralCodes(array $referralCodes): self
    {
        $this->referralCodes = $referralCodes;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getAcceptedReferralRequests(): array
    {
        return $this->acceptedReferralRequests;
    }

    /**
     * @param string[] $acceptedReferralRequests
     */
    public function setAcceptedReferralRequests(array $acceptedReferralRequests): self
    {
        $this->acceptedReferralRequests = $acceptedReferralRequests;

        return $this;
    }

    public function getUserIdentifier(): string
    {
        return $this->userIdentifier;
    }

    public function setUserIdentifier(string $userIdentifier): self
    {
        $this->userIdentifier = $userIdentifier;

        return $this;
    }

    public function getSalt(): string
    {
        return $this->salt;
    }

    public function setSalt(string $salt): self
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getWorkspace(): array
    {
        return $this->workspace;
    }

    /**
     * @param string[] $workspace
     */
    public function setWorkspace(array $workspace): self
    {
        $this->workspace = $workspace;

        return $this;
    }
}
