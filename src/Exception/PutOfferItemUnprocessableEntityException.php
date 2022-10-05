<?php

namespace Gyroscops\Api\Exception;

class PutOfferItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
