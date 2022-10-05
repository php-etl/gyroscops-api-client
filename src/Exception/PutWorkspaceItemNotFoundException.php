<?php

namespace Gyroscops\Api\Exception;

class PutWorkspaceItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
