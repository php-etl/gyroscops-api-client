<?php

namespace Gyroscops\Api\Exception;

class PutOrganizationItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}