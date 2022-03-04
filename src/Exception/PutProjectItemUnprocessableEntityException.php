<?php

namespace Gyroscops\Api\Exception;

class PutProjectItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}