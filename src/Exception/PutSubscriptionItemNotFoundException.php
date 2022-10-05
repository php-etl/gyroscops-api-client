<?php

namespace Gyroscops\Api\Exception;

class PutSubscriptionItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
