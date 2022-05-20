<?php

namespace Gyroscops\Api\Exception;

class GetWorkspaceItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}