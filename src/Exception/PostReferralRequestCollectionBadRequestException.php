<?php

namespace Gyroscops\Api\Exception;

class PostReferralRequestCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}