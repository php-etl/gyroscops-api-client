<?php

namespace Gyroscops\Api\Exception;

class PutConfigMapItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}