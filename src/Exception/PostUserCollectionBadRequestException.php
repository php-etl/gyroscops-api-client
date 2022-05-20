<?php

namespace Gyroscops\Api\Exception;

class PostUserCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}