<?php

namespace Gyroscops\Api\Exception;

class PostWorkspaceCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}