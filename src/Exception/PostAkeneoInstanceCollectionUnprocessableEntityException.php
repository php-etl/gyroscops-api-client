<?php

namespace Gyroscops\Api\Exception;

class PostAkeneoInstanceCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
