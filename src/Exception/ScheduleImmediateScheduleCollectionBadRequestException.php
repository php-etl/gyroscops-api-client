<?php

namespace Gyroscops\Api\Exception;

class ScheduleImmediateScheduleCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}