<?php

namespace Gyroscops\Api\Exception;

class AcceptReferralRequestReferralRequestItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}