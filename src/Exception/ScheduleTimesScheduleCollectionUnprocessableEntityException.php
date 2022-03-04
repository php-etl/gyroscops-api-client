<?php

namespace Gyroscops\Api\Exception;

class ScheduleTimesScheduleCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}