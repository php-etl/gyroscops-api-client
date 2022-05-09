<?php

declare(strict_types=1);

namespace Gyroscops\Api\Exception;

class TerminateExecutionExecutionCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
