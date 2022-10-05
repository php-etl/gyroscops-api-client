<?php

namespace Gyroscops\Api\Model;

class ConfigMapValueInputJsonld
{
    /**
     * @var mixed
     */
    protected $context;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var mixed
     */
    protected $arrayCopy;
    /**
     * @var int
     */
    protected $flags;
    /**
     * @var mixed
     */
    protected $iterator;
    /**
     * @var string
     */
    protected $iteratorClass;

    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param mixed $context
     */
    public function setContext($context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getArrayCopy()
    {
        return $this->arrayCopy;
    }

    /**
     * @param mixed $arrayCopy
     */
    public function setArrayCopy($arrayCopy): self
    {
        $this->arrayCopy = $arrayCopy;

        return $this;
    }

    public function getFlags(): int
    {
        return $this->flags;
    }

    public function setFlags(int $flags): self
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIterator()
    {
        return $this->iterator;
    }

    /**
     * @param mixed $iterator
     */
    public function setIterator($iterator): self
    {
        $this->iterator = $iterator;

        return $this;
    }

    public function getIteratorClass(): string
    {
        return $this->iteratorClass;
    }

    public function setIteratorClass(string $iteratorClass): self
    {
        $this->iteratorClass = $iteratorClass;

        return $this;
    }
}
