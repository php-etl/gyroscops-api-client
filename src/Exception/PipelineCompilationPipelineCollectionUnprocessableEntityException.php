<?php

declare(strict_types=1);

namespace Gyroscops\Api\Exception;

class PipelineCompilationPipelineCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
