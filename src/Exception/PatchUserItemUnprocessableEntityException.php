<?php

namespace Gyroscops\Api\Exception;

class PatchUserItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}