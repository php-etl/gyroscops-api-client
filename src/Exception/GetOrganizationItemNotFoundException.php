<?php

declare(strict_types=1);

namespace Gyroscops\Api\Exception;

class GetOrganizationItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
