<?php

namespace Gyroscops\Api\Exception;

class PutUserItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
