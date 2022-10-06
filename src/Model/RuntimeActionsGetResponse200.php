<?php

declare(strict_types=1);

namespace Gyroscops\Api\Model;

class RuntimeActionsGetResponse200
{
    /**
     * @var ActionJsonldRead[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var RuntimeActionsGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var RuntimeActionsGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return ActionJsonldRead[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param ActionJsonldRead[]|null $hydraMember
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

    public function getHydraView(): ?RuntimeActionsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?RuntimeActionsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?RuntimeActionsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?RuntimeActionsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
