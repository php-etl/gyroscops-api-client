<?php

namespace Gyroscops\Api\Exception;

class PostReferralRequestCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
