<?php

namespace AgentSIB\Diadoc\XmlTemplate\WaybillsType;

/**
 * Class representing WaybillAType
 */
class WaybillAType
{

    /**
     * НомерТранНакл - Номер транспортной накладной
     *
     * @var string $transferDocumentNumber
     */
    private $transferDocumentNumber = null;

    /**
     * ДатаТранНакл - Дата транспортной накладной
     *
     * @var string $transferDocumentDate
     */
    private $transferDocumentDate = null;

    /**
     * Gets as transferDocumentNumber
     *
     * НомерТранНакл - Номер транспортной накладной
     *
     * @return string
     */
    public function getTransferDocumentNumber()
    {
        return $this->transferDocumentNumber;
    }

    /**
     * Sets a new transferDocumentNumber
     *
     * НомерТранНакл - Номер транспортной накладной
     *
     * @param string $transferDocumentNumber
     * @return self
     */
    public function setTransferDocumentNumber($transferDocumentNumber)
    {
        $this->transferDocumentNumber = $transferDocumentNumber;
        return $this;
    }

    /**
     * Gets as transferDocumentDate
     *
     * ДатаТранНакл - Дата транспортной накладной
     *
     * @return string
     */
    public function getTransferDocumentDate()
    {
        return $this->transferDocumentDate;
    }

    /**
     * Sets a new transferDocumentDate
     *
     * ДатаТранНакл - Дата транспортной накладной
     *
     * @param string $transferDocumentDate
     * @return self
     */
    public function setTransferDocumentDate($transferDocumentDate)
    {
        $this->transferDocumentDate = $transferDocumentDate;
        return $this;
    }


}

