<?php

namespace Gyroscops\Api\Exception;

class PatchProjectItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}