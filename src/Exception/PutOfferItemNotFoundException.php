<?php

namespace Gyroscops\Api\Exception;

class PutOfferItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
