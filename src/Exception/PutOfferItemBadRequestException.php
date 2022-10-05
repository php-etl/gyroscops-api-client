<?php

namespace Gyroscops\Api\Exception;

class PutOfferItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
