<?php

namespace Gyroscops\Api\Exception;

class PostAkeneoLinkedAccountCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
