<?php

namespace Gyroscops\Api\Exception;

class PostVariableFromConfigMapCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}