<?php

namespace Gyroscops\Api\Exception;

class AddValueConfigMapCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
