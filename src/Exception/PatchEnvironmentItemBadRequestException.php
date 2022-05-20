<?php

namespace Gyroscops\Api\Exception;

class PatchEnvironmentItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}