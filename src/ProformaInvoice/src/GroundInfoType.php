<?php

namespace AgentSIB\Diadoc\ProformaInvoice;

/**
 * Class representing GroundInfoType
 *
 * 
 * XSD Type: GroundInfo
 */
class GroundInfoType
{

    /**
     * НаимОсн - Наименование документа-основания
     *
     * @property string $name
     */
    private $name = null;

    /**
     * НомОсн - Номер документа-основания
     *
     * @property string $number
     */
    private $number = null;

    /**
     * ДатаОсн - Дата документа-основания
     *
     * @property string $date
     */
    private $date = null;

    /**
     * ДопСвОсн - Дополнительные сведения документа-основания
     *
     * @property string $info
     */
    private $info = null;

    /**
     * Gets as name
     *
     * НаимОсн - Наименование документа-основания
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
     * НаимОсн - Наименование документа-основания
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
     * НомОсн - Номер документа-основания
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
     * НомОсн - Номер документа-основания
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
     * ДатаОсн - Дата документа-основания
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
     * ДатаОсн - Дата документа-основания
     *
     * @param string $date
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as info
     *
     * ДопСвОсн - Дополнительные сведения документа-основания
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * ДопСвОсн - Дополнительные сведения документа-основания
     *
     * @param string $info
     * @return self
     */
    public function setInfo($info)
    {
        $this->info = $info;
        return $this;
    }


}

