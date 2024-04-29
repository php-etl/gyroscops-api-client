<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class TemplateDeclareSatelliteTemplateInputJsonld extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var mixed|null
     */
    protected $context;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $label;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string[]|null
     */
    protected $pictograms;
    /**
     * @var string[]|null
     */
    protected $template;

    public function getContext()
    {
        return $this->context;
    }

    public function setContext($context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPictograms(): ?array
    {
        return $this->pictograms;
    }

    /**
     * @param string[]|null $pictograms
     */
    public function setPictograms(?array $pictograms): self
    {
        $this->initialized['pictograms'] = true;
        $this->pictograms = $pictograms;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getTemplate(): ?array
    {
        return $this->template;
    }

    /**
     * @param string[]|null $template
     */
    public function setTemplate(?array $template): self
    {
        $this->initialized['template'] = true;
        $this->template = $template;

        return $this;
    }
}
