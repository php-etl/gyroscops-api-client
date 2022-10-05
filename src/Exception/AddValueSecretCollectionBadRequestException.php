<?php

namespace Gyroscops\Api\Exception;

class AddValueSecretCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
