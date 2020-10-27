<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing InvoiceTableType
 *
 * ТаблСчФакт - Сведения таблицы счет фактуры
 * XSD Type: InvoiceTable
 */
class InvoiceTableType
{

    /**
     * СтТовБезНДСВсего - Сумма без учета налога
     *
     * @var float $totalWithVatExcluded
     */
    private $totalWithVatExcluded = null;

    /**
     * СумНалВсего - Сумма налога всего
     *
     * @var float $vat
     */
    private $vat = null;

    /**
     * Без НДС. Указывается, если для суммы налога всего не требуется НДС
     *
     * @var string $withoutVat
     */
    private $withoutVat = null;

    /**
     * СтТовУчНалВсего - Сумма всего
     *
     * @var float $total
     */
    private $total = null;

    /**
     * НеттоВс - Нетто всего
     *
     * @var float $totalNet
     */
    private $totalNet = null;

    /**
     * СведТов - информация о товарах
     *
     * @var \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType[] $item
     */
    private $item = [
        
    ];

    /**
     * Gets as totalWithVatExcluded
     *
     * СтТовБезНДСВсего - Сумма без учета налога
     *
     * @return float
     */
    public function getTotalWithVatExcluded()
    {
        return $this->totalWithVatExcluded;
    }

    /**
     * Sets a new totalWithVatExcluded
     *
     * СтТовБезНДСВсего - Сумма без учета налога
     *
     * @param float $totalWithVatExcluded
     * @return self
     */
    public function setTotalWithVatExcluded($totalWithVatExcluded)
    {
        $this->totalWithVatExcluded = $totalWithVatExcluded;
        return $this;
    }

    /**
     * Gets as vat
     *
     * СумНалВсего - Сумма налога всего
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
     * СумНалВсего - Сумма налога всего
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
     * Без НДС. Указывается, если для суммы налога всего не требуется НДС
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
     * Без НДС. Указывается, если для суммы налога всего не требуется НДС
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
     * Gets as total
     *
     * СтТовУчНалВсего - Сумма всего
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * СтТовУчНалВсего - Сумма всего
     *
     * @param float $total
     * @return self
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Gets as totalNet
     *
     * НеттоВс - Нетто всего
     *
     * @return float
     */
    public function getTotalNet()
    {
        return $this->totalNet;
    }

    /**
     * Sets a new totalNet
     *
     * НеттоВс - Нетто всего
     *
     * @param float $totalNet
     * @return self
     */
    public function setTotalNet($totalNet)
    {
        $this->totalNet = $totalNet;
        return $this;
    }

    /**
     * Adds as item
     *
     * СведТов - информация о товарах
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType $item
     */
    public function addToItem(\AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * СведТов - информация о товарах
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * СведТов - информация о товарах
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * СведТов - информация о товарах
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * СведТов - информация о товарах
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }


}

