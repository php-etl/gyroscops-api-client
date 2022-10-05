<?php

namespace Gyroscops\Api\Exception;

class ScheduleUntilScheduleCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
