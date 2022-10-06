<?php

namespace Gyroscops\Api\Model;

class ReferralCodesGetResponse200
{
    /**
     * @var ReferralCodeJsonldReferralCodeRead[]|null
     */
    protected $hydraMember;
    /**
     * @var int|null
     */
    protected $hydraTotalItems;
    /**
     * @var ReferralCodesGetResponse200HydraView|null
     */
    protected $hydraView;
    /**
     * @var ReferralCodesGetResponse200HydraSearch|null
     */
    protected $hydraSearch;

    /**
     * @return ReferralCodeJsonldReferralCodeRead[]|null
     */
    public function getHydraMember(): ?array
    {
        return $this->hydraMember;
    }

    /**
     * @param ReferralCodeJsonldReferralCodeRead[]|null $hydraMember
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

    public function getHydraView(): ?ReferralCodesGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(?ReferralCodesGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ?ReferralCodesGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(?ReferralCodesGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
