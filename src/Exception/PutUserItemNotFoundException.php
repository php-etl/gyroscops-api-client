<?php

namespace Gyroscops\Api\Exception;

class PutUserItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}