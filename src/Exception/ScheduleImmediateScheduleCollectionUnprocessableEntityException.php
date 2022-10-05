<?php

namespace Gyroscops\Api\Exception;

class ScheduleImmediateScheduleCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
