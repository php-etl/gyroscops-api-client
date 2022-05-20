<?php

namespace Gyroscops\Api\Exception;

class PutWorkspaceItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}