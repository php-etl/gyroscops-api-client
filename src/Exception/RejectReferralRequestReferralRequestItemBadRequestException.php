<?php

namespace Gyroscops\Api\Exception;

class RejectReferralRequestReferralRequestItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
