<?php

namespace Gyroscops\Api\Exception;

class AcceptReferralRequestReferralRequestItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
