<?php

namespace Gyroscops\Api\Exception;

class PatchUserItemBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Invalid input');
    }
}
