<?php

namespace Gyroscops\Api\Exception;

class PostVariableFromConfigMapCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}