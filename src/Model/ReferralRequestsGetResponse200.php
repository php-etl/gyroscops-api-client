<?php

namespace Gyroscops\Api\Model;

class ReferralRequestsGetResponse200
{
    /**
     * @var ReferralRequestJsonldReferralRequestRead[]
     */
    protected $hydraMember;
    /**
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * @var ReferralRequestsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * @var ReferralRequestsGetResponse200HydraSearch
     */
    protected $hydraSearch;

    /**
     * @return ReferralRequestJsonldReferralRequestRead[]
     */
    public function getHydraMember(): array
    {
        return $this->hydraMember;
    }

    /**
     * @param ReferralRequestJsonldReferralRequestRead[] $hydraMember
     */
    public function setHydraMember(array $hydraMember): self
    {
        $this->hydraMember = $hydraMember;

        return $this;
    }

    public function getHydraTotalItems(): int
    {
        return $this->hydraTotalItems;
    }

    public function setHydraTotalItems(int $hydraTotalItems): self
    {
        $this->hydraTotalItems = $hydraTotalItems;

        return $this;
    }

    public function getHydraView(): ReferralRequestsGetResponse200HydraView
    {
        return $this->hydraView;
    }

    public function setHydraView(ReferralRequestsGetResponse200HydraView $hydraView): self
    {
        $this->hydraView = $hydraView;

        return $this;
    }

    public function getHydraSearch(): ReferralRequestsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }

    public function setHydraSearch(ReferralRequestsGetResponse200HydraSearch $hydraSearch): self
    {
        $this->hydraSearch = $hydraSearch;

        return $this;
    }
}
