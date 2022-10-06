<?php

declare(strict_types=1);

namespace Gyroscops\Api\Exception;

class StartExecutionExecutionCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
