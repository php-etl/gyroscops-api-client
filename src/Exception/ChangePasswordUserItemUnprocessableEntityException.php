<?php

namespace Gyroscops\Api\Exception;

class ChangePasswordUserItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
