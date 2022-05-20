<?php

namespace Gyroscops\Api\Exception;

class PatchUserItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}