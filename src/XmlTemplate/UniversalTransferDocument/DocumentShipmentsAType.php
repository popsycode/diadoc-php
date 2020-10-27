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
     * @var \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\DocumentShipmentsAType\DocumentShipmentAType[] $documentShipment
     */
    private $documentShipment = [
        
    ];

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
     * @param int|string $index
     * @return bool
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
     * @param int|string $index
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

