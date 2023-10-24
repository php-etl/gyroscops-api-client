<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Gyroscops\Api\Model;

class RuntimeExecutionsWorkflowsIdJobsGetLdjsonResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var ExecutionWorkflowJobJsonld[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimeExecutionsWorkflowsIdJobsGetLdjsonResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var RuntimeExecutionsWorkflowsIdJobsGetLdjsonResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return ExecutionWorkflowJobJsonld[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param ExecutionWorkflowJobJsonld[]|null $hydraMember
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

    public function getHydraView(): ?RuntimeExecutionsWorkflowsIdJobsGetLdjsonResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?RuntimeExecutionsWorkflowsIdJobsGetLdjsonResponse200HydraView $hydraView): self
    {
        $this->initialized['hydraView'] = true;
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?RuntimeExecutionsWorkflowsIdJobsGetLdjsonResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?RuntimeExecutionsWorkflowsIdJobsGetLdjsonResponse200HydraSearch $hydraSearch): self
    {
        $this->initialized['hydraSearch'] = true;
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}