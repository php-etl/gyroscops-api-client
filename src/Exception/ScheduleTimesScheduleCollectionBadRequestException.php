<?php

namespace Gyroscops\Api\Exception;

class ScheduleTimesScheduleCollectionBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}