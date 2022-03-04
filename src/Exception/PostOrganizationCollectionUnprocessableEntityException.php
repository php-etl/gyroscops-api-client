<?php

namespace Gyroscops\Api\Exception;

class PostOrganizationCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}