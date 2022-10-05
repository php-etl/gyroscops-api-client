<?php

namespace Gyroscops\Api\Exception;

class PutOrganizationItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
