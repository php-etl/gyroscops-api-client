<?php

namespace Gyroscops\Api\Exception;

class ScheduleOnceScheduleCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}