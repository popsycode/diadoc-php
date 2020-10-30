<?php

namespace AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType;

/**
 * Class representing ItemTracingInfosAType
 */
class ItemTracingInfosAType
{

    /**
     * СведПрослеж - Сведения о товаре, подлежащем
     *  прослеживаемости
     *
     * @property \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemTracingInfosAType\ItemTracingInfoAType[] $itemTracingInfo
     */
    private $itemTracingInfo = array(
        
    );

    /**
     * Adds as itemTracingInfo
     *
     * СведПрослеж - Сведения о товаре, подлежащем
     *  прослеживаемости
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemTracingInfosAType\ItemTracingInfoAType $itemTracingInfo
     */
    public function addToItemTracingInfo(\AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemTracingInfosAType\ItemTracingInfoAType $itemTracingInfo)
    {
        $this->itemTracingInfo[] = $itemTracingInfo;
        return $this;
    }

    /**
     * isset itemTracingInfo
     *
     * СведПрослеж - Сведения о товаре, подлежащем
     *  прослеживаемости
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemTracingInfo($index)
    {
        return isset($this->itemTracingInfo[$index]);
    }

    /**
     * unset itemTracingInfo
     *
     * СведПрослеж - Сведения о товаре, подлежащем
     *  прослеживаемости
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemTracingInfo($index)
    {
        unset($this->itemTracingInfo[$index]);
    }

    /**
     * Gets as itemTracingInfo
     *
     * СведПрослеж - Сведения о товаре, подлежащем
     *  прослеживаемости
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemTracingInfosAType\ItemTracingInfoAType[]
     */
    public function getItemTracingInfo()
    {
        return $this->itemTracingInfo;
    }

    /**
     * Sets a new itemTracingInfo
     *
     * СведПрослеж - Сведения о товаре, подлежащем
     *  прослеживаемости
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemTracingInfosAType\ItemTracingInfoAType[] $itemTracingInfo
     * @return self
     */
    public function setItemTracingInfo(array $itemTracingInfo)
    {
        $this->itemTracingInfo = $itemTracingInfo;
        return $this;
    }


}

