<?php

namespace Gyroscops\Api\Exception;

class PutAkeneoOauthTokenAkeneoOauthTokenCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}