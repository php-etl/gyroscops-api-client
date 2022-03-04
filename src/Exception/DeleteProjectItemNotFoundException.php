<?php

namespace Gyroscops\Api\Exception;

class DeleteProjectItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}