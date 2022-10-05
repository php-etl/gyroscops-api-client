<?php

namespace Gyroscops\Api\Exception;

class GetAkeneoLinkedAccountItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
