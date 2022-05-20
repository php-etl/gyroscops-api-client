<?php

namespace Gyroscops\Api\Exception;

class PostUserAuthorizationCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}