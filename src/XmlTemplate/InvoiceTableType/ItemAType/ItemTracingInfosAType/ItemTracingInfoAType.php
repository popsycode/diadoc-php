<?php

namespace AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemTracingInfosAType;

/**
 * Class representing ItemTracingInfoAType
 */
class ItemTracingInfoAType
{

    /**
     * НомТовПрослеж - Регистрационный номер партии
     *  товара
     *
     * @var string $regNumberUnit
     */
    private $regNumberUnit = null;

    /**
     * ЕдИзмПрослеж - Единица количественного учета
     *  товара, используемая в целях осуществления прослеживаемости
     *
     * @var string $unit
     */
    private $unit = null;

    /**
     * КолВЕдПрослеж - Количество товара в единицах
     *  измерения прослеживаемого товара
     *
     * @var float $quantity
     */
    private $quantity = null;

    /**
     * ДопПрослеж - Дополнительный показатель для
     *  идентификации товаров, подлежащих прослеживаемости
     *
     * @var string $itemAddInfo
     */
    private $itemAddInfo = null;

    /**
     * Gets as regNumberUnit
     *
     * НомТовПрослеж - Регистрационный номер партии
     *  товара
     *
     * @return string
     */
    public function getRegNumberUnit()
    {
        return $this->regNumberUnit;
    }

    /**
     * Sets a new regNumberUnit
     *
     * НомТовПрослеж - Регистрационный номер партии
     *  товара
     *
     * @param string $regNumberUnit
     * @return self
     */
    public function setRegNumberUnit($regNumberUnit)
    {
        $this->regNumberUnit = $regNumberUnit;
        return $this;
    }

    /**
     * Gets as unit
     *
     * ЕдИзмПрослеж - Единица количественного учета
     *  товара, используемая в целях осуществления прослеживаемости
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * ЕдИзмПрослеж - Единица количественного учета
     *  товара, используемая в целях осуществления прослеживаемости
     *
     * @param string $unit
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * КолВЕдПрослеж - Количество товара в единицах
     *  измерения прослеживаемого товара
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * КолВЕдПрослеж - Количество товара в единицах
     *  измерения прослеживаемого товара
     *
     * @param float $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as itemAddInfo
     *
     * ДопПрослеж - Дополнительный показатель для
     *  идентификации товаров, подлежащих прослеживаемости
     *
     * @return string
     */
    public function getItemAddInfo()
    {
        return $this->itemAddInfo;
    }

    /**
     * Sets a new itemAddInfo
     *
     * ДопПрослеж - Дополнительный показатель для
     *  идентификации товаров, подлежащих прослеживаемости
     *
     * @param string $itemAddInfo
     * @return self
     */
    public function setItemAddInfo($itemAddInfo)
    {
        $this->itemAddInfo = $itemAddInfo;
        return $this;
    }


}

