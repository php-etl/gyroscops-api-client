<?php

namespace Gyroscops\Api\Model;

class Price
{
    /**
     * @var mixed|null
     */
    protected $price;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }
}
