<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class RuntimeExecutionsGetLdjsonResponse200 extends \ArrayObject
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
     * @var ExecutionJsonldExecutionRead[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimeExecutionsGetLdjsonResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var RuntimeExecutionsGetLdjsonResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return ExecutionJsonldExecutionRead[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param ExecutionJsonldExecutionRead[]|null $hydraMember
     */
    public function setHydraMember(?array $hydraMember): self
    {
        $this->initialized['hydraMember'] = true;
        $this->hydraMember = $hydraMember;

        return $this;
    }

    public function getHydraTotalItems(): ?int
    {
        return $this->hydraTotalItems;
    }

    public function setHydraTotalItems(?int $hydraTotalItems): self
    {
        $this->initialized['hydraTotalItems'] = true;
        $this->hydraTotalItems = $hydraTotalItems;

        return $this;
    }

    public function getHydraView(): ?RuntimeExecutionsGetLdjsonResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?RuntimeExecutionsGetLdjsonResponse200HydraView $hydraView): self
    {
        $this->initialized['hydraView'] = true;
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?RuntimeExecutionsGetLdjsonResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?RuntimeExecutionsGetLdjsonResponse200HydraSearch $hydraSearch): self
    {
        $this->initialized['hydraSearch'] = true;
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
