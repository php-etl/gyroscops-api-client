<?php

declare(strict_types=1);

namespace Gyroscops\Api\Exception;

class AddComposerPipelinePipelineCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
