<?php

namespace Gyroscops\Api\Exception;

class PostSecretCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}