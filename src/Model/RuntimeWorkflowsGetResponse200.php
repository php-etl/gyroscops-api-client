<?php

namespace Gyroscops\Api\Model;

class RuntimeWorkflowsGetResponse200
{
    /**
     * @var WorkflowJsonldRead[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimeWorkflowsGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var RuntimeWorkflowsGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return WorkflowJsonldRead[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param WorkflowJsonldRead[]|null $hydraMember
     */
    public function setHydraMember(?array $hydraMember): self
    {
        $this->hydraMember = $hydraMember;

        return $this;
    }

    public function getHydraTotalItems(): ?int
    {
        return $this->hydraTotalItems;
    }

    public function setHydraTotalItems(?int $hydraTotalItems): self
    {
        $this->hydraTotalItems = $hydraTotalItems;

        return $this;
    }

    public function getHydraView(): ?RuntimeWorkflowsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?RuntimeWorkflowsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?RuntimeWorkflowsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?RuntimeWorkflowsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
