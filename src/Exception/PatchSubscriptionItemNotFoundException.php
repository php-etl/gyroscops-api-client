<?php

namespace Gyroscops\Api\Exception;

class PatchSubscriptionItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
