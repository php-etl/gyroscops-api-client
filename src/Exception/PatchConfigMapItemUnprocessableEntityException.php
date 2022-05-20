<?php

namespace Gyroscops\Api\Exception;

class PatchConfigMapItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}