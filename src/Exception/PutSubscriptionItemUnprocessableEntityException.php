<?php

namespace Gyroscops\Api\Exception;

class PutSubscriptionItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
