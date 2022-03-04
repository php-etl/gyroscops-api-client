<?php

namespace Gyroscops\Api\Exception;

class PatchReferralReferralRequestItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}