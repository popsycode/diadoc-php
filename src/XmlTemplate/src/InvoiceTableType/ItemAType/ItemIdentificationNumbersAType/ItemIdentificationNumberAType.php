<?php

namespace AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemIdentificationNumbersAType;

/**
 * Class representing ItemIdentificationNumberAType
 */
class ItemIdentificationNumberAType
{

    /**
     * ИдентТрансУпак - Уникальный идентификатор
     *  транспортной упаковки
     *
     * @var string $transPackageId
     */
    private $transPackageId = null;

    /**
     * КИЗ - Контрольный идентификационный знак
     *
     * @var string[] $unit
     */
    private $unit = [
        
    ];

    /**
     * НомУпак - Уникальный идентификатор вторичной
     *  (потребительской)/третичной (заводской, транспортной)
     *  упаковки
     *
     * @var string[] $packageId
     */
    private $packageId = [
        
    ];

    /**
     * Gets as transPackageId
     *
     * ИдентТрансУпак - Уникальный идентификатор
     *  транспортной упаковки
     *
     * @return string
     */
    public function getTransPackageId()
    {
        return $this->transPackageId;
    }

    /**
     * Sets a new transPackageId
     *
     * ИдентТрансУпак - Уникальный идентификатор
     *  транспортной упаковки
     *
     * @param string $transPackageId
     * @return self
     */
    public function setTransPackageId($transPackageId)
    {
        $this->transPackageId = $transPackageId;
        return $this;
    }

    /**
     * Adds as unit
     *
     * КИЗ - Контрольный идентификационный знак
     *
     * @return self
     * @param string $unit
     */
    public function addToUnit($unit)
    {
        $this->unit[] = $unit;
        return $this;
    }

    /**
     * isset unit
     *
     * КИЗ - Контрольный идентификационный знак
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUnit($index)
    {
        return isset($this->unit[$index]);
    }

    /**
     * unset unit
     *
     * КИЗ - Контрольный идентификационный знак
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUnit($index)
    {
        unset($this->unit[$index]);
    }

    /**
     * Gets as unit
     *
     * КИЗ - Контрольный идентификационный знак
     *
     * @return string[]
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * КИЗ - Контрольный идентификационный знак
     *
     * @param string $unit
     * @return self
     */
    public function setUnit(array $unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Adds as packageId
     *
     * НомУпак - Уникальный идентификатор вторичной
     *  (потребительской)/третичной (заводской, транспортной)
     *  упаковки
     *
     * @return self
     * @param string $packageId
     */
    public function addToPackageId($packageId)
    {
        $this->packageId[] = $packageId;
        return $this;
    }

    /**
     * isset packageId
     *
     * НомУпак - Уникальный идентификатор вторичной
     *  (потребительской)/третичной (заводской, транспортной)
     *  упаковки
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackageId($index)
    {
        return isset($this->packageId[$index]);
    }

    /**
     * unset packageId
     *
     * НомУпак - Уникальный идентификатор вторичной
     *  (потребительской)/третичной (заводской, транспортной)
     *  упаковки
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackageId($index)
    {
        unset($this->packageId[$index]);
    }

    /**
     * Gets as packageId
     *
     * НомУпак - Уникальный идентификатор вторичной
     *  (потребительской)/третичной (заводской, транспортной)
     *  упаковки
     *
     * @return string[]
     */
    public function getPackageId()
    {
        return $this->packageId;
    }

    /**
     * Sets a new packageId
     *
     * НомУпак - Уникальный идентификатор вторичной
     *  (потребительской)/третичной (заводской, транспортной)
     *  упаковки
     *
     * @param string $packageId
     * @return self
     */
    public function setPackageId(array $packageId)
    {
        $this->packageId = $packageId;
        return $this;
    }


}

