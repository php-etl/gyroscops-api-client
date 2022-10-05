<?php

namespace Gyroscops\Api\Exception;

class PatchSubscriptionItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
