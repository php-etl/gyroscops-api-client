<?php

namespace Gyroscops\Api\Exception;

class DeleteWorkspaceItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}