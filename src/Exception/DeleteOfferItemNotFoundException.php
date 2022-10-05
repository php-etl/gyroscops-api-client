<?php

namespace Gyroscops\Api\Exception;

class DeleteOfferItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
