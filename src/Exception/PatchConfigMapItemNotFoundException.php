<?php

namespace Gyroscops\Api\Exception;

class PatchConfigMapItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}