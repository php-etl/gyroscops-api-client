<?php

namespace Gyroscops\Api\Exception;

class GetOfferItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
