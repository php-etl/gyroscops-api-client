<?php

namespace Gyroscops\Api\Exception;

class PatchReferralReferralRequestItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}