<?php

namespace Gyroscops\Api\Exception;

class GetReferralCodeItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}