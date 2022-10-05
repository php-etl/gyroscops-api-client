<?php

namespace Gyroscops\Api\Exception;

class GetScheduleItemNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Resource not found');
    }
}
