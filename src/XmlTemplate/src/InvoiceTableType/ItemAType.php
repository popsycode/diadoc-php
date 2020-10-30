<?php

namespace AgentSIB\Diadoc\XmlTemplate\InvoiceTableType;

/**
 * Class representing ItemAType
 */
class ItemAType
{

    /**
     * НаимТов - наименование товара
     *
     * @property string $product
     */
    private $product = null;

    /**
     * ОКЕИ_Тов - единицы измерения товара (код)
     *
     * @property string $unit
     */
    private $unit = null;

    /**
     * НаимЕдИзм - наименование единицы измерения товара.Пользователь заполняет, если Unit=ОКЕИ_Тов='0000'.
     *
     * @property string $unitName
     */
    private $unitName = null;

    /**
     * КолТов - количество единиц товара
     *
     * @property float $quantity
     */
    private $quantity = null;

    /**
     * ЦенаТов - цена за единицу товара
     *
     * @property float $price
     */
    private $price = null;

    /**
     * СумАкциз - акциз
     *
     * @property float $excise
     */
    private $excise = null;

    /**
     * НалСт - ставка налога
     *
     * @property string $taxRate
     */
    private $taxRate = null;

    /**
     * СтТовБезНДС - сумма без учета налога
     *
     * @property float $subtotalWithVatExcluded
     */
    private $subtotalWithVatExcluded = null;

    /**
     * СумНал - сумма налога
     *
     * @property float $vat
     */
    private $vat = null;

    /**
     * Без НДС. Указывается, если для товара не требуется НДС
     *
     * @property string $withoutVat
     */
    private $withoutVat = null;

    /**
     * СтТовУчНал - сумма всего
     *
     * @property float $subtotal
     */
    private $subtotal = null;

    /**
     * ПрТовРаб - Признак товар-работа-услуга
     *  1 - имущество;
     *  2 - работа;
     *  3 - услуга;
     *  4 – имущественные права;
     *  5 - иное
     *
     * @property integer $itemMark
     */
    private $itemMark = null;

    /**
     * ДопПризн - Дополнительная информация о признаке
     *
     * @property string $additionalProperty
     */
    private $additionalProperty = null;

    /**
     * КодТов - Характеристика/код/артикул/сорт товара
     *
     * @property string $itemVendorCode
     */
    private $itemVendorCode = null;

    /**
     * НадлОтп - Количество надлежит отпустить
     *
     * @property float $itemToRelease
     */
    private $itemToRelease = null;

    /**
     * ХарактерТов - Характеристика/описание товара
     *
     * @property string $itemCharact
     */
    private $itemCharact = null;

    /**
     * АртикулТов - Артикул товара
     *
     * @property string $itemArticle
     */
    private $itemArticle = null;

    /**
     * СортТов - Сорт товара
     *
     * @property string $itemKind
     */
    private $itemKind = null;

    /**
     * КодКат - Код каталога
     *
     * @property string $catalogCode
     */
    private $catalogCode = null;

    /**
     * КодВидТов - Код вида товара
     *
     * @property string $itemTypeCode
     */
    private $itemTypeCode = null;

    /**
     * @property \AgentSIB\Diadoc\XmlTemplate\CustomsDeclarationType[] $customsDeclarations
     */
    private $customsDeclarations = null;

    /**
     * @property \AgentSIB\Diadoc\XmlTemplate\AdditionalInfoType[] $additionalInfos
     */
    private $additionalInfos = null;

    /**
     * @property \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemTracingInfosAType\ItemTracingInfoAType[] $itemTracingInfos
     */
    private $itemTracingInfos = null;

    /**
     * @property \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemIdentificationNumbersAType\ItemIdentificationNumberAType[] $itemIdentificationNumbers
     */
    private $itemIdentificationNumbers = null;

    /**
     * Gets as product
     *
     * НаимТов - наименование товара
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * НаимТов - наименование товара
     *
     * @param string $product
     * @return self
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Gets as unit
     *
     * ОКЕИ_Тов - единицы измерения товара (код)
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
     * ОКЕИ_Тов - единицы измерения товара (код)
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
     * Gets as unitName
     *
     * НаимЕдИзм - наименование единицы измерения товара.Пользователь заполняет, если Unit=ОКЕИ_Тов='0000'.
     *
     * @return string
     */
    public function getUnitName()
    {
        return $this->unitName;
    }

    /**
     * Sets a new unitName
     *
     * НаимЕдИзм - наименование единицы измерения товара.Пользователь заполняет, если Unit=ОКЕИ_Тов='0000'.
     *
     * @param string $unitName
     * @return self
     */
    public function setUnitName($unitName)
    {
        $this->unitName = $unitName;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * КолТов - количество единиц товара
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
     * КолТов - количество единиц товара
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
     * Gets as price
     *
     * ЦенаТов - цена за единицу товара
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * ЦенаТов - цена за единицу товара
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as excise
     *
     * СумАкциз - акциз
     *
     * @return float
     */
    public function getExcise()
    {
        return $this->excise;
    }

    /**
     * Sets a new excise
     *
     * СумАкциз - акциз
     *
     * @param float $excise
     * @return self
     */
    public function setExcise($excise)
    {
        $this->excise = $excise;
        return $this;
    }

    /**
     * Gets as taxRate
     *
     * НалСт - ставка налога
     *
     * @return string
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * Sets a new taxRate
     *
     * НалСт - ставка налога
     *
     * @param string $taxRate
     * @return self
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * Gets as subtotalWithVatExcluded
     *
     * СтТовБезНДС - сумма без учета налога
     *
     * @return float
     */
    public function getSubtotalWithVatExcluded()
    {
        return $this->subtotalWithVatExcluded;
    }

    /**
     * Sets a new subtotalWithVatExcluded
     *
     * СтТовБезНДС - сумма без учета налога
     *
     * @param float $subtotalWithVatExcluded
     * @return self
     */
    public function setSubtotalWithVatExcluded($subtotalWithVatExcluded)
    {
        $this->subtotalWithVatExcluded = $subtotalWithVatExcluded;
        return $this;
    }

    /**
     * Gets as vat
     *
     * СумНал - сумма налога
     *
     * @return float
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Sets a new vat
     *
     * СумНал - сумма налога
     *
     * @param float $vat
     * @return self
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
        return $this;
    }

    /**
     * Gets as withoutVat
     *
     * Без НДС. Указывается, если для товара не требуется НДС
     *
     * @return string
     */
    public function getWithoutVat()
    {
        return $this->withoutVat;
    }

    /**
     * Sets a new withoutVat
     *
     * Без НДС. Указывается, если для товара не требуется НДС
     *
     * @param string $withoutVat
     * @return self
     */
    public function setWithoutVat($withoutVat)
    {
        $this->withoutVat = $withoutVat;
        return $this;
    }

    /**
     * Gets as subtotal
     *
     * СтТовУчНал - сумма всего
     *
     * @return float
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * Sets a new subtotal
     *
     * СтТовУчНал - сумма всего
     *
     * @param float $subtotal
     * @return self
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
        return $this;
    }

    /**
     * Gets as itemMark
     *
     * ПрТовРаб - Признак товар-работа-услуга
     *  1 - имущество;
     *  2 - работа;
     *  3 - услуга;
     *  4 – имущественные права;
     *  5 - иное
     *
     * @return integer
     */
    public function getItemMark()
    {
        return $this->itemMark;
    }

    /**
     * Sets a new itemMark
     *
     * ПрТовРаб - Признак товар-работа-услуга
     *  1 - имущество;
     *  2 - работа;
     *  3 - услуга;
     *  4 – имущественные права;
     *  5 - иное
     *
     * @param integer $itemMark
     * @return self
     */
    public function setItemMark($itemMark)
    {
        $this->itemMark = $itemMark;
        return $this;
    }

    /**
     * Gets as additionalProperty
     *
     * ДопПризн - Дополнительная информация о признаке
     *
     * @return string
     */
    public function getAdditionalProperty()
    {
        return $this->additionalProperty;
    }

    /**
     * Sets a new additionalProperty
     *
     * ДопПризн - Дополнительная информация о признаке
     *
     * @param string $additionalProperty
     * @return self
     */
    public function setAdditionalProperty($additionalProperty)
    {
        $this->additionalProperty = $additionalProperty;
        return $this;
    }

    /**
     * Gets as itemVendorCode
     *
     * КодТов - Характеристика/код/артикул/сорт товара
     *
     * @return string
     */
    public function getItemVendorCode()
    {
        return $this->itemVendorCode;
    }

    /**
     * Sets a new itemVendorCode
     *
     * КодТов - Характеристика/код/артикул/сорт товара
     *
     * @param string $itemVendorCode
     * @return self
     */
    public function setItemVendorCode($itemVendorCode)
    {
        $this->itemVendorCode = $itemVendorCode;
        return $this;
    }

    /**
     * Gets as itemToRelease
     *
     * НадлОтп - Количество надлежит отпустить
     *
     * @return float
     */
    public function getItemToRelease()
    {
        return $this->itemToRelease;
    }

    /**
     * Sets a new itemToRelease
     *
     * НадлОтп - Количество надлежит отпустить
     *
     * @param float $itemToRelease
     * @return self
     */
    public function setItemToRelease($itemToRelease)
    {
        $this->itemToRelease = $itemToRelease;
        return $this;
    }

    /**
     * Gets as itemCharact
     *
     * ХарактерТов - Характеристика/описание товара
     *
     * @return string
     */
    public function getItemCharact()
    {
        return $this->itemCharact;
    }

    /**
     * Sets a new itemCharact
     *
     * ХарактерТов - Характеристика/описание товара
     *
     * @param string $itemCharact
     * @return self
     */
    public function setItemCharact($itemCharact)
    {
        $this->itemCharact = $itemCharact;
        return $this;
    }

    /**
     * Gets as itemArticle
     *
     * АртикулТов - Артикул товара
     *
     * @return string
     */
    public function getItemArticle()
    {
        return $this->itemArticle;
    }

    /**
     * Sets a new itemArticle
     *
     * АртикулТов - Артикул товара
     *
     * @param string $itemArticle
     * @return self
     */
    public function setItemArticle($itemArticle)
    {
        $this->itemArticle = $itemArticle;
        return $this;
    }

    /**
     * Gets as itemKind
     *
     * СортТов - Сорт товара
     *
     * @return string
     */
    public function getItemKind()
    {
        return $this->itemKind;
    }

    /**
     * Sets a new itemKind
     *
     * СортТов - Сорт товара
     *
     * @param string $itemKind
     * @return self
     */
    public function setItemKind($itemKind)
    {
        $this->itemKind = $itemKind;
        return $this;
    }

    /**
     * Gets as catalogCode
     *
     * КодКат - Код каталога
     *
     * @return string
     */
    public function getCatalogCode()
    {
        return $this->catalogCode;
    }

    /**
     * Sets a new catalogCode
     *
     * КодКат - Код каталога
     *
     * @param string $catalogCode
     * @return self
     */
    public function setCatalogCode($catalogCode)
    {
        $this->catalogCode = $catalogCode;
        return $this;
    }

    /**
     * Gets as itemTypeCode
     *
     * КодВидТов - Код вида товара
     *
     * @return string
     */
    public function getItemTypeCode()
    {
        return $this->itemTypeCode;
    }

    /**
     * Sets a new itemTypeCode
     *
     * КодВидТов - Код вида товара
     *
     * @param string $itemTypeCode
     * @return self
     */
    public function setItemTypeCode($itemTypeCode)
    {
        $this->itemTypeCode = $itemTypeCode;
        return $this;
    }

    /**
     * Adds as customsDeclaration
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\CustomsDeclarationType $customsDeclaration
     */
    public function addToCustomsDeclarations(\AgentSIB\Diadoc\XmlTemplate\CustomsDeclarationType $customsDeclaration)
    {
        $this->customsDeclarations[] = $customsDeclaration;
        return $this;
    }

    /**
     * isset customsDeclarations
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustomsDeclarations($index)
    {
        return isset($this->customsDeclarations[$index]);
    }

    /**
     * unset customsDeclarations
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustomsDeclarations($index)
    {
        unset($this->customsDeclarations[$index]);
    }

    /**
     * Gets as customsDeclarations
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\CustomsDeclarationType[]
     */
    public function getCustomsDeclarations()
    {
        return $this->customsDeclarations;
    }

    /**
     * Sets a new customsDeclarations
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\CustomsDeclarationType[] $customsDeclarations
     * @return self
     */
    public function setCustomsDeclarations(array $customsDeclarations)
    {
        $this->customsDeclarations = $customsDeclarations;
        return $this;
    }

    /**
     * Adds as additionalInfo
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\AdditionalInfoType $additionalInfo
     */
    public function addToAdditionalInfos(\AgentSIB\Diadoc\XmlTemplate\AdditionalInfoType $additionalInfo)
    {
        $this->additionalInfos[] = $additionalInfo;
        return $this;
    }

    /**
     * isset additionalInfos
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalInfos($index)
    {
        return isset($this->additionalInfos[$index]);
    }

    /**
     * unset additionalInfos
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalInfos($index)
    {
        unset($this->additionalInfos[$index]);
    }

    /**
     * Gets as additionalInfos
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\AdditionalInfoType[]
     */
    public function getAdditionalInfos()
    {
        return $this->additionalInfos;
    }

    /**
     * Sets a new additionalInfos
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\AdditionalInfoType[] $additionalInfos
     * @return self
     */
    public function setAdditionalInfos(array $additionalInfos)
    {
        $this->additionalInfos = $additionalInfos;
        return $this;
    }

    /**
     * Adds as itemTracingInfo
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemTracingInfosAType\ItemTracingInfoAType $itemTracingInfo
     */
    public function addToItemTracingInfos(\AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemTracingInfosAType\ItemTracingInfoAType $itemTracingInfo)
    {
        $this->itemTracingInfos[] = $itemTracingInfo;
        return $this;
    }

    /**
     * isset itemTracingInfos
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemTracingInfos($index)
    {
        return isset($this->itemTracingInfos[$index]);
    }

    /**
     * unset itemTracingInfos
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemTracingInfos($index)
    {
        unset($this->itemTracingInfos[$index]);
    }

    /**
     * Gets as itemTracingInfos
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemTracingInfosAType\ItemTracingInfoAType[]
     */
    public function getItemTracingInfos()
    {
        return $this->itemTracingInfos;
    }

    /**
     * Sets a new itemTracingInfos
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemTracingInfosAType\ItemTracingInfoAType[] $itemTracingInfos
     * @return self
     */
    public function setItemTracingInfos(array $itemTracingInfos)
    {
        $this->itemTracingInfos = $itemTracingInfos;
        return $this;
    }

    /**
     * Adds as itemIdentificationNumber
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemIdentificationNumbersAType\ItemIdentificationNumberAType $itemIdentificationNumber
     */
    public function addToItemIdentificationNumbers(\AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemIdentificationNumbersAType\ItemIdentificationNumberAType $itemIdentificationNumber)
    {
        $this->itemIdentificationNumbers[] = $itemIdentificationNumber;
        return $this;
    }

    /**
     * isset itemIdentificationNumbers
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemIdentificationNumbers($index)
    {
        return isset($this->itemIdentificationNumbers[$index]);
    }

    /**
     * unset itemIdentificationNumbers
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemIdentificationNumbers($index)
    {
        unset($this->itemIdentificationNumbers[$index]);
    }

    /**
     * Gets as itemIdentificationNumbers
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemIdentificationNumbersAType\ItemIdentificationNumberAType[]
     */
    public function getItemIdentificationNumbers()
    {
        return $this->itemIdentificationNumbers;
    }

    /**
     * Sets a new itemIdentificationNumbers
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemIdentificationNumbersAType\ItemIdentificationNumberAType[] $itemIdentificationNumbers
     * @return self
     */
    public function setItemIdentificationNumbers(array $itemIdentificationNumbers)
    {
        $this->itemIdentificationNumbers = $itemIdentificationNumbers;
        return $this;
    }


}

