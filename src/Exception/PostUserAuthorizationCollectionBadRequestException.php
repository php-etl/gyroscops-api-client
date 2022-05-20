<?php

namespace Gyroscops\Api\Exception;

class PostUserAuthorizationCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}