<?php

namespace AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\DocumentShipmentsAType;

/**
 * Class representing DocumentShipmentAType
 */
class DocumentShipmentAType
{

    /**
     * НаимДокОтгр - Наименование документа об отгрузке
     *
     * @property string $name
     */
    private $name = null;

    /**
     * НомДокОтгр - Номер документа об отгрузке
     *
     * @property string $number
     */
    private $number = null;

    /**
     * ДатаДокОтгр - Дата документа об отгрузке
     *
     * @property string $date
     */
    private $date = null;

    /**
     * Gets as name
     *
     * НаимДокОтгр - Наименование документа об отгрузке
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * НаимДокОтгр - Наименование документа об отгрузке
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as number
     *
     * НомДокОтгр - Номер документа об отгрузке
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * НомДокОтгр - Номер документа об отгрузке
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as date
     *
     * ДатаДокОтгр - Дата документа об отгрузке
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * ДатаДокОтгр - Дата документа об отгрузке
     *
     * @param string $date
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }


}

