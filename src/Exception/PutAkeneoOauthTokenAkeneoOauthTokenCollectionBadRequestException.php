<?php

namespace Gyroscops\Api\Exception;

class PutAkeneoOauthTokenAkeneoOauthTokenCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}