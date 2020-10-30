<?php

namespace AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument;

/**
 * Class representing BuyersAType
 */
class BuyersAType
{

    /**
     * СвПокуп - сведения о покупателе
     *
     * @property \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[] $buyer
     */
    private $buyer = array(
        
    );

    /**
     * Adds as buyer
     *
     * СвПокуп - сведения о покупателе
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $buyer
     */
    public function addToBuyer(\AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $buyer)
    {
        $this->buyer[] = $buyer;
        return $this;
    }

    /**
     * isset buyer
     *
     * СвПокуп - сведения о покупателе
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBuyer($index)
    {
        return isset($this->buyer[$index]);
    }

    /**
     * unset buyer
     *
     * СвПокуп - сведения о покупателе
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBuyer($index)
    {
        unset($this->buyer[$index]);
    }

    /**
     * Gets as buyer
     *
     * СвПокуп - сведения о покупателе
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[]
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * Sets a new buyer
     *
     * СвПокуп - сведения о покупателе
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[] $buyer
     * @return self
     */
    public function setBuyer(array $buyer)
    {
        $this->buyer = $buyer;
        return $this;
    }


}

