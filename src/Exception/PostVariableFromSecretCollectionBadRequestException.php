<?php

namespace Gyroscops\Api\Exception;

class PostVariableFromSecretCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
