<?php

namespace Gyroscops\Api\Exception;

class PostUserCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}