<?php

declare(strict_types=1);

namespace Gyroscops\Api;

class Client extends \Gyroscops\Api\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\User[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function meUserCollection(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\MeUserCollection(), $fetch);
    }

    /**
     * Retrieves the collection of Organization resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Organization[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getOrganizationCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetOrganizationCollection($queryParameters), $fetch);
    }

    /**
     * Creates a Organization resource.
     *
     * @param \Gyroscops\Api\Model\OrganizationJsonld|\Gyroscops\Api\Model\Organization $requestBody
     * @param string                                                                    $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\PostOrganizationCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostOrganizationCollectionUnprocessableEntityException
     *
     * @return \Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface|null
     */
    public function postOrganizationCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostOrganizationCollection($requestBody), $fetch);
    }

    /**
     * Removes the Organization resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\DeleteOrganizationItemNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteOrganizationItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeleteOrganizationItem($id), $fetch);
    }

    /**
     * Retrieves a Organization resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetOrganizationItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface|null
     */
    public function getOrganizationItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetOrganizationItem($id), $fetch);
    }

    /**
     * Updates the Organization resource.
     *
     * @param string                            $id          Resource identifier
     * @param \Gyroscops\Api\Model\Organization $requestBody
     * @param string                            $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\PatchOrganizationItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PatchOrganizationItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PatchOrganizationItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface|null
     */
    public function patchOrganizationItem(string $id, Model\Organization $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PatchOrganizationItem($id, $requestBody), $fetch);
    }

    /**
     * Replaces the Organization resource.
     *
     * @param string                                                                    $id          Resource identifier
     * @param \Gyroscops\Api\Model\OrganizationJsonld|\Gyroscops\Api\Model\Organization $requestBody
     * @param string                                                                    $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\PutOrganizationItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PutOrganizationItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PutOrganizationItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface|null
     */
    public function putOrganizationItem(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PutOrganizationItem($id, $requestBody), $fetch);
    }

    /**
     * Retrieves a Organization resource.
     *
     * @param string $id              Organization identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\UserAuthorization[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiOrganizationsAuthorizationsGetSubresourceOrganizationSubresource(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiOrganizationsAuthorizationsGetSubresourceOrganizationSubresource($id, $queryParameters), $fetch);
    }

    /**
     * Retrieves a Organization resource.
     *
     * @param string $id              Organization identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\User[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiOrganizationsExternalCollaboratorsGetSubresourceOrganizationSubresource(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiOrganizationsExternalCollaboratorsGetSubresourceOrganizationSubresource($id, $queryParameters), $fetch);
    }

    /**
     * Retrieves a Organization resource.
     *
     * @param string $id              Organization identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Project[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiOrganizationsProjectsGetSubresourceOrganizationSubresource(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiOrganizationsProjectsGetSubresourceOrganizationSubresource($id, $queryParameters), $fetch);
    }

    /**
     * Retrieves a Organization resource.
     *
     * @param string $id              Organization identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\User[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiOrganizationsUsersGetSubresourceOrganizationSubresource(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiOrganizationsUsersGetSubresourceOrganizationSubresource($id, $queryParameters), $fetch);
    }

    /**
     * Retrieves the collection of Project resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Project[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getProjectCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetProjectCollection($queryParameters), $fetch);
    }

    /**
     * Creates a Project resource.
     *
     * @param \Gyroscops\Api\Model\ProjectJsonld|\Gyroscops\Api\Model\Project $requestBody
     * @param string                                                          $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\PostProjectCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostProjectCollectionUnprocessableEntityException
     *
     * @return \Gyroscops\Api\Model\Project|\Psr\Http\Message\ResponseInterface|null
     */
    public function postProjectCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostProjectCollection($requestBody), $fetch);
    }

    /**
     * Removes the Project resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\DeleteProjectItemNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteProjectItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeleteProjectItem($id), $fetch);
    }

    /**
     * Retrieves a Project resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetProjectItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\Project|\Psr\Http\Message\ResponseInterface|null
     */
    public function getProjectItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetProjectItem($id), $fetch);
    }

    /**
     * Updates the Project resource.
     *
     * @param string                       $id          Resource identifier
     * @param \Gyroscops\Api\Model\Project $requestBody
     * @param string                       $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\PatchProjectItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PatchProjectItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PatchProjectItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\Project|\Psr\Http\Message\ResponseInterface|null
     */
    public function patchProjectItem(string $id, Model\Project $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PatchProjectItem($id, $requestBody), $fetch);
    }

    /**
     * Replaces the Project resource.
     *
     * @param string                                                          $id          Resource identifier
     * @param \Gyroscops\Api\Model\ProjectJsonld|\Gyroscops\Api\Model\Project $requestBody
     * @param string                                                          $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\PutProjectItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PutProjectItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PutProjectItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\Project|\Psr\Http\Message\ResponseInterface|null
     */
    public function putProjectItem(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PutProjectItem($id, $requestBody), $fetch);
    }

    /**
     * Retrieves a Project resource.
     *
     * @param string $id              Project identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\UserAuthorization[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiProjectsAuthorizationsGetSubresourceProjectSubresource(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiProjectsAuthorizationsGetSubresourceProjectSubresource($id, $queryParameters), $fetch);
    }

    /**
     * Retrieves a Project resource.
     *
     * @param string $id              Project identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\User[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiProjectsUsersGetSubresourceProjectSubresource(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiProjectsUsersGetSubresourceProjectSubresource($id, $queryParameters), $fetch);
    }

    /**
     * Retrieves the collection of UserAuthorization resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\UserAuthorization[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getUserAuthorizationCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetUserAuthorizationCollection($queryParameters), $fetch);
    }

    /**
     * Creates a UserAuthorization resource.
     *
     * @param \Gyroscops\Api\Model\UserAuthorizationJsonld|\Gyroscops\Api\Model\UserAuthorization $requestBody
     * @param string                                                                              $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\PostUserAuthorizationCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostUserAuthorizationCollectionUnprocessableEntityException
     *
     * @return \Gyroscops\Api\Model\UserAuthorization|\Psr\Http\Message\ResponseInterface|null
     */
    public function postUserAuthorizationCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostUserAuthorizationCollection($requestBody), $fetch);
    }

    /**
     * Removes the UserAuthorization resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\DeleteUserAuthorizationItemNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteUserAuthorizationItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeleteUserAuthorizationItem($id), $fetch);
    }

    /**
     * Retrieves a UserAuthorization resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetUserAuthorizationItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\UserAuthorization|\Psr\Http\Message\ResponseInterface|null
     */
    public function getUserAuthorizationItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetUserAuthorizationItem($id), $fetch);
    }

    /**
     * Updates the UserAuthorization resource.
     *
     * @param string                                 $id          Resource identifier
     * @param \Gyroscops\Api\Model\UserAuthorization $requestBody
     * @param string                                 $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\PatchUserAuthorizationItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PatchUserAuthorizationItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PatchUserAuthorizationItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\UserAuthorization|\Psr\Http\Message\ResponseInterface|null
     */
    public function patchUserAuthorizationItem(string $id, Model\UserAuthorization $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PatchUserAuthorizationItem($id, $requestBody), $fetch);
    }

    /**
     * Replaces the UserAuthorization resource.
     *
     * @param string                                                                              $id          Resource identifier
     * @param \Gyroscops\Api\Model\UserAuthorizationJsonld|\Gyroscops\Api\Model\UserAuthorization $requestBody
     * @param string                                                                              $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\PutUserAuthorizationItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PutUserAuthorizationItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PutUserAuthorizationItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\UserAuthorization|\Psr\Http\Message\ResponseInterface|null
     */
    public function putUserAuthorizationItem(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PutUserAuthorizationItem($id, $requestBody), $fetch);
    }

    /**
     * Retrieves the collection of User resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\User[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getUserCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetUserCollection($queryParameters), $fetch);
    }

    /**
     * Creates a User resource.
     *
     * @param \Gyroscops\Api\Model\UserJsonld|\Gyroscops\Api\Model\User $requestBody
     * @param string                                                    $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\PostUserCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostUserCollectionUnprocessableEntityException
     *
     * @return \Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function postUserCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostUserCollection($requestBody), $fetch);
    }

    /**
     * Removes the User resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\DeleteUserItemNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteUserItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeleteUserItem($id), $fetch);
    }

    /**
     * Retrieves a User resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetUserItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function getUserItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetUserItem($id), $fetch);
    }

    /**
     * Updates the User resource.
     *
     * @param string                    $id          Resource identifier
     * @param \Gyroscops\Api\Model\User $requestBody
     * @param string                    $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\PatchUserItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PatchUserItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PatchUserItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function patchUserItem(string $id, Model\User $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PatchUserItem($id, $requestBody), $fetch);
    }

    /**
     * Replaces the User resource.
     *
     * @param string                                                    $id          Resource identifier
     * @param \Gyroscops\Api\Model\UserJsonld|\Gyroscops\Api\Model\User $requestBody
     * @param string                                                    $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\PutUserItemBadRequestException
     * @throws \Gyroscops\Api\Exception\PutUserItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\PutUserItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function putUserItem(string $id, $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PutUserItem($id, $requestBody), $fetch);
    }

    /**
     * Retrieves a User resource.
     *
     * @param string $id              User identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\UserAuthorization[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiUsersAuthorizationsGetSubresourceUserSubresource(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiUsersAuthorizationsGetSubresourceUserSubresource($id, $queryParameters), $fetch);
    }

    /**
     * Updates the User resource.
     *
     * @param string                                           $id          Resource identifier
     * @param \Gyroscops\Api\Model\UserUserChangePasswordInput $requestBody
     * @param string                                           $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\ChangePasswordUserItemBadRequestException
     * @throws \Gyroscops\Api\Exception\ChangePasswordUserItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\ChangePasswordUserItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function changePasswordUserItem(string $id, Model\UserUserChangePasswordInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ChangePasswordUserItem($id, $requestBody), $fetch);
    }

    /**
     * @param \Gyroscops\Api\Model\Credentials|null $requestBody
     * @param string                                $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Token|\Psr\Http\Message\ResponseInterface|null
     */
    public function postCredentialsItem(?Model\Credentials $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostCredentialsItem($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\PostForgotPasswordBadRequestException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function postForgotPassword(?\stdClass $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostForgotPassword($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetForgotPasswordNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function getForgotPassword(string $token, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetForgotPassword($token), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\PostForgotPasswordTokenBadRequestException
     * @throws \Gyroscops\Api\Exception\PostForgotPasswordTokenNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function postForgotPasswordToken(string $token, ?\stdClass $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostForgotPasswordToken($token, $requestBody), $fetch);
    }

    /**
     * Retrieves the collection of ReferralCode resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ReferralCodeReferralCodeRead[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getReferralCodeCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetReferralCodeCollection($queryParameters), $fetch);
    }

    /**
     * Creates a ReferralCode resource.
     *
     * @param \Gyroscops\Api\Model\ReferralCodeJsonldReferralCodeWrite|\Gyroscops\Api\Model\ReferralCodeReferralCodeWrite $requestBody
     * @param string                                                                                                      $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\PostReferralCodeCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostReferralCodeCollectionUnprocessableEntityException
     *
     * @return \Gyroscops\Api\Model\ReferralCodeReferralCodeRead|\Psr\Http\Message\ResponseInterface|null
     */
    public function postReferralCodeCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostReferralCodeCollection($requestBody), $fetch);
    }

    /**
     * Removes the ReferralCode resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\DeleteReferralCodeItemNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deleteReferralCodeItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeleteReferralCodeItem($id), $fetch);
    }

    /**
     * Retrieves a ReferralCode resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetReferralCodeItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\ReferralCodeReferralCodeRead|\Psr\Http\Message\ResponseInterface|null
     */
    public function getReferralCodeItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetReferralCodeItem($id), $fetch);
    }

    /**
     * Retrieves the collection of ReferralRequest resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ReferralRequestReferralRequestRead[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getReferralRequestCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetReferralRequestCollection($queryParameters), $fetch);
    }

    /**
     * Creates a ReferralRequest resource.
     *
     * @param \Gyroscops\Api\Model\ReferralRequestReferralRequestInputJsonld|\Gyroscops\Api\Model\ReferralRequestReferralRequestInput $requestBody
     * @param string                                                                                                                  $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\PostReferralRequestCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PostReferralRequestCollectionUnprocessableEntityException
     *
     * @return \Gyroscops\Api\Model\ReferralRequestReferralRequestRead|\Psr\Http\Message\ResponseInterface|null
     */
    public function postReferralRequestCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PostReferralRequestCollection($requestBody), $fetch);
    }

    /**
     * Retrieves a ReferralRequest resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetReferralRequestItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\ReferralRequestReferralRequestRead|\Psr\Http\Message\ResponseInterface|null
     */
    public function getReferralRequestItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetReferralRequestItem($id), $fetch);
    }

    /**
     * Accepts a referral request.
     *
     * @param string $id          Resource identifier
     * @param null   $requestBody
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\AcceptReferralRequestReferralRequestItemBadRequestException
     * @throws \Gyroscops\Api\Exception\AcceptReferralRequestReferralRequestItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\AcceptReferralRequestReferralRequestItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\ReferralRequestReferralRequestRead|\Psr\Http\Message\ResponseInterface|null
     */
    public function acceptReferralRequestReferralRequestItem(string $id, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\AcceptReferralRequestReferralRequestItem($id, $requestBody), $fetch);
    }

    /**
     * Rejects a referral request.
     *
     * @param string $id          Resource identifier
     * @param null   $requestBody
     * @param string $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\RejectReferralRequestReferralRequestItemBadRequestException
     * @throws \Gyroscops\Api\Exception\RejectReferralRequestReferralRequestItemUnprocessableEntityException
     * @throws \Gyroscops\Api\Exception\RejectReferralRequestReferralRequestItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\ReferralRequestReferralRequestRead|\Psr\Http\Message\ResponseInterface|null
     */
    public function rejectReferralRequestReferralRequestItem(string $id, $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\RejectReferralRequestReferralRequestItem($id, $requestBody), $fetch);
    }

    /**
     * Retrieves a Action resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetActionItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\ActionRead|\Psr\Http\Message\ResponseInterface|null
     */
    public function getActionItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetActionItem($id), $fetch);
    }

    /**
     * Retrieves the collection of Action resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ActionRead[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getActionCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetActionCollection($queryParameters), $fetch);
    }

    /**
     * Retrieves a Action resource.
     *
     * @param string $id    Action identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiActionsOrganizationGetSubresourceActionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiActionsOrganizationGetSubresourceActionSubresource($id), $fetch);
    }

    /**
     * Retrieves a Action resource.
     *
     * @param string $id    Action identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiActionsOwnerGetSubresourceActionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiActionsOwnerGetSubresourceActionSubresource($id), $fetch);
    }

    /**
     * Retrieves a Action resource.
     *
     * @param string $id    Action identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Project|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiActionsProjectGetSubresourceActionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiActionsProjectGetSubresourceActionSubresource($id), $fetch);
    }

    /**
     * Retrieves the collection of ExecutionPipelineJob resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionPipelineJob[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getExecutionPipelineJobCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionPipelineJobCollection($queryParameters), $fetch);
    }

    /**
     * Retrieves a ExecutionPipelineJob resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetExecutionPipelineJobItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\ExecutionPipelineJob|\Psr\Http\Message\ResponseInterface|null
     */
    public function getExecutionPipelineJobItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionPipelineJobItem($id), $fetch);
    }

    /**
     * Retrieves a ExecutionPipelineJob resource.
     *
     * @param string $id              ExecutionPipelineJob identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionPipelineStep[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiExecutionPipelineJobsStepsGetSubresourceExecutionPipelineJobSubresource(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionPipelineJobsStepsGetSubresourceExecutionPipelineJobSubresource($id, $queryParameters), $fetch);
    }

    /**
     * Retrieves a ExecutionAction resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetExecutionActionItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\ExecutionAction|\Psr\Http\Message\ResponseInterface|null
     */
    public function getExecutionActionItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionActionItem($id), $fetch);
    }

    /**
     * Retrieves the collection of ExecutionPipeline resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionPipeline[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getExecutionPipelineCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionPipelineCollection($queryParameters), $fetch);
    }

    /**
     * Retrieves a ExecutionPipeline resource.
     *
     * @param string $id              ExecutionPipeline identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionPipelineStep[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiExecutionPipelinesStepsGetSubresourceExecutionPipelineSubresource(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionPipelinesStepsGetSubresourceExecutionPipelineSubresource($id, $queryParameters), $fetch);
    }

    /**
     * Retrieves the collection of ExecutionWorkflow resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionWorkflow[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getExecutionWorkflowCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionWorkflowCollection($queryParameters), $fetch);
    }

    /**
     * Retrieves a ExecutionWorkflow resource.
     *
     * @param string $id              ExecutionWorkflow identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionWorkflowJob[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiExecutionWorkflowsJobsGetSubresourceExecutionWorkflowSubresource(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionWorkflowsJobsGetSubresourceExecutionWorkflowSubresource($id, $queryParameters), $fetch);
    }

    /**
     * Retrieves a ExecutionWorkflow resource.
     *
     * @param string $id    ExecutionWorkflow identifier
     * @param string $jobs  ExecutionWorkflowJob identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionWorkflowJobAction|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiExecutionWorkflowsJobsActionGetSubresourceExecutionWorkflowSubresource(string $id, string $jobs, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionWorkflowsJobsActionGetSubresourceExecutionWorkflowSubresource($id, $jobs), $fetch);
    }

    /**
     * Retrieves a ExecutionWorkflow resource.
     *
     * @param string $id    ExecutionWorkflow identifier
     * @param string $jobs  ExecutionWorkflowJob identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionPipelineJob|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiExecutionWorkflowsJobsPipelineGetSubresourceExecutionWorkflowSubresource(string $id, string $jobs, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionWorkflowsJobsPipelineGetSubresourceExecutionWorkflowSubresource($id, $jobs), $fetch);
    }

    /**
     * Retrieves a ExecutionPipelineStep resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetExecutionPipelineStepItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\ExecutionPipelineStep|\Psr\Http\Message\ResponseInterface|null
     */
    public function getExecutionPipelineStepItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionPipelineStepItem($id), $fetch);
    }

    /**
     * Retrieves a ExecutionPipeline resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetExecutionPipelineItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\ExecutionPipeline|\Psr\Http\Message\ResponseInterface|null
     */
    public function getExecutionPipelineItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionPipelineItem($id), $fetch);
    }

    /**
     * Retrieves a ExecutionWorkflowJobAction resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetExecutionWorkflowJobActionItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\ExecutionWorkflowJobAction|\Psr\Http\Message\ResponseInterface|null
     */
    public function getExecutionWorkflowJobActionItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionWorkflowJobActionItem($id), $fetch);
    }

    /**
     * Retrieves the collection of ExecutionWorkflowJob resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionWorkflowJob[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getExecutionWorkflowJobCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionWorkflowJobCollection($queryParameters), $fetch);
    }

    /**
     * Retrieves a ExecutionWorkflowJob resource.
     *
     * @param string $id    ExecutionWorkflowJob identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionWorkflowJobAction|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiExecutionWorkflowJobsActionGetSubresourceExecutionWorkflowJobSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionWorkflowJobsActionGetSubresourceExecutionWorkflowJobSubresource($id), $fetch);
    }

    /**
     * Retrieves a ExecutionWorkflowJob resource.
     *
     * @param string $id    ExecutionWorkflowJob identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionPipelineJob|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiExecutionWorkflowJobsPipelineGetSubresourceExecutionWorkflowJobSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionWorkflowJobsPipelineGetSubresourceExecutionWorkflowJobSubresource($id), $fetch);
    }

    /**
     * Retrieves a ExecutionWorkflowJob resource.
     *
     * @param string $id              ExecutionWorkflowJob identifier
     * @param string $pipeline        ExecutionPipelineJob identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionPipelineStep[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiExecutionWorkflowJobsPipelineStepsGetSubresourceExecutionWorkflowJobSubresource(string $id, string $pipeline, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionWorkflowJobsPipelineStepsGetSubresourceExecutionWorkflowJobSubresource($id, $pipeline, $queryParameters), $fetch);
    }

    /**
     * Retrieves a ExecutionWorkflowJob resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetExecutionWorkflowJobItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\ExecutionWorkflowJob|\Psr\Http\Message\ResponseInterface|null
     */
    public function getExecutionWorkflowJobItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionWorkflowJobItem($id), $fetch);
    }

    /**
     * Retrieves a ExecutionWorkflow resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetExecutionWorkflowItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\ExecutionWorkflow|\Psr\Http\Message\ResponseInterface|null
     */
    public function getExecutionWorkflowItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionWorkflowItem($id), $fetch);
    }

    /**
     * Retrieves a Execution resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetExecutionItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\ExecutionRead|\Psr\Http\Message\ResponseInterface|null
     */
    public function getExecutionItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionItem($id), $fetch);
    }

    /**
     * Retrieves a Execution resource.
     *
     * @param string $id    Execution identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionAction|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiExecutionsActionGetSubresourceExecutionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionsActionGetSubresourceExecutionSubresource($id), $fetch);
    }

    /**
     * Retrieves a Execution resource.
     *
     * @param string $id    Execution identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionPipeline|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiExecutionsPipelineGetSubresourceExecutionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionsPipelineGetSubresourceExecutionSubresource($id), $fetch);
    }

    /**
     * Retrieves a Execution resource.
     *
     * @param string $id    Execution identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionWorkflow|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiExecutionsWorkflowGetSubresourceExecutionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionsWorkflowGetSubresourceExecutionSubresource($id), $fetch);
    }

    /**
     * Retrieves a Execution resource.
     *
     * @param string $id              Execution identifier
     * @param string $workflow        ExecutionWorkflow identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionWorkflowJob[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiExecutionsWorkflowJobsGetSubresourceExecutionSubresource(string $id, string $workflow, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionsWorkflowJobsGetSubresourceExecutionSubresource($id, $workflow, $queryParameters), $fetch);
    }

    /**
     * Retrieves the collection of Execution resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionRead[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getExecutionCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetExecutionCollection($queryParameters), $fetch);
    }

    /**
     * Declares a pipeline execution.
     *
     * @param \Gyroscops\Api\Model\ExecutionDeclarePipelineExecutionCommandInputJsonld|\Gyroscops\Api\Model\ExecutionDeclarePipelineExecutionCommandInput $requestBody
     * @param string                                                                                                                                      $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\DeclareExecutionExecutionCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\DeclareExecutionExecutionCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function declareExecutionExecutionCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeclareExecutionExecutionCollection($requestBody), $fetch);
    }

    /**
     * Finishes a pipeline execution.
     *
     * @param \Gyroscops\Api\Model\ExecutionFinishPipelineExecutionCommandInputJsonld|\Gyroscops\Api\Model\ExecutionFinishPipelineExecutionCommandInput $requestBody
     * @param string                                                                                                                                    $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\FinishExecutionExecutionCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\FinishExecutionExecutionCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function finishExecutionExecutionCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\FinishExecutionExecutionCollection($requestBody), $fetch);
    }

    /**
     * Interrupts a pipeline execution.
     *
     * @param \Gyroscops\Api\Model\ExecutionInterruptPipelineExecutionCommandInputJsonld|\Gyroscops\Api\Model\ExecutionInterruptPipelineExecutionCommandInput $requestBody
     * @param string                                                                                                                                          $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\InterruptExecutionExecutionCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\InterruptExecutionExecutionCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function interruptExecutionExecutionCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\InterruptExecutionExecutionCollection($requestBody), $fetch);
    }

    /**
     * Resumes a pipeline execution.
     *
     * @param \Gyroscops\Api\Model\ExecutionResumePipelineExecutionCommandInputJsonld|\Gyroscops\Api\Model\ExecutionResumePipelineExecutionCommandInput $requestBody
     * @param string                                                                                                                                    $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\ResumeExecutionExecutionCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ResumeExecutionExecutionCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function resumeExecutionExecutionCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ResumeExecutionExecutionCollection($requestBody), $fetch);
    }

    /**
     * Starts a pipeline execution.
     *
     * @param \Gyroscops\Api\Model\ExecutionStartPipelineExecutionCommandInputJsonld|\Gyroscops\Api\Model\ExecutionStartPipelineExecutionCommandInput $requestBody
     * @param string                                                                                                                                  $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\StartExecutionExecutionCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\StartExecutionExecutionCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function startExecutionExecutionCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\StartExecutionExecutionCollection($requestBody), $fetch);
    }

    /**
     * Terminates a pipeline execution.
     *
     * @param \Gyroscops\Api\Model\ExecutionTerminatePipelineExecutionCommandInputJsonld|\Gyroscops\Api\Model\ExecutionTerminatePipelineExecutionCommandInput $requestBody
     * @param string                                                                                                                                          $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\TerminateExecutionExecutionCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\TerminateExecutionExecutionCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function terminateExecutionExecutionCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\TerminateExecutionExecutionCollection($requestBody), $fetch);
    }

    /**
     * Updates a pipeline execution state.
     *
     * @param \Gyroscops\Api\Model\ExecutionUpdatePipelineExecutionStateCommandInputJsonld|\Gyroscops\Api\Model\ExecutionUpdatePipelineExecutionStateCommandInput $requestBody
     * @param string                                                                                                                                              $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\UpdateExecutionStateExecutionCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\UpdateExecutionStateExecutionCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function updateExecutionStateExecutionCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\UpdateExecutionStateExecutionCollection($requestBody), $fetch);
    }

    /**
     * Retrieves a Execution resource.
     *
     * @param string $id    Execution identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiExecutionsOrganizationGetSubresourceExecutionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionsOrganizationGetSubresourceExecutionSubresource($id), $fetch);
    }

    /**
     * Retrieves a Execution resource.
     *
     * @param string $id    Execution identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiExecutionsOwnerGetSubresourceExecutionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionsOwnerGetSubresourceExecutionSubresource($id), $fetch);
    }

    /**
     * Retrieves a Execution resource.
     *
     * @param string $id    Execution identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Project|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiExecutionsProjectGetSubresourceExecutionSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiExecutionsProjectGetSubresourceExecutionSubresource($id), $fetch);
    }

    /**
     * Retrieves the collection of PipelineCompilation resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\PipelineCompilation[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getPipelineCompilationCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetPipelineCompilationCollection($queryParameters), $fetch);
    }

    /**
     * Retrieves a PipelineCompilation resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetPipelineCompilationItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\PipelineCompilation|\Psr\Http\Message\ResponseInterface|null
     */
    public function getPipelineCompilationItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetPipelineCompilationItem($id), $fetch);
    }

    /**
     * Retrieves a PipelineCompilation resource.
     *
     * @param string $id    PipelineCompilation identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiPipelineCompilationsOrganizationGetSubresourcePipelineCompilationSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiPipelineCompilationsOrganizationGetSubresourcePipelineCompilationSubresource($id), $fetch);
    }

    /**
     * Retrieves a PipelineCompilation resource.
     *
     * @param string $id    PipelineCompilation identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Project|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiPipelineCompilationsProjectGetSubresourcePipelineCompilationSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiPipelineCompilationsProjectGetSubresourcePipelineCompilationSubresource($id), $fetch);
    }

    /**
     * Retrieves a PipelineCompilation resource.
     *
     * @param string $id    PipelineCompilation identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiPipelineCompilationsUserGetSubresourcePipelineCompilationSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiPipelineCompilationsUserGetSubresourcePipelineCompilationSubresource($id), $fetch);
    }

    /**
     * Retrieves the collection of PipelineStepProbe resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\PipelineStepProbe[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getPipelineStepProbeCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetPipelineStepProbeCollection($queryParameters), $fetch);
    }

    /**
     * Retrieves a PipelineStepProbe resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetPipelineStepProbeItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\PipelineStepProbe|\Psr\Http\Message\ResponseInterface|null
     */
    public function getPipelineStepProbeItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetPipelineStepProbeItem($id), $fetch);
    }

    /**
     * Retrieves a PipelineStep resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetPipelineStepItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\PipelineStep|\Psr\Http\Message\ResponseInterface|null
     */
    public function getPipelineStepItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetPipelineStepItem($id), $fetch);
    }

    /**
     * Retrieves a PipelineStep resource.
     *
     * @param string $id              PipelineStep identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\PipelineStepProbe[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiPipelineStepsProbesGetSubresourcePipelineStepSubresource(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiPipelineStepsProbesGetSubresourcePipelineStepSubresource($id, $queryParameters), $fetch);
    }

    /**
     * Retrieves the collection of PipelineStep resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\PipelineStep[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getPipelineStepCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetPipelineStepCollection($queryParameters), $fetch);
    }

    /**
     * Retrieves a Pipeline resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetPipelineItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\PipelineRead|\Psr\Http\Message\ResponseInterface|null
     */
    public function getPipelineItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetPipelineItem($id), $fetch);
    }

    /**
     * Removes a probe from a step.
     *
     * @param string $code       Step resource code
     * @param string $probeCode  Probe resource code
     * @param string $probeLabel Probe resource code
     * @param string $id         Resource identifier
     * @param string $fetch      Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\RemovePipelineStepProbePipelineItemNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function removePipelineStepProbePipelineItem(string $code, string $probeCode, string $probeLabel, string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\RemovePipelineStepProbePipelineItem($code, $probeCode, $probeLabel, $id), $fetch);
    }

    /**
     * Retrieves the collection of Pipeline resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     *     @var string $code
     *     @var array $code[]
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\PipelineRead[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getPipelineCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetPipelineCollection($queryParameters), $fetch);
    }

    /**
     * Declares a docker pipeline.
     *
     * @param \Gyroscops\Api\Model\PipelineDeclarePipelineCommandInputJsonld|\Gyroscops\Api\Model\PipelineDeclarePipelineCommandInput $requestBody
     * @param string                                                                                                                  $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\DeclarePipelinePipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\DeclarePipelinePipelineCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function declarePipelinePipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeclarePipelinePipelineCollection($requestBody), $fetch);
    }

    /**
     * Adds PSR4 autoload composer to a pipeline.
     *
     * @param \Gyroscops\Api\Model\PipelineAddPipelineComposerPSR4AutoloadCommandInputJsonld|\Gyroscops\Api\Model\PipelineAddPipelineComposerPSR4AutoloadCommandInput $requestBody
     * @param string                                                                                                                                                  $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\AddComposerPipelinePipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\AddComposerPipelinePipelineCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function addComposerPipelinePipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\AddComposerPipelinePipelineCollection($requestBody), $fetch);
    }

    /**
     * Creates a pipeline compilation.
     *
     * @param \Gyroscops\Api\Model\PipelineCompilePipelineCommandInputJsonld|\Gyroscops\Api\Model\PipelineCompilePipelineCommandInput $requestBody
     * @param string                                                                                                                  $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\PipelineCompilationPipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\PipelineCompilationPipelineCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function pipelineCompilationPipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\PipelineCompilationPipelineCollection($requestBody), $fetch);
    }

    /**
     * Adds a step after another one in a pipeline.
     *
     * @param \Gyroscops\Api\Model\PipelineAddAfterPipelineStepCommandInputJsonld|\Gyroscops\Api\Model\PipelineAddAfterPipelineStepCommandInput $requestBody
     * @param string                                                                                                                            $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\AddAfterPipelineStepPipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\AddAfterPipelineStepPipelineCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function addAfterPipelineStepPipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\AddAfterPipelineStepPipelineCollection($requestBody), $fetch);
    }

    /**
     * Adds a step before another one in a pipeline.
     *
     * @param \Gyroscops\Api\Model\PipelineAddBeforePipelineStepCommandInputJsonld|\Gyroscops\Api\Model\PipelineAddBeforePipelineStepCommandInput $requestBody
     * @param string                                                                                                                              $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\AddBeforePipelineStepPipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\AddBeforePipelineStepPipelineCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function addBeforePipelineStepPipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\AddBeforePipelineStepPipelineCollection($requestBody), $fetch);
    }

    /**
     * Appends a step to a pipeline.
     *
     * @param \Gyroscops\Api\Model\PipelineAppendPipelineStepCommandInputJsonld|\Gyroscops\Api\Model\PipelineAppendPipelineStepCommandInput $requestBody
     * @param string                                                                                                                        $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\AppendPipelineStepPipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\AppendPipelineStepPipelineCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function appendPipelineStepPipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\AppendPipelineStepPipelineCollection($requestBody), $fetch);
    }

    /**
     * Moves a step after another one in a pipeline.
     *
     * @param \Gyroscops\Api\Model\PipelineMoveAfterPipelineStepCommandInputJsonld|\Gyroscops\Api\Model\PipelineMoveAfterPipelineStepCommandInput $requestBody
     * @param string                                                                                                                              $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\MoveAfterPipelineStepPipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\MoveAfterPipelineStepPipelineCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function moveAfterPipelineStepPipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\MoveAfterPipelineStepPipelineCollection($requestBody), $fetch);
    }

    /**
     * Moves a step before another one in a pipeline.
     *
     * @param \Gyroscops\Api\Model\PipelineMoveBeforePipelineStepCommandInputJsonld|\Gyroscops\Api\Model\PipelineMoveBeforePipelineStepCommandInput $requestBody
     * @param string                                                                                                                                $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\MoveBeforePipelineStepPipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\MoveBeforePipelineStepPipelineCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function moveBeforePipelineStepPipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\MoveBeforePipelineStepPipelineCollection($requestBody), $fetch);
    }

    /**
     * Adds a probe to a step.
     *
     * @param \Gyroscops\Api\Model\PipelineAddPipelineStepProbCommandInputJsonld|\Gyroscops\Api\Model\PipelineAddPipelineStepProbCommandInput $requestBody
     * @param string                                                                                                                          $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\AddPipelineStepProbePipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\AddPipelineStepProbePipelineCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function addPipelineStepProbePipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\AddPipelineStepProbePipelineCollection($requestBody), $fetch);
    }

    /**
     * Reorganizes the steps of a pipeline according to a given order.
     *
     * @param \Gyroscops\Api\Model\PipelineReorderPipelineStepsCommandInputJsonld|\Gyroscops\Api\Model\PipelineReorderPipelineStepsCommandInput $requestBody
     * @param string                                                                                                                            $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\ReorderPipelineStepsPipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ReorderPipelineStepsPipelineCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function reorderPipelineStepsPipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ReorderPipelineStepsPipelineCollection($requestBody), $fetch);
    }

    /**
     * Replaces a step by another one in a pipeline.
     *
     * @param \Gyroscops\Api\Model\PipelineReplacePipelineStepCommandInputJsonld|\Gyroscops\Api\Model\PipelineReplacePipelineStepCommandInput $requestBody
     * @param string                                                                                                                          $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\ReplacePipelineStepPipelineCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ReplacePipelineStepPipelineCollectionUnprocessableEntityException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function replacePipelineStepPipelineCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ReplacePipelineStepPipelineCollection($requestBody), $fetch);
    }

    /**
     * Deletes a pipeline.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\DeletePipelinePipelineItemNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deletePipelinePipelineItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeletePipelinePipelineItem($id), $fetch);
    }

    /**
     * Retrieves a Pipeline resource.
     *
     * @param string $id              Pipeline identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\PipelineCompilation[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiPipelinesCompilationsGetSubresourcePipelineSubresource(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiPipelinesCompilationsGetSubresourcePipelineSubresource($id, $queryParameters), $fetch);
    }

    /**
     * Retrieves a Pipeline resource.
     *
     * @param string $id    Pipeline identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiPipelinesOrganizationGetSubresourcePipelineSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiPipelinesOrganizationGetSubresourcePipelineSubresource($id), $fetch);
    }

    /**
     * Retrieves a Pipeline resource.
     *
     * @param string $id    Pipeline identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiPipelinesOwnerGetSubresourcePipelineSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiPipelinesOwnerGetSubresourcePipelineSubresource($id), $fetch);
    }

    /**
     * Retrieves a Pipeline resource.
     *
     * @param string $id    Pipeline identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Project|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiPipelinesProjectGetSubresourcePipelineSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiPipelinesProjectGetSubresourcePipelineSubresource($id), $fetch);
    }

    /**
     * Removes a step from a pipeline.
     *
     * @param string $code  Step resource code
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\DeletePipelineStepPipelineItemNotFoundException
     *
     * @return \Psr\Http\Message\ResponseInterface|null
     */
    public function deletePipelineStepPipelineItem(string $code, string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\DeletePipelineStepPipelineItem($code, $id), $fetch);
    }

    /**
     * Schedule a pipeline execution immediately.
     *
     * @param \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleImmediateCommandInputJsonld|\Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleImmediateCommandInput $requestBody
     * @param string                                                                                                                                                    $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\ScheduleImmediateScheduleCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ScheduleImmediateScheduleCollectionUnprocessableEntityException
     *
     * @return \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleImmediateCommand|\Psr\Http\Message\ResponseInterface|null
     */
    public function scheduleImmediateScheduleCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ScheduleImmediateScheduleCollection($requestBody), $fetch);
    }

    /**
     * Schedule an immediate pipeline execution.
     *
     * @param \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleOnceCommandInputJsonld|\Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleOnceCommandInput $requestBody
     * @param string                                                                                                                                          $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\ScheduleOnceScheduleCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ScheduleOnceScheduleCollectionUnprocessableEntityException
     *
     * @return \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleOnceCommand|\Psr\Http\Message\ResponseInterface|null
     */
    public function scheduleOnceScheduleCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ScheduleOnceScheduleCollection($requestBody), $fetch);
    }

    /**
     * Schedule a recurring pipeline execution.
     *
     * @param \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleTimesCommandInputJsonld|\Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleTimesCommandInput $requestBody
     * @param string                                                                                                                                            $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\ScheduleTimesScheduleCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ScheduleTimesScheduleCollectionUnprocessableEntityException
     *
     * @return \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleTimesCommand|\Psr\Http\Message\ResponseInterface|null
     */
    public function scheduleTimesScheduleCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ScheduleTimesScheduleCollection($requestBody), $fetch);
    }

    /**
     * Schedule a delayed pipeline execution.
     *
     * @param \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleUntilCommandInputJsonld|\Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleUntilCommandInput $requestBody
     * @param string                                                                                                                                            $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\ScheduleUntilScheduleCollectionBadRequestException
     * @throws \Gyroscops\Api\Exception\ScheduleUntilScheduleCollectionUnprocessableEntityException
     *
     * @return \Gyroscops\Api\Model\ScheduleDeclarePipelineScheduleUntilCommand|\Psr\Http\Message\ResponseInterface|null
     */
    public function scheduleUntilScheduleCollection($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ScheduleUntilScheduleCollection($requestBody), $fetch);
    }

    /**
     * Retrieves the collection of Schedule resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Schedule[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getScheduleCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetScheduleCollection($queryParameters), $fetch);
    }

    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetScheduleItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\Schedule|\Psr\Http\Message\ResponseInterface|null
     */
    public function getScheduleItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetScheduleItem($id), $fetch);
    }

    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id              Schedule identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\ExecutionRead[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiSchedulesExecutionsGetSubresourceScheduleSubresource(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesExecutionsGetSubresourceScheduleSubresource($id, $queryParameters), $fetch);
    }

    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id    Schedule identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiSchedulesOrganizationGetSubresourceScheduleSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesOrganizationGetSubresourceScheduleSubresource($id), $fetch);
    }

    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id    Schedule identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiSchedulesOwnerGetSubresourceScheduleSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesOwnerGetSubresourceScheduleSubresource($id), $fetch);
    }

    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id    Schedule identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\PipelineRead|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiSchedulesPipelineGetSubresourceScheduleSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesPipelineGetSubresourceScheduleSubresource($id), $fetch);
    }

    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id    Schedule identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Project|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiSchedulesProjectGetSubresourceScheduleSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesProjectGetSubresourceScheduleSubresource($id), $fetch);
    }

    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id    Schedule identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\WorkflowRead|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiSchedulesWorkflowGetSubresourceScheduleSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesWorkflowGetSubresourceScheduleSubresource($id), $fetch);
    }

    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id              Schedule identifier
     * @param string $workflow        Workflow identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\WorkflowJobRead[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiSchedulesWorkflowJobsGetSubresourceScheduleSubresource(string $id, string $workflow, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesWorkflowJobsGetSubresourceScheduleSubresource($id, $workflow, $queryParameters), $fetch);
    }

    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id       Schedule identifier
     * @param string $workflow Workflow identifier
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiSchedulesWorkflowOrganizationGetSubresourceScheduleSubresource(string $id, string $workflow, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesWorkflowOrganizationGetSubresourceScheduleSubresource($id, $workflow), $fetch);
    }

    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id       Schedule identifier
     * @param string $workflow Workflow identifier
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiSchedulesWorkflowOwnerGetSubresourceScheduleSubresource(string $id, string $workflow, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesWorkflowOwnerGetSubresourceScheduleSubresource($id, $workflow), $fetch);
    }

    /**
     * Retrieves a Schedule resource.
     *
     * @param string $id       Schedule identifier
     * @param string $workflow Workflow identifier
     * @param string $fetch    Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Project|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiSchedulesWorkflowProjectGetSubresourceScheduleSubresource(string $id, string $workflow, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiSchedulesWorkflowProjectGetSubresourceScheduleSubresource($id, $workflow), $fetch);
    }

    /**
     * Retrieves a WorkflowJobAction resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetWorkflowJobActionItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\WorkflowJobAction|\Psr\Http\Message\ResponseInterface|null
     */
    public function getWorkflowJobActionItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetWorkflowJobActionItem($id), $fetch);
    }

    /**
     * Retrieves a WorkflowJob resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetWorkflowJobItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\WorkflowJobRead|\Psr\Http\Message\ResponseInterface|null
     */
    public function getWorkflowJobItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetWorkflowJobItem($id), $fetch);
    }

    /**
     * Retrieves a WorkflowJobPipeline resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetWorkflowJobPipelineItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\WorkflowJobPipeline|\Psr\Http\Message\ResponseInterface|null
     */
    public function getWorkflowJobPipelineItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetWorkflowJobPipelineItem($id), $fetch);
    }

    /**
     * Retrieves a Workflow resource.
     *
     * @param string $id    Resource identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @throws \Gyroscops\Api\Exception\GetWorkflowItemNotFoundException
     *
     * @return \Gyroscops\Api\Model\WorkflowRead|\Psr\Http\Message\ResponseInterface|null
     */
    public function getWorkflowItem(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetWorkflowItem($id), $fetch);
    }

    /**
     * Retrieves a Workflow resource.
     *
     * @param string $id              Workflow identifier
     * @param array  $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\WorkflowJobRead[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiWorkflowsJobsGetSubresourceWorkflowSubresource(string $id, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiWorkflowsJobsGetSubresourceWorkflowSubresource($id, $queryParameters), $fetch);
    }

    /**
     * Retrieves the collection of Workflow resources.
     *
     * @param array $queryParameters {
     *
     *     @var int $page The collection page number
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\WorkflowRead[]|\Psr\Http\Message\ResponseInterface|null
     */
    public function getWorkflowCollection(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\GetWorkflowCollection($queryParameters), $fetch);
    }

    /**
     * Retrieves a Workflow resource.
     *
     * @param string $id    Workflow identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Organization|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiWorkflowsOrganizationGetSubresourceWorkflowSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiWorkflowsOrganizationGetSubresourceWorkflowSubresource($id), $fetch);
    }

    /**
     * Retrieves a Workflow resource.
     *
     * @param string $id    Workflow identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\User|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiWorkflowsOwnerGetSubresourceWorkflowSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiWorkflowsOwnerGetSubresourceWorkflowSubresource($id), $fetch);
    }

    /**
     * Retrieves a Workflow resource.
     *
     * @param string $id    Workflow identifier
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Gyroscops\Api\Model\Project|\Psr\Http\Message\ResponseInterface|null
     */
    public function apiWorkflowsProjectGetSubresourceWorkflowSubresource(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Gyroscops\Api\Endpoint\ApiWorkflowsProjectGetSubresourceWorkflowSubresource($id), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            if (\count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Gyroscops\Api\Normalizer\JaneObjectNormalizer()];
        if (\count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
