<?php

namespace Gyroscops\Api\Exception;

class PostSecretCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
