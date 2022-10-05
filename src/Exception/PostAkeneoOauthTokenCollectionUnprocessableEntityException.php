<?php

namespace Gyroscops\Api\Exception;

class PostAkeneoOauthTokenCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
