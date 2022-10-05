<?php

namespace Gyroscops\Api\Exception;

class PatchWorkspaceItemUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
