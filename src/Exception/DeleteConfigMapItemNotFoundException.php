<?php

namespace Gyroscops\Api\Exception;

class DeleteConfigMapItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}