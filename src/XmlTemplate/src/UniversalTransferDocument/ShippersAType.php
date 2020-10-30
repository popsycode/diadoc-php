<?php

namespace AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument;

/**
 * Class representing ShippersAType
 */
class ShippersAType
{

    /**
     * ГрузОт - грузоотправитель
     *
     * @property \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\ShippersAType\ShipperAType[] $shipper
     */
    private $shipper = array(
        
    );

    /**
     * Adds as shipper
     *
     * ГрузОт - грузоотправитель
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\ShippersAType\ShipperAType $shipper
     */
    public function addToShipper(\AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\ShippersAType\ShipperAType $shipper)
    {
        $this->shipper[] = $shipper;
        return $this;
    }

    /**
     * isset shipper
     *
     * ГрузОт - грузоотправитель
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetShipper($index)
    {
        return isset($this->shipper[$index]);
    }

    /**
     * unset shipper
     *
     * ГрузОт - грузоотправитель
     *
     * @param scalar $index
     * @return void
     */
    public function unsetShipper($index)
    {
        unset($this->shipper[$index]);
    }

    /**
     * Gets as shipper
     *
     * ГрузОт - грузоотправитель
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\ShippersAType\ShipperAType[]
     */
    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     * Sets a new shipper
     *
     * ГрузОт - грузоотправитель
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\ShippersAType\ShipperAType[] $shipper
     * @return self
     */
    public function setShipper(array $shipper)
    {
        $this->shipper = $shipper;
        return $this;
    }


}

