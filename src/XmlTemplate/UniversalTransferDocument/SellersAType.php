<?php

namespace AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument;

/**
 * Class representing SellersAType
 */
class SellersAType
{

    /**
     * СвПрод - сведения о продавце
     *
     * @var \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[] $seller
     */
    private $seller = [
        
    ];

    /**
     * Adds as seller
     *
     * СвПрод - сведения о продавце
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $seller
     */
    public function addToSeller(\AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $seller)
    {
        $this->seller[] = $seller;
        return $this;
    }

    /**
     * isset seller
     *
     * СвПрод - сведения о продавце
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSeller($index)
    {
        return isset($this->seller[$index]);
    }

    /**
     * unset seller
     *
     * СвПрод - сведения о продавце
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSeller($index)
    {
        unset($this->seller[$index]);
    }

    /**
     * Gets as seller
     *
     * СвПрод - сведения о продавце
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[]
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * Sets a new seller
     *
     * СвПрод - сведения о продавце
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[] $seller
     * @return self
     */
    public function setSeller(array $seller)
    {
        $this->seller = $seller;
        return $this;
    }


}

