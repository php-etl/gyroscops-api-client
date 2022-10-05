<?php

namespace Gyroscops\Api\Exception;

class DeleteUserItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
