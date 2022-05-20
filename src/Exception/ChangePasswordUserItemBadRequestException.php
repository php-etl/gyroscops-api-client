<?php

namespace Gyroscops\Api\Exception;

class ChangePasswordUserItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}