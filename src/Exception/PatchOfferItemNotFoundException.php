<?php

namespace Gyroscops\Api\Exception;

class PatchOfferItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
