<?php

namespace Gyroscops\Api\Exception;

class ScheduleOnceScheduleCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}