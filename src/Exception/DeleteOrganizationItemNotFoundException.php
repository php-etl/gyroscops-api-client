<?php

namespace Gyroscops\Api\Exception;

class DeleteOrganizationItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}