<?php

namespace AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument;

/**
 * Class representing DocumentShipmentsAType
 */
class DocumentShipmentsAType
{

    /**
     * ДокПодтвОтгр - Реквизиты документа, подтверждающего отгрузку
     *  товаров
     *
     * @property \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\DocumentShipmentsAType\DocumentShipmentAType[] $documentShipment
     */
    private $documentShipment = array(
        
    );

    /**
     * Adds as documentShipment
     *
     * ДокПодтвОтгр - Реквизиты документа, подтверждающего отгрузку
     *  товаров
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\DocumentShipmentsAType\DocumentShipmentAType $documentShipment
     */
    public function addToDocumentShipment(\AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\DocumentShipmentsAType\DocumentShipmentAType $documentShipment)
    {
        $this->documentShipment[] = $documentShipment;
        return $this;
    }

    /**
     * isset documentShipment
     *
     * ДокПодтвОтгр - Реквизиты документа, подтверждающего отгрузку
     *  товаров
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDocumentShipment($index)
    {
        return isset($this->documentShipment[$index]);
    }

    /**
     * unset documentShipment
     *
     * ДокПодтвОтгр - Реквизиты документа, подтверждающего отгрузку
     *  товаров
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDocumentShipment($index)
    {
        unset($this->documentShipment[$index]);
    }

    /**
     * Gets as documentShipment
     *
     * ДокПодтвОтгр - Реквизиты документа, подтверждающего отгрузку
     *  товаров
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\DocumentShipmentsAType\DocumentShipmentAType[]
     */
    public function getDocumentShipment()
    {
        return $this->documentShipment;
    }

    /**
     * Sets a new documentShipment
     *
     * ДокПодтвОтгр - Реквизиты документа, подтверждающего отгрузку
     *  товаров
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\DocumentShipmentsAType\DocumentShipmentAType[] $documentShipment
     * @return self
     */
    public function setDocumentShipment(array $documentShipment)
    {
        $this->documentShipment = $documentShipment;
        return $this;
    }


}

