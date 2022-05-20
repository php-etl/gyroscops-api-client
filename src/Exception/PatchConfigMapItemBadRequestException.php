<?php

namespace Gyroscops\Api\Exception;

class PatchConfigMapItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}