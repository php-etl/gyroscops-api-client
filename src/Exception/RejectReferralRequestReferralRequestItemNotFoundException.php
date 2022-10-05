<?php

namespace Gyroscops\Api\Exception;

class RejectReferralRequestReferralRequestItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
