<?php

namespace Gyroscops\Api\Exception;

class PostConfigMapCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}