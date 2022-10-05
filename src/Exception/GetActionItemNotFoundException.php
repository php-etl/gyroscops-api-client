<?php

namespace Gyroscops\Api\Exception;

class GetActionItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
