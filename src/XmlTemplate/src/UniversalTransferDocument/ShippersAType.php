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
     * @var \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\ShippersAType\ShipperAType[] $shipper
     */
    private $shipper = [
        
    ];

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
     * @param int|string $index
     * @return bool
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
     * @param int|string $index
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

