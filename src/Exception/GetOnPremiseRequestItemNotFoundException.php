<?php

namespace Gyroscops\Api\Exception;

class GetOnPremiseRequestItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
