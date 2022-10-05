<?php

namespace Gyroscops\Api\Exception;

class PostVariableFromSecretCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
