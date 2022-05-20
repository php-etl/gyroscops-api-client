<?php

namespace Gyroscops\Api\Exception;

class PostOnPremiseRequestCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}