<?php

namespace Gyroscops\Api\Exception;

class PatchOfferItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
