<?php

namespace Gyroscops\Api\Exception;

class PatchOfferItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
