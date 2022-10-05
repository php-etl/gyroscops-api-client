<?php

namespace Gyroscops\Api\Exception;

class AcceptReferralRequestReferralRequestItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
