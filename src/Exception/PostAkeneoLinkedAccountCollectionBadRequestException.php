<?php

namespace Gyroscops\Api\Exception;

class PostAkeneoLinkedAccountCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
