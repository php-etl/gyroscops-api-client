<?php

namespace Gyroscops\Api\Exception;

class PostSubscriptionCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
