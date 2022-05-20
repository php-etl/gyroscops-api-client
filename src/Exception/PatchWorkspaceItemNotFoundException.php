<?php

namespace Gyroscops\Api\Exception;

class PatchWorkspaceItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}