<?php

namespace Gyroscops\Api\Exception;

class PostAkeneoInstanceCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
