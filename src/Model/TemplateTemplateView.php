<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class TemplateTemplateView extends \ArrayObject
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
     * @var string|null
     */
    protected $organization;
    /**
     * @var string[]|null
     */
    protected $keywords;
    /**
     * @var string[]|null
     */
    protected $pictograms;
    /**
     * @var string[]|null
     */
    protected $template;

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

    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    public function setOrganization(?string $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getKeywords(): ?array
    {
        return $this->keywords;
    }

    /**
     * @param string[]|null $keywords
     */
    public function setKeywords(?array $keywords): self
    {
        $this->initialized['keywords'] = true;
        $this->keywords = $keywords;

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
