<?php

namespace Gyroscops\Api\Exception;

class ScheduleUntilScheduleCollectionUnprocessableEntityException extends UnprocessableEntityException
{
    public function __construct()
    {
        parent::__construct('Unprocessable entity');
    }
}
