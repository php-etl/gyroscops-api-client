<?php

namespace Gyroscops\Api\Exception;

class ChangePasswordUserItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}