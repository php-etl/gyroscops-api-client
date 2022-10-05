<?php

namespace Gyroscops\Api\Exception;

class PostAkeneoOauthTokenCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
