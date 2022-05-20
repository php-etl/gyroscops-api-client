<?php

namespace Gyroscops\Api\Exception;

class AddValueSecretCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}