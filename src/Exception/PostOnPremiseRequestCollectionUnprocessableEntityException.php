<?php

namespace Gyroscops\Api\Exception;

class PostOnPremiseRequestCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}