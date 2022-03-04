<?php

namespace Gyroscops\Api\Exception;

class PatchProjectItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}