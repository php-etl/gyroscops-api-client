<?php

namespace Gyroscops\Api\Model;

class Probe
{
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $label;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }
}
