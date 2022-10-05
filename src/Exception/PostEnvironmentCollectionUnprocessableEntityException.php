<?php

namespace Gyroscops\Api\Exception;

class PostEnvironmentCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
