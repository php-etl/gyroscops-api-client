<?php

namespace Gyroscops\Api\Exception;

class PatchReferralReferralRequestItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}