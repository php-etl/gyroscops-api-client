<?php

namespace Gyroscops\Api\Exception;

class DeleteSubscriptionItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
