<?php

namespace Gyroscops\Api\Exception;

class RejectReferralRequestReferralRequestItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}