<?php

namespace Gyroscops\Api\Exception;

class AddValueConfigMapCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
