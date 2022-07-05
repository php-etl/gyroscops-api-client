<?php

namespace Gyroscops\Api;

class Client extends \Gyroscops\Api\Runtime\Client\Client
{
    /**
     * 
     *
     * @param null|\stdClass $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PostForgotPasswordBadRequestException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postForgotPassword(?\stdClass $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostForgotPassword($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $token 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetForgotPasswordNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getForgotPassword(string $token, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetForgotPassword($token), $fetch);
    }
    /**
     * 
     *
     * @param string $token 
     * @param null|\stdClass $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PostForgotPasswordTokenBadRequestException
     * @throws \Gyroscops\Api\Exception\PostForgotPasswordTokenNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postForgotPasswordToken(string $token, ?\stdClass $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostForgotPasswordToken($token, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\User[]|\Psr\Http\Message\ResponseInterface
     */
    public function meUserCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\MeUserCollection(), $fetch);
    }
    /**
     * Removes the Organization resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\DeleteOrganizationItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrganizationItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeleteOrganizationItem($id), $fetch);
    }
    /**
     * Retrieves a Organization resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetOrganizationItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface
     */
    public function getOrganizationItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetOrganizationItem($id), $fetch);
    }
    /**
     * Updates the Organization resource.
     *
     * @param string $id Resource identifier
     * @param \Gyroscops\Api\Model\Organization $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PatchOrganizationItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PatchOrganizationItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PatchOrganizationItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface
     */
    public function patchOrganizationItem(string $id, \Gyroscops\Api\Model\Organization $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PatchOrganizationItem($id, $requestBody), $fetch);
    }
    /**
     * Replaces the Organization resource.
     *
     * @param string $id Resource identifier
     * @param \Gyroscops\Api\Model\OrganizationJsonld|\Gyroscops\Api\Model\Organization $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PutOrganizationItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PutOrganizationItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PutOrganizationItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface
     */
    public function putOrganizationItem(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PutOrganizationItem($id, $requestBody), $fetch);
    }
    /**
     * Retrieves a Organization resource.
     *
     * @param string $id Organization identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\UserAuthorization[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiOrganizationsAuthorizationsGetSubresourceOrganizationSubresource(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiOrganizationsAuthorizationsGetSubresourceOrganizationSubresource($id, $queryParameters), $fetch);
    }
    /**
     * Retrieves a Organization resource.
     *
     * @param string $id Organization identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\User[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiOrganizationsExternalCollaboratorsGetSubresourceOrganizationSubresource(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiOrganizationsExternalCollaboratorsGetSubresourceOrganizationSubresource($id, $queryParameters), $fetch);
    }
    /**
     * Retrieves a Organization resource.
     *
     * @param string $id Organization identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\User[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiOrganizationsUsersGetSubresourceOrganizationSubresource(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiOrganizationsUsersGetSubresourceOrganizationSubresource($id, $queryParameters), $fetch);
    }
    /**
     * Retrieves a Organization resource.
     *
     * @param string $id Organization identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Workspace[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiOrganizationsWorkspacesGetSubresourceOrganizationSubresource(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiOrganizationsWorkspacesGetSubresourceOrganizationSubresource($id, $queryParameters), $fetch);
    }
    /**
     * Retrieves the collection of Organization resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Organization[]|\Psr\Http\Message\ResponseInterface
     */
    public function getOrganizationCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetOrganizationCollection($queryParameters), $fetch);
    }
    /**
     * Creates a Organization resource.
     *
     * @param \Gyroscops\Api\Model\OrganizationJsonld|\Gyroscops\Api\Model\Organization $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PostOrganizationCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostOrganizationCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface
     */
    public function postOrganizationCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostOrganizationCollection($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param null|\Gyroscops\Api\Model\Credentials $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Token|\Psr\Http\Message\ResponseInterface
     */
    public function postCredentialsItem(?\Gyroscops\Api\Model\Credentials $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostCredentialsItem($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param null|\stdClass $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function putAuthenticationToken(?\stdClass $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PutAuthenticationToken($requestBody), $fetch);
    }
    /**
     * Removes the UserAuthorization resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\DeleteUserAuthorizationItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUserAuthorizationItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeleteUserAuthorizationItem($id), $fetch);
    }
    /**
     * Retrieves a UserAuthorization resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetUserAuthorizationItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\UserAuthorization|\Psr\Http\Message\ResponseInterface
     */
    public function getUserAuthorizationItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetUserAuthorizationItem($id), $fetch);
    }
    /**
     * Updates the UserAuthorization resource.
     *
     * @param string $id Resource identifier
     * @param \Gyroscops\Api\Model\UserAuthorization $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PatchUserAuthorizationItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PatchUserAuthorizationItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PatchUserAuthorizationItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\UserAuthorization|\Psr\Http\Message\ResponseInterface
     */
    public function patchUserAuthorizationItem(string $id, \Gyroscops\Api\Model\UserAuthorization $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PatchUserAuthorizationItem($id, $requestBody), $fetch);
    }
    /**
     * Replaces the UserAuthorization resource.
     *
     * @param string $id Resource identifier
     * @param \Gyroscops\Api\Model\UserAuthorizationJsonld|\Gyroscops\Api\Model\UserAuthorization $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PutUserAuthorizationItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PutUserAuthorizationItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PutUserAuthorizationItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\UserAuthorization|\Psr\Http\Message\ResponseInterface
     */
    public function putUserAuthorizationItem(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PutUserAuthorizationItem($id, $requestBody), $fetch);
    }
    /**
     * Retrieves the collection of UserAuthorization resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\UserAuthorization[]|\Psr\Http\Message\ResponseInterface
     */
    public function getUserAuthorizationCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetUserAuthorizationCollection($queryParameters), $fetch);
    }
    /**
     * Creates a UserAuthorization resource.
     *
     * @param \Gyroscops\Api\Model\UserAuthorizationJsonld|\Gyroscops\Api\Model\UserAuthorization $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PostUserAuthorizationCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostUserAuthorizationCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\UserAuthorization|\Psr\Http\Message\ResponseInterface
     */
    public function postUserAuthorizationCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostUserAuthorizationCollection($requestBody), $fetch);
    }
    /**
     * Removes the User resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\DeleteUserItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteUserItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeleteUserItem($id), $fetch);
    }
    /**
     * Retrieves a User resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetUserItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function getUserItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetUserItem($id), $fetch);
    }
    /**
     * Updates the User resource.
     *
     * @param string $id Resource identifier
     * @param \Gyroscops\Api\Model\User $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PatchUserItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PatchUserItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PatchUserItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function patchUserItem(string $id, \Gyroscops\Api\Model\User $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PatchUserItem($id, $requestBody), $fetch);
    }
    /**
     * Replaces the User resource.
     *
     * @param string $id Resource identifier
     * @param \Gyroscops\Api\Model\UserJsonld|\Gyroscops\Api\Model\User $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PutUserItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PutUserItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PutUserItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function putUserItem(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PutUserItem($id, $requestBody), $fetch);
    }
    /**
     * Retrieves a User resource.
     *
     * @param string $id User identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\UserAuthorization[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiUsersAuthorizationsGetSubresourceUserSubresource(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiUsersAuthorizationsGetSubresourceUserSubresource($id, $queryParameters), $fetch);
    }
    /**
     * Updates the User resource.
     *
     * @param string $id Resource identifier
     * @param \Gyroscops\Api\Model\UserUserChangePasswordInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\ChangePasswordUserItemBadRequestException
     * @throws \Gyroscops\Api\Exception\ChangePasswordUserItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\ChangePasswordUserItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function changePasswordUserItem(string $id, \Gyroscops\Api\Model\UserUserChangePasswordInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ChangePasswordUserItem($id, $requestBody), $fetch);
    }
    /**
     * Retrieves the collection of User resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\User[]|\Psr\Http\Message\ResponseInterface
     */
    public function getUserCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetUserCollection($queryParameters), $fetch);
    }
    /**
     * Creates a User resource.
     *
     * @param \Gyroscops\Api\Model\UserJsonld|\Gyroscops\Api\Model\User $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PostUserCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostUserCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function postUserCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostUserCollection($requestBody), $fetch);
    }
    /**
     * Removes the Workspace resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\DeleteWorkspaceItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteWorkspaceItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeleteWorkspaceItem($id), $fetch);
    }
    /**
     * Retrieves a Workspace resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetWorkspaceItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\Workspace|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkspaceItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetWorkspaceItem($id), $fetch);
    }
    /**
     * Updates the Workspace resource.
     *
     * @param string $id Resource identifier
     * @param \Gyroscops\Api\Model\Workspace $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PatchWorkspaceItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PatchWorkspaceItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PatchWorkspaceItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\Workspace|\Psr\Http\Message\ResponseInterface
     */
    public function patchWorkspaceItem(string $id, \Gyroscops\Api\Model\Workspace $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PatchWorkspaceItem($id, $requestBody), $fetch);
    }
    /**
     * Replaces the Workspace resource.
     *
     * @param string $id Resource identifier
     * @param \Gyroscops\Api\Model\WorkspaceJsonld|\Gyroscops\Api\Model\Workspace $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PutWorkspaceItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PutWorkspaceItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PutWorkspaceItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\Workspace|\Psr\Http\Message\ResponseInterface
     */
    public function putWorkspaceItem(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PutWorkspaceItem($id, $requestBody), $fetch);
    }
    /**
     * Retrieves a Workspace resource.
     *
     * @param string $id Workspace identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\UserAuthorization[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiWorkspacesAuthorizationsGetSubresourceWorkspaceSubresource(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiWorkspacesAuthorizationsGetSubresourceWorkspaceSubresource($id, $queryParameters), $fetch);
    }
    /**
     * Retrieves a Workspace resource.
     *
     * @param string $id Workspace identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\User[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiWorkspacesUsersGetSubresourceWorkspaceSubresource(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiWorkspacesUsersGetSubresourceWorkspaceSubresource($id, $queryParameters), $fetch);
    }
    /**
     * Retrieves the collection of Workspace resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Workspace[]|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkspaceCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetWorkspaceCollection($queryParameters), $fetch);
    }
    /**
     * Creates a Workspace resource.
     *
     * @param \Gyroscops\Api\Model\WorkspaceJsonld|\Gyroscops\Api\Model\Workspace $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PostWorkspaceCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostWorkspaceCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\Workspace|\Psr\Http\Message\ResponseInterface
     */
    public function postWorkspaceCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostWorkspaceCollection($requestBody), $fetch);
    }
    /**
     * Creates a Environment resource.
     *
     * @param \Gyroscops\Api\Model\EnvironmentJsonld|\Gyroscops\Api\Model\Environment $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PostEnvironmentCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostEnvironmentCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\Environment|\Psr\Http\Message\ResponseInterface
     */
    public function postEnvironmentCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostEnvironmentCollection($requestBody), $fetch);
    }
    /**
     * Retrieves a Environment resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetEnvironmentItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\Environment|\Psr\Http\Message\ResponseInterface
     */
    public function getEnvironmentItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetEnvironmentItem($id), $fetch);
    }
    /**
     * Retrieves the collection of Environment resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Environment[]|\Psr\Http\Message\ResponseInterface
     */
    public function getEnvironmentCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetEnvironmentCollection($queryParameters), $fetch);
    }
    /**
     * Creates a Secret resource.
     *
     * @param \Gyroscops\Api\Model\SecretSecretInputJsonld|\Gyroscops\Api\Model\SecretSecretInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PostSecretCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostSecretCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\Secret|\Psr\Http\Message\ResponseInterface
     */
    public function postSecretCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostSecretCollection($requestBody), $fetch);
    }
    /**
     * Retrieves a Secret resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetSecretItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\Secret|\Psr\Http\Message\ResponseInterface
     */
    public function getSecretItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetSecretItem($id), $fetch);
    }
    /**
     * Adds a new Secret value to the Secret storage
     *
     * @param string $id Secret resource code
     * @param null|\stdClass $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\AddValueSecretCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\AddValueSecretCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\Secret[]|\Psr\Http\Message\ResponseInterface
     */
    public function addValueSecretCollection(string $id, ?\stdClass $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\AddValueSecretCollection($id, $requestBody), $fetch);
    }
    /**
     * Retrieves the collection of Secret resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Secret[]|\Psr\Http\Message\ResponseInterface
     */
    public function getSecretCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetSecretCollection($queryParameters), $fetch);
    }
    /**
     * Creates a VariableFromConfigMap resource.
     *
     * @param \Gyroscops\Api\Model\VariableFromConfigMapJsonld|\Gyroscops\Api\Model\VariableFromConfigMap $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PostVariableFromConfigMapCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostVariableFromConfigMapCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\VariableFromConfigMap|\Psr\Http\Message\ResponseInterface
     */
    public function postVariableFromConfigMapCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostVariableFromConfigMapCollection($requestBody), $fetch);
    }
    /**
     * Retrieves a VariableFromConfigMap resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetVariableFromConfigMapItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\VariableFromConfigMap|\Psr\Http\Message\ResponseInterface
     */
    public function getVariableFromConfigMapItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetVariableFromConfigMapItem($id), $fetch);
    }
    /**
     * Retrieves the collection of VariableFromConfigMap resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\VariableFromConfigMap[]|\Psr\Http\Message\ResponseInterface
     */
    public function getVariableFromConfigMapCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetVariableFromConfigMapCollection($queryParameters), $fetch);
    }
    /**
     * Creates a VariableFromSecret resource.
     *
     * @param \Gyroscops\Api\Model\VariableFromSecretJsonld|\Gyroscops\Api\Model\VariableFromSecret $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PostVariableFromSecretCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostVariableFromSecretCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\VariableFromSecret|\Psr\Http\Message\ResponseInterface
     */
    public function postVariableFromSecretCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostVariableFromSecretCollection($requestBody), $fetch);
    }
    /**
     * Retrieves a VariableFromSecret resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetVariableFromSecretItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\VariableFromSecret|\Psr\Http\Message\ResponseInterface
     */
    public function getVariableFromSecretItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetVariableFromSecretItem($id), $fetch);
    }
    /**
     * Retrieves the collection of VariableFromSecret resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\VariableFromSecret[]|\Psr\Http\Message\ResponseInterface
     */
    public function getVariableFromSecretCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetVariableFromSecretCollection($queryParameters), $fetch);
    }
    /**
     * Removes the ReferralCode resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\DeleteReferralCodeItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteReferralCodeItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeleteReferralCodeItem($id), $fetch);
    }
    /**
     * Retrieves a ReferralCode resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetReferralCodeItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\ReferralCodeReferralCodeRead|\Psr\Http\Message\ResponseInterface
     */
    public function getReferralCodeItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetReferralCodeItem($id), $fetch);
    }
    /**
     * Retrieves the collection of ReferralCode resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ReferralCodeReferralCodeRead[]|\Psr\Http\Message\ResponseInterface
     */
    public function getReferralCodeCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetReferralCodeCollection($queryParameters), $fetch);
    }
    /**
     * Creates a ReferralCode resource.
     *
     * @param \Gyroscops\Api\Model\ReferralCodeJsonldReferralCodeWrite|\Gyroscops\Api\Model\ReferralCodeReferralCodeWrite $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PostReferralCodeCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostReferralCodeCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\ReferralCodeReferralCodeRead|\Psr\Http\Message\ResponseInterface
     */
    public function postReferralCodeCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostReferralCodeCollection($requestBody), $fetch);
    }
    /**
     * Retrieves a OnPremiseRequest resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetOnPremiseRequestItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\OnPremiseRequestOnPremiseRequestRead|\Psr\Http\Message\ResponseInterface
     */
    public function getOnPremiseRequestItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetOnPremiseRequestItem($id), $fetch);
    }
    /**
     * Retrieves the collection of OnPremiseRequest resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\OnPremiseRequestOnPremiseRequestRead[]|\Psr\Http\Message\ResponseInterface
     */
    public function getOnPremiseRequestCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetOnPremiseRequestCollection($queryParameters), $fetch);
    }
    /**
     * Creates a OnPremiseRequest resource.
     *
     * @param \Gyroscops\Api\Model\OnPremiseRequestJsonldOnPremiseRequestWrite|\Gyroscops\Api\Model\OnPremiseRequestOnPremiseRequestWrite $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PostOnPremiseRequestCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostOnPremiseRequestCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\OnPremiseRequestOnPremiseRequestRead|\Psr\Http\Message\ResponseInterface
     */
    public function postOnPremiseRequestCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostOnPremiseRequestCollection($requestBody), $fetch);
    }
    /**
     * Retrieves a ReferralRequest resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetReferralRequestItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\ReferralRequestReferralRequestRead|\Psr\Http\Message\ResponseInterface
     */
    public function getReferralRequestItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetReferralRequestItem($id), $fetch);
    }
    /**
     * Accepts a referral request
     *
     * @param string $id Resource identifier
     * @param null $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\AcceptReferralRequestReferralRequestItemBadRequestException
     * @throws \Gyroscops\Api\Exception\AcceptReferralRequestReferralRequestItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\AcceptReferralRequestReferralRequestItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\ReferralRequestReferralRequestRead|\Psr\Http\Message\ResponseInterface
     */
    public function acceptReferralRequestReferralRequestItem(string $id, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\AcceptReferralRequestReferralRequestItem($id, $requestBody), $fetch);
    }
    /**
     * Rejects a referral request
     *
     * @param string $id Resource identifier
     * @param null $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\RejectReferralRequestReferralRequestItemBadRequestException
     * @throws \Gyroscops\Api\Exception\RejectReferralRequestReferralRequestItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\RejectReferralRequestReferralRequestItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\ReferralRequestReferralRequestRead|\Psr\Http\Message\ResponseInterface
     */
    public function rejectReferralRequestReferralRequestItem(string $id, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\RejectReferralRequestReferralRequestItem($id, $requestBody), $fetch);
    }
    /**
     * Creates a ReferralRequest resource.
     *
     * @param \Gyroscops\Api\Model\ReferralRequestReferralRequestInputJsonld|\Gyroscops\Api\Model\ReferralRequestReferralRequestInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PostReferralRequestCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostReferralRequestCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\ReferralRequestReferralRequestRead|\Psr\Http\Message\ResponseInterface
     */
    public function postReferralRequestCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostReferralRequestCollection($requestBody), $fetch);
    }
    /**
     * Retrieves the collection of ReferralRequest resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ReferralRequestReferralRequestRead[]|\Psr\Http\Message\ResponseInterface
     */
    public function getReferralRequestCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetReferralRequestCollection($queryParameters), $fetch);
    }
    /**
     * Retrieves a Action resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetActionItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\ActionRead|\Psr\Http\Message\ResponseInterface
     */
    public function getActionItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetActionItem($id), $fetch);
    }
    /**
     * Retrieves a Action resource.
     *
     * @param string $id Action identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface
     */
    public function apiActionsOrganizationGetSubresourceActionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiActionsOrganizationGetSubresourceActionSubresource($id), $fetch);
    }
    /**
     * Retrieves a Action resource.
     *
     * @param string $id Action identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function apiActionsOwnerGetSubresourceActionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiActionsOwnerGetSubresourceActionSubresource($id), $fetch);
    }
    /**
     * Retrieves a Action resource.
     *
     * @param string $id Action identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Workspace|\Psr\Http\Message\ResponseInterface
     */
    public function apiActionsWorkspaceGetSubresourceActionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiActionsWorkspaceGetSubresourceActionSubresource($id), $fetch);
    }
    /**
     * Retrieves the collection of Action resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ActionRead[]|\Psr\Http\Message\ResponseInterface
     */
    public function getActionCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetActionCollection($queryParameters), $fetch);
    }
    /**
     * Retrieves a ExecutionPipelineJob resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetExecutionPipelineJobItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\ExecutionPipelineJob|\Psr\Http\Message\ResponseInterface
     */
    public function getExecutionPipelineJobItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionPipelineJobItem($id), $fetch);
    }
    /**
     * Retrieves a ExecutionPipelineJob resource.
     *
     * @param string $id ExecutionPipelineJob identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionPipelineStep[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiExecutionPipelineJobsStepsGetSubresourceExecutionPipelineJobSubresource(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionPipelineJobsStepsGetSubresourceExecutionPipelineJobSubresource($id, $queryParameters), $fetch);
    }
    /**
     * Retrieves the collection of ExecutionPipelineJob resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionPipelineJob[]|\Psr\Http\Message\ResponseInterface
     */
    public function getExecutionPipelineJobCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionPipelineJobCollection($queryParameters), $fetch);
    }
    /**
     * Retrieves a ExecutionAction resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetExecutionActionItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\ExecutionAction|\Psr\Http\Message\ResponseInterface
     */
    public function getExecutionActionItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionActionItem($id), $fetch);
    }
    /**
     * Retrieves a ExecutionPipeline resource.
     *
     * @param string $id ExecutionPipeline identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionPipelineStep[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiExecutionPipelinesStepsGetSubresourceExecutionPipelineSubresource(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionPipelinesStepsGetSubresourceExecutionPipelineSubresource($id, $queryParameters), $fetch);
    }
    /**
     * Retrieves the collection of ExecutionPipeline resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionPipeline[]|\Psr\Http\Message\ResponseInterface
     */
    public function getExecutionPipelineCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionPipelineCollection($queryParameters), $fetch);
    }
    /**
     * Retrieves a ExecutionWorkflow resource.
     *
     * @param string $id ExecutionWorkflow identifier
     * @param string $jobs ExecutionWorkflowJob identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionWorkflowJobAction|\Psr\Http\Message\ResponseInterface
     */
    public function apiExecutionWorkflowsJobsActionGetSubresourceExecutionWorkflowSubresource(string $id, string $jobs, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionWorkflowsJobsActionGetSubresourceExecutionWorkflowSubresource($id, $jobs), $fetch);
    }
    /**
     * Retrieves a ExecutionWorkflow resource.
     *
     * @param string $id ExecutionWorkflow identifier
     * @param string $jobs ExecutionWorkflowJob identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionPipelineJob|\Psr\Http\Message\ResponseInterface
     */
    public function apiExecutionWorkflowsJobsPipelineGetSubresourceExecutionWorkflowSubresource(string $id, string $jobs, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionWorkflowsJobsPipelineGetSubresourceExecutionWorkflowSubresource($id, $jobs), $fetch);
    }
    /**
     * Retrieves a ExecutionWorkflow resource.
     *
     * @param string $id ExecutionWorkflow identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionWorkflowJob[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiExecutionWorkflowsJobsGetSubresourceExecutionWorkflowSubresource(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionWorkflowsJobsGetSubresourceExecutionWorkflowSubresource($id, $queryParameters), $fetch);
    }
    /**
     * Retrieves the collection of ExecutionWorkflow resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionWorkflow[]|\Psr\Http\Message\ResponseInterface
     */
    public function getExecutionWorkflowCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionWorkflowCollection($queryParameters), $fetch);
    }
    /**
     * Retrieves a ExecutionPipelineStep resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetExecutionPipelineStepItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\ExecutionPipelineStep|\Psr\Http\Message\ResponseInterface
     */
    public function getExecutionPipelineStepItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionPipelineStepItem($id), $fetch);
    }
    /**
     * Retrieves a ExecutionPipeline resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetExecutionPipelineItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\ExecutionPipeline|\Psr\Http\Message\ResponseInterface
     */
    public function getExecutionPipelineItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionPipelineItem($id), $fetch);
    }
    /**
     * Retrieves a ExecutionWorkflowJobAction resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetExecutionWorkflowJobActionItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\ExecutionWorkflowJobAction|\Psr\Http\Message\ResponseInterface
     */
    public function getExecutionWorkflowJobActionItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionWorkflowJobActionItem($id), $fetch);
    }
    /**
     * Retrieves a ExecutionWorkflowJob resource.
     *
     * @param string $id ExecutionWorkflowJob identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionWorkflowJobAction|\Psr\Http\Message\ResponseInterface
     */
    public function apiExecutionWorkflowJobsActionGetSubresourceExecutionWorkflowJobSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionWorkflowJobsActionGetSubresourceExecutionWorkflowJobSubresource($id), $fetch);
    }
    /**
     * Retrieves a ExecutionWorkflowJob resource.
     *
     * @param string $id ExecutionWorkflowJob identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionPipelineJob|\Psr\Http\Message\ResponseInterface
     */
    public function apiExecutionWorkflowJobsPipelineGetSubresourceExecutionWorkflowJobSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionWorkflowJobsPipelineGetSubresourceExecutionWorkflowJobSubresource($id), $fetch);
    }
    /**
     * Retrieves a ExecutionWorkflowJob resource.
     *
     * @param string $id ExecutionWorkflowJob identifier
     * @param string $pipeline ExecutionPipelineJob identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionPipelineStep[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiExecutionWorkflowJobsPipelineStepsGetSubresourceExecutionWorkflowJobSubresource(string $id, string $pipeline, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionWorkflowJobsPipelineStepsGetSubresourceExecutionWorkflowJobSubresource($id, $pipeline, $queryParameters), $fetch);
    }
    /**
     * Retrieves the collection of ExecutionWorkflowJob resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionWorkflowJob[]|\Psr\Http\Message\ResponseInterface
     */
    public function getExecutionWorkflowJobCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionWorkflowJobCollection($queryParameters), $fetch);
    }
    /**
     * Retrieves a ExecutionWorkflowJob resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetExecutionWorkflowJobItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\ExecutionWorkflowJob|\Psr\Http\Message\ResponseInterface
     */
    public function getExecutionWorkflowJobItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionWorkflowJobItem($id), $fetch);
    }
    /**
     * Retrieves a ExecutionWorkflow resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetExecutionWorkflowItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\ExecutionWorkflow|\Psr\Http\Message\ResponseInterface
     */
    public function getExecutionWorkflowItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionWorkflowItem($id), $fetch);
    }
    /**
     * Retrieves a Execution resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetExecutionItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\ExecutionRead|\Psr\Http\Message\ResponseInterface
     */
    public function getExecutionItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionItem($id), $fetch);
    }
    /**
     * Retrieves a Execution resource.
     *
     * @param string $id Execution identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionAction|\Psr\Http\Message\ResponseInterface
     */
    public function apiExecutionsActionGetSubresourceExecutionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionsActionGetSubresourceExecutionSubresource($id), $fetch);
    }
    /**
     * Retrieves a Execution resource.
     *
     * @param string $id Execution identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface
     */
    public function apiExecutionsOrganizationGetSubresourceExecutionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionsOrganizationGetSubresourceExecutionSubresource($id), $fetch);
    }
    /**
     * Retrieves a Execution resource.
     *
     * @param string $id Execution identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function apiExecutionsOwnerGetSubresourceExecutionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionsOwnerGetSubresourceExecutionSubresource($id), $fetch);
    }
    /**
     * Retrieves a Execution resource.
     *
     * @param string $id Execution identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionPipeline|\Psr\Http\Message\ResponseInterface
     */
    public function apiExecutionsPipelineGetSubresourceExecutionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionsPipelineGetSubresourceExecutionSubresource($id), $fetch);
    }
    /**
     * Retrieves a Execution resource.
     *
     * @param string $id Execution identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionWorkflow|\Psr\Http\Message\ResponseInterface
     */
    public function apiExecutionsWorkflowGetSubresourceExecutionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionsWorkflowGetSubresourceExecutionSubresource($id), $fetch);
    }
    /**
     * Retrieves a Execution resource.
     *
     * @param string $id Execution identifier
     * @param string $workflow ExecutionWorkflow identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionWorkflowJob[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiExecutionsWorkflowJobsGetSubresourceExecutionSubresource(string $id, string $workflow, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionsWorkflowJobsGetSubresourceExecutionSubresource($id, $workflow, $queryParameters), $fetch);
    }
    /**
     * Retrieves a Execution resource.
     *
     * @param string $id Execution identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Workspace|\Psr\Http\Message\ResponseInterface
     */
    public function apiExecutionsWorkspaceGetSubresourceExecutionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionsWorkspaceGetSubresourceExecutionSubresource($id), $fetch);
    }
    /**
     * Retrieves the collection of Execution resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionRead[]|\Psr\Http\Message\ResponseInterface
     */
    public function getExecutionCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionCollection($queryParameters), $fetch);
    }
    /**
     * Declares a pipeline execution
     *
     * @param \Gyroscops\Api\Model\ExecutionDeclarePipelineExecutionCommandInputJsonld|\Gyroscops\Api\Model\ExecutionDeclarePipelineExecutionCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\DeclareExecutionExecutionCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\DeclareExecutionExecutionCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function declareExecutionExecutionCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeclareExecutionExecutionCollection($requestBody), $fetch);
    }
    /**
     * Finishes a pipeline execution
     *
     * @param \Gyroscops\Api\Model\ExecutionFinishPipelineExecutionCommandInputJsonld|\Gyroscops\Api\Model\ExecutionFinishPipelineExecutionCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\FinishExecutionExecutionCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\FinishExecutionExecutionCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function finishExecutionExecutionCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\FinishExecutionExecutionCollection($requestBody), $fetch);
    }
    /**
     * Interrupts a pipeline execution
     *
     * @param \Gyroscops\Api\Model\ExecutionInterruptPipelineExecutionCommandInputJsonld|\Gyroscops\Api\Model\ExecutionInterruptPipelineExecutionCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\InterruptExecutionExecutionCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\InterruptExecutionExecutionCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function interruptExecutionExecutionCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\InterruptExecutionExecutionCollection($requestBody), $fetch);
    }
    /**
     * Resumes a pipeline execution
     *
     * @param \Gyroscops\Api\Model\ExecutionResumePipelineExecutionCommandInputJsonld|\Gyroscops\Api\Model\ExecutionResumePipelineExecutionCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\ResumeExecutionExecutionCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ResumeExecutionExecutionCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function resumeExecutionExecutionCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ResumeExecutionExecutionCollection($requestBody), $fetch);
    }
    /**
     * Starts a pipeline execution
     *
     * @param \Gyroscops\Api\Model\ExecutionStartPipelineExecutionCommandInputJsonld|\Gyroscops\Api\Model\ExecutionStartPipelineExecutionCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\StartExecutionExecutionCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\StartExecutionExecutionCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function startExecutionExecutionCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\StartExecutionExecutionCollection($requestBody), $fetch);
    }
    /**
     * Terminates a pipeline execution
     *
     * @param \Gyroscops\Api\Model\ExecutionTerminatePipelineExecutionCommandInputJsonld|\Gyroscops\Api\Model\ExecutionTerminatePipelineExecutionCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\TerminateExecutionExecutionCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\TerminateExecutionExecutionCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function terminateExecutionExecutionCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\TerminateExecutionExecutionCollection($requestBody), $fetch);
    }
    /**
     * Updates a pipeline execution state
     *
     * @param \Gyroscops\Api\Model\ExecutionUpdatePipelineExecutionStateCommandInputJsonld|\Gyroscops\Api\Model\ExecutionUpdatePipelineExecutionStateCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\UpdateExecutionStateExecutionCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\UpdateExecutionStateExecutionCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function updateExecutionStateExecutionCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\UpdateExecutionStateExecutionCollection($requestBody), $fetch);
    }
    /**
     * Retrieves a PipelineCompilation resource.
     *
     * @param string $id PipelineCompilation identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface
     */
    public function apiPipelineCompilationsOrganizationGetSubresourcePipelineCompilationSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiPipelineCompilationsOrganizationGetSubresourcePipelineCompilationSubresource($id), $fetch);
    }
    /**
     * Retrieves a PipelineCompilation resource.
     *
     * @param string $id PipelineCompilation identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function apiPipelineCompilationsUserGetSubresourcePipelineCompilationSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiPipelineCompilationsUserGetSubresourcePipelineCompilationSubresource($id), $fetch);
    }
    /**
     * Retrieves a PipelineCompilation resource.
     *
     * @param string $id PipelineCompilation identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Workspace|\Psr\Http\Message\ResponseInterface
     */
    public function apiPipelineCompilationsWorkspaceGetSubresourcePipelineCompilationSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiPipelineCompilationsWorkspaceGetSubresourcePipelineCompilationSubresource($id), $fetch);
    }
    /**
     * Retrieves the collection of PipelineStepProbe resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\PipelineStepProbe[]|\Psr\Http\Message\ResponseInterface
     */
    public function getPipelineStepProbeCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetPipelineStepProbeCollection($queryParameters), $fetch);
    }
    /**
     * Retrieves a PipelineStepProbe resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetPipelineStepProbeItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\PipelineStepProbe|\Psr\Http\Message\ResponseInterface
     */
    public function getPipelineStepProbeItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetPipelineStepProbeItem($id), $fetch);
    }
    /**
     * Retrieves a PipelineStep resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetPipelineStepItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\PipelineStep|\Psr\Http\Message\ResponseInterface
     */
    public function getPipelineStepItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetPipelineStepItem($id), $fetch);
    }
    /**
     * Retrieves a PipelineStep resource.
     *
     * @param string $id PipelineStep identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\PipelineStepProbe[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiPipelineStepsProbesGetSubresourcePipelineStepSubresource(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiPipelineStepsProbesGetSubresourcePipelineStepSubresource($id, $queryParameters), $fetch);
    }
    /**
     * Retrieves the collection of PipelineStep resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\PipelineStep[]|\Psr\Http\Message\ResponseInterface
     */
    public function getPipelineStepCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetPipelineStepCollection($queryParameters), $fetch);
    }
    /**
     * Deletes a pipeline
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\DeletePipelinePipelineItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deletePipelinePipelineItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeletePipelinePipelineItem($id), $fetch);
    }
    /**
     * Retrieves a Pipeline resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetPipelineItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\PipelineRead|\Psr\Http\Message\ResponseInterface
     */
    public function getPipelineItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetPipelineItem($id), $fetch);
    }
    /**
     * Retrieves a Pipeline resource.
     *
     * @param string $id Pipeline identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\PipelineCompilation[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiPipelinesCompilationsGetSubresourcePipelineSubresource(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiPipelinesCompilationsGetSubresourcePipelineSubresource($id, $queryParameters), $fetch);
    }
    /**
     * Retrieves a Pipeline resource.
     *
     * @param string $id Pipeline identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface
     */
    public function apiPipelinesOrganizationGetSubresourcePipelineSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiPipelinesOrganizationGetSubresourcePipelineSubresource($id), $fetch);
    }
    /**
     * Retrieves a Pipeline resource.
     *
     * @param string $id Pipeline identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function apiPipelinesOwnerGetSubresourcePipelineSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiPipelinesOwnerGetSubresourcePipelineSubresource($id), $fetch);
    }
    /**
     * Removes a step from a pipeline
     *
     * @param string $code Step resource code
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\DeletePipelineStepPipelineItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deletePipelineStepPipelineItem(string $code, string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeletePipelineStepPipelineItem($code, $id), $fetch);
    }
    /**
     * Removes a probe from a step
     *
     * @param string $code Step resource code
     * @param string $probeCode Probe resource code
     * @param string $probeLabel Probe resource code
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\RemovePipelineStepProbePipelineItemNotFoundException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function removePipelineStepProbePipelineItem(string $code, string $probeCode, string $probeLabel, string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\RemovePipelineStepProbePipelineItem($code, $probeCode, $probeLabel, $id), $fetch);
    }
    /**
     * Retrieves a Pipeline resource.
     *
     * @param string $id Pipeline identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Workspace|\Psr\Http\Message\ResponseInterface
     */
    public function apiPipelinesWorkspaceGetSubresourcePipelineSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiPipelinesWorkspaceGetSubresourcePipelineSubresource($id), $fetch);
    }
    /**
     * Retrieves the collection of Pipeline resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     *     @var string $code 
     *     @var array $code[] 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\PipelineRead[]|\Psr\Http\Message\ResponseInterface
     */
    public function getPipelineCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetPipelineCollection($queryParameters), $fetch);
    }
    /**
     * Declares a docker pipeline
     *
     * @param \Gyroscops\Api\Model\PipelineDeclarePipelineCommandInputJsonld|\Gyroscops\Api\Model\PipelineDeclarePipelineCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\DeclarePipelinePipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\DeclarePipelinePipelineCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function declarePipelinePipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeclarePipelinePipelineCollection($requestBody), $fetch);
    }
    /**
     * Adds PSR4 autoload composer to a pipeline
     *
     * @param \Gyroscops\Api\Model\PipelineAddPipelineComposerPSR4AutoloadCommandInputJsonld|\Gyroscops\Api\Model\PipelineAddPipelineComposerPSR4AutoloadCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\AddComposerPipelinePipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\AddComposerPipelinePipelineCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addComposerPipelinePipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\AddComposerPipelinePipelineCollection($requestBody), $fetch);
    }
    /**
     * Retrieves the collection of PipelineCompilation resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\PipelineCompilation[]|\Psr\Http\Message\ResponseInterface
     */
    public function getPipelineCompilationCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetPipelineCompilationCollection($queryParameters), $fetch);
    }
    /**
     * Creates a pipeline compilation
     *
     * @param \Gyroscops\Api\Model\PipelineCompilePipelineCommandInputJsonld|\Gyroscops\Api\Model\PipelineCompilePipelineCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\PipelineCompilationPipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PipelineCompilationPipelineCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function pipelineCompilationPipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PipelineCompilationPipelineCollection($requestBody), $fetch);
    }
    /**
     * Adds a step after another one in a pipeline
     *
     * @param \Gyroscops\Api\Model\PipelineAddAfterPipelineStepCommandInputJsonld|\Gyroscops\Api\Model\PipelineAddAfterPipelineStepCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\AddAfterPipelineStepPipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\AddAfterPipelineStepPipelineCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addAfterPipelineStepPipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\AddAfterPipelineStepPipelineCollection($requestBody), $fetch);
    }
    /**
     * Adds a step before another one in a pipeline
     *
     * @param \Gyroscops\Api\Model\PipelineAddBeforePipelineStepCommandInputJsonld|\Gyroscops\Api\Model\PipelineAddBeforePipelineStepCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\AddBeforePipelineStepPipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\AddBeforePipelineStepPipelineCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addBeforePipelineStepPipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\AddBeforePipelineStepPipelineCollection($requestBody), $fetch);
    }
    /**
     * Appends a step to a pipeline
     *
     * @param \Gyroscops\Api\Model\PipelineAppendPipelineStepCommandInputJsonld|\Gyroscops\Api\Model\PipelineAppendPipelineStepCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\AppendPipelineStepPipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\AppendPipelineStepPipelineCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function appendPipelineStepPipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\AppendPipelineStepPipelineCollection($requestBody), $fetch);
    }
    /**
     * Moves a step after another one in a pipeline
     *
     * @param \Gyroscops\Api\Model\PipelineMoveAfterPipelineStepCommandInputJsonld|\Gyroscops\Api\Model\PipelineMoveAfterPipelineStepCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\MoveAfterPipelineStepPipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\MoveAfterPipelineStepPipelineCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function moveAfterPipelineStepPipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\MoveAfterPipelineStepPipelineCollection($requestBody), $fetch);
    }
    /**
     * Moves a step before another one in a pipeline
     *
     * @param \Gyroscops\Api\Model\PipelineMoveBeforePipelineStepCommandInputJsonld|\Gyroscops\Api\Model\PipelineMoveBeforePipelineStepCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\MoveBeforePipelineStepPipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\MoveBeforePipelineStepPipelineCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function moveBeforePipelineStepPipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\MoveBeforePipelineStepPipelineCollection($requestBody), $fetch);
    }
    /**
     * Adds a probe to a step
     *
     * @param \Gyroscops\Api\Model\PipelineAddPipelineStepProbCommandInputJsonld|\Gyroscops\Api\Model\PipelineAddPipelineStepProbCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\AddPipelineStepProbePipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\AddPipelineStepProbePipelineCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function addPipelineStepProbePipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\AddPipelineStepProbePipelineCollection($requestBody), $fetch);
    }
    /**
     * Reorganizes the steps of a pipeline according to a given order
     *
     * @param \Gyroscops\Api\Model\PipelineReorderPipelineStepsCommandInputJsonld|\Gyroscops\Api\Model\PipelineReorderPipelineStepsCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\ReorderPipelineStepsPipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ReorderPipelineStepsPipelineCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function reorderPipelineStepsPipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ReorderPipelineStepsPipelineCollection($requestBody), $fetch);
    }
    /**
     * Replaces a step by another one in a pipeline
     *
     * @param \Gyroscops\Api\Model\PipelineReplacePipelineStepCommandInputJsonld|\Gyroscops\Api\Model\PipelineReplacePipelineStepCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\ReplacePipelineStepPipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ReplacePipelineStepPipelineCollectionUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function replacePipelineStepPipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ReplacePipelineStepPipelineCollection($requestBody), $fetch);
    }
    /**
     * Schedule a pipeline execution immediately
     *
     * @param \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleImmediateCommandInputJsonld|\Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleImmediateCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\ScheduleImmediateScheduleCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ScheduleImmediateScheduleCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleImmediateCommand|\Psr\Http\Message\ResponseInterface
     */
    public function scheduleImmediateScheduleCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ScheduleImmediateScheduleCollection($requestBody), $fetch);
    }
    /**
     * Schedule an immediate pipeline execution
     *
     * @param \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleOnceCommandInputJsonld|\Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleOnceCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\ScheduleOnceScheduleCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ScheduleOnceScheduleCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleOnceCommand|\Psr\Http\Message\ResponseInterface
     */
    public function scheduleOnceScheduleCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ScheduleOnceScheduleCollection($requestBody), $fetch);
    }
    /**
     * Schedule a recurring pipeline execution
     *
     * @param \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleTimesCommandInputJsonld|\Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleTimesCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\ScheduleTimesScheduleCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ScheduleTimesScheduleCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleTimesCommand|\Psr\Http\Message\ResponseInterface
     */
    public function scheduleTimesScheduleCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ScheduleTimesScheduleCollection($requestBody), $fetch);
    }
    /**
     * Schedule a delayed pipeline execution
     *
     * @param \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleUntilCommandInputJsonld|\Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleUntilCommandInput $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\ScheduleUntilScheduleCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ScheduleUntilScheduleCollectionUnprocessableEntityException
     *
     * @return null|\Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleUntilCommand|\Psr\Http\Message\ResponseInterface
     */
    public function scheduleUntilScheduleCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ScheduleUntilScheduleCollection($requestBody), $fetch);
    }
    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetScheduleItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\Schedule|\Psr\Http\Message\ResponseInterface
     */
    public function getScheduleItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetScheduleItem($id), $fetch);
    }
    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id Schedule identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\ExecutionRead[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiSchedulesExecutionsGetSubresourceScheduleSubresource(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesExecutionsGetSubresourceScheduleSubresource($id, $queryParameters), $fetch);
    }
    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id Schedule identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface
     */
    public function apiSchedulesOrganizationGetSubresourceScheduleSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesOrganizationGetSubresourceScheduleSubresource($id), $fetch);
    }
    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id Schedule identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function apiSchedulesOwnerGetSubresourceScheduleSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesOwnerGetSubresourceScheduleSubresource($id), $fetch);
    }
    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id Schedule identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\PipelineRead|\Psr\Http\Message\ResponseInterface
     */
    public function apiSchedulesPipelineGetSubresourceScheduleSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesPipelineGetSubresourceScheduleSubresource($id), $fetch);
    }
    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id Schedule identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\WorkflowRead|\Psr\Http\Message\ResponseInterface
     */
    public function apiSchedulesWorkflowGetSubresourceScheduleSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesWorkflowGetSubresourceScheduleSubresource($id), $fetch);
    }
    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id Schedule identifier
     * @param string $workflow Workflow identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\WorkflowJobRead[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiSchedulesWorkflowJobsGetSubresourceScheduleSubresource(string $id, string $workflow, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesWorkflowJobsGetSubresourceScheduleSubresource($id, $workflow, $queryParameters), $fetch);
    }
    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id Schedule identifier
     * @param string $workflow Workflow identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface
     */
    public function apiSchedulesWorkflowOrganizationGetSubresourceScheduleSubresource(string $id, string $workflow, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesWorkflowOrganizationGetSubresourceScheduleSubresource($id, $workflow), $fetch);
    }
    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id Schedule identifier
     * @param string $workflow Workflow identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function apiSchedulesWorkflowOwnerGetSubresourceScheduleSubresource(string $id, string $workflow, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesWorkflowOwnerGetSubresourceScheduleSubresource($id, $workflow), $fetch);
    }
    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id Schedule identifier
     * @param string $workflow Workflow identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Workspace|\Psr\Http\Message\ResponseInterface
     */
    public function apiSchedulesWorkflowWorkspaceGetSubresourceScheduleSubresource(string $id, string $workflow, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesWorkflowWorkspaceGetSubresourceScheduleSubresource($id, $workflow), $fetch);
    }
    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id Schedule identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Workspace|\Psr\Http\Message\ResponseInterface
     */
    public function apiSchedulesWorkspaceGetSubresourceScheduleSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesWorkspaceGetSubresourceScheduleSubresource($id), $fetch);
    }
    /**
     * Retrieves the collection of Schedule resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Schedule[]|\Psr\Http\Message\ResponseInterface
     */
    public function getScheduleCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetScheduleCollection($queryParameters), $fetch);
    }
    /**
     * Retrieves a WorkflowJobAction resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetWorkflowJobActionItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\WorkflowJobAction|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkflowJobActionItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetWorkflowJobActionItem($id), $fetch);
    }
    /**
     * Retrieves a WorkflowJob resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetWorkflowJobItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\WorkflowJobRead|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkflowJobItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetWorkflowJobItem($id), $fetch);
    }
    /**
     * Retrieves a WorkflowJobPipeline resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetWorkflowJobPipelineItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\WorkflowJobPipeline|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkflowJobPipelineItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetWorkflowJobPipelineItem($id), $fetch);
    }
    /**
     * Retrieves a Workflow resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetWorkflowItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\WorkflowRead|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkflowItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetWorkflowItem($id), $fetch);
    }
    /**
     * Retrieves a Workflow resource.
     *
     * @param string $id Workflow identifier
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\WorkflowJobRead[]|\Psr\Http\Message\ResponseInterface
     */
    public function apiWorkflowsJobsGetSubresourceWorkflowSubresource(string $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiWorkflowsJobsGetSubresourceWorkflowSubresource($id, $queryParameters), $fetch);
    }
    /**
     * Retrieves a Workflow resource.
     *
     * @param string $id Workflow identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface
     */
    public function apiWorkflowsOrganizationGetSubresourceWorkflowSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiWorkflowsOrganizationGetSubresourceWorkflowSubresource($id), $fetch);
    }
    /**
     * Retrieves a Workflow resource.
     *
     * @param string $id Workflow identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function apiWorkflowsOwnerGetSubresourceWorkflowSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiWorkflowsOwnerGetSubresourceWorkflowSubresource($id), $fetch);
    }
    /**
     * Retrieves a Workflow resource.
     *
     * @param string $id Workflow identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\Workspace|\Psr\Http\Message\ResponseInterface
     */
    public function apiWorkflowsWorkspaceGetSubresourceWorkflowSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiWorkflowsWorkspaceGetSubresourceWorkflowSubresource($id), $fetch);
    }
    /**
     * Retrieves the collection of Workflow resources.
     *
     * @param array $queryParameters {
     *     @var int $page The collection page number
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Gyroscops\Api\Model\WorkflowRead[]|\Psr\Http\Message\ResponseInterface
     */
    public function getWorkflowCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetWorkflowCollection($queryParameters), $fetch);
    }
    /**
     * Retrieves a PipelineCompilation resource.
     *
     * @param string $id Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Gyroscops\Api\Exception\GetPipelineCompilationItemNotFoundException
     *
     * @return null|\Gyroscops\Api\Model\PipelineCompilation|\Psr\Http\Message\ResponseInterface
     */
    public function getPipelineCompilationItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetPipelineCompilationItem($id), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Gyroscops\Api\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}