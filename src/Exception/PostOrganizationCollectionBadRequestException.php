<?php

namespace Gyroscops\Api\Exception;

class PostOrganizationCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}