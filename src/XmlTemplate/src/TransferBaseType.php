<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing TransferBaseType
 *
 * 
 * XSD Type: TransferBase
 */
class TransferBaseType
{

    /**
     * НаимОсн - Наименование документа-основания отгрузки
     *
     * @property string $baseDocumentName
     */
    private $baseDocumentName = null;

    /**
     * НомОсн - Номер документа-основания отгрузки
     *
     * @property string $baseDocumentNumber
     */
    private $baseDocumentNumber = null;

    /**
     * ДатаОсн - Дата документа-основания отгрузки
     *
     * @property string $baseDocumentDate
     */
    private $baseDocumentDate = null;

    /**
     * ДопСвОсн - Дополнительные сведения документа-основания отгрузки
     *
     * @property string $baseDocumentInfo
     */
    private $baseDocumentInfo = null;

    /**
     * Gets as baseDocumentName
     *
     * НаимОсн - Наименование документа-основания отгрузки
     *
     * @return string
     */
    public function getBaseDocumentName()
    {
        return $this->baseDocumentName;
    }

    /**
     * Sets a new baseDocumentName
     *
     * НаимОсн - Наименование документа-основания отгрузки
     *
     * @param string $baseDocumentName
     * @return self
     */
    public function setBaseDocumentName($baseDocumentName)
    {
        $this->baseDocumentName = $baseDocumentName;
        return $this;
    }

    /**
     * Gets as baseDocumentNumber
     *
     * НомОсн - Номер документа-основания отгрузки
     *
     * @return string
     */
    public function getBaseDocumentNumber()
    {
        return $this->baseDocumentNumber;
    }

    /**
     * Sets a new baseDocumentNumber
     *
     * НомОсн - Номер документа-основания отгрузки
     *
     * @param string $baseDocumentNumber
     * @return self
     */
    public function setBaseDocumentNumber($baseDocumentNumber)
    {
        $this->baseDocumentNumber = $baseDocumentNumber;
        return $this;
    }

    /**
     * Gets as baseDocumentDate
     *
     * ДатаОсн - Дата документа-основания отгрузки
     *
     * @return string
     */
    public function getBaseDocumentDate()
    {
        return $this->baseDocumentDate;
    }

    /**
     * Sets a new baseDocumentDate
     *
     * ДатаОсн - Дата документа-основания отгрузки
     *
     * @param string $baseDocumentDate
     * @return self
     */
    public function setBaseDocumentDate($baseDocumentDate)
    {
        $this->baseDocumentDate = $baseDocumentDate;
        return $this;
    }

    /**
     * Gets as baseDocumentInfo
     *
     * ДопСвОсн - Дополнительные сведения документа-основания отгрузки
     *
     * @return string
     */
    public function getBaseDocumentInfo()
    {
        return $this->baseDocumentInfo;
    }

    /**
     * Sets a new baseDocumentInfo
     *
     * ДопСвОсн - Дополнительные сведения документа-основания отгрузки
     *
     * @param string $baseDocumentInfo
     * @return self
     */
    public function setBaseDocumentInfo($baseDocumentInfo)
    {
        $this->baseDocumentInfo = $baseDocumentInfo;
        return $this;
    }


}

