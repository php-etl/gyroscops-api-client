<?php

namespace Gyroscops\Api\Exception;

class GetUserItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}