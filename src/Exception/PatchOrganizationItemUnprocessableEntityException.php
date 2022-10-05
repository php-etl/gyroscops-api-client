<?php

namespace Gyroscops\Api\Exception;

class PatchOrganizationItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
