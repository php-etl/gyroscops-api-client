<?php

namespace Gyroscops\Api\Exception;

class PatchOrganizationItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}