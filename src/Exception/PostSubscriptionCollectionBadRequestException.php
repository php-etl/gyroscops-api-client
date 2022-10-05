<?php

namespace Gyroscops\Api\Exception;

class PostSubscriptionCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
