<?php

namespace Gyroscops\Api\Exception;

class PostReferralCodeCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
