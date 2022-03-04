<?php

namespace Gyroscops\Api\Exception;

class PatchOrganizationItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}