<?php

namespace AgentSIB\Diadoc\ProformaInvoice;

/**
 * Class representing CorrectableInvoiceItemFieldsWithoutTaxRateType
 *
 * 
 * XSD Type: CorrectableInvoiceItemFields_WithoutTaxRate
 */
class CorrectableInvoiceItemFieldsWithoutTaxRateType
{

    /**
     * единицы измерения товара (код)
     *
     * @property string $unit
     */
    private $unit = null;

    /**
     * количество единиц товара
     *
     * @property float $quantity
     */
    private $quantity = null;

    /**
     * цена за единицу товара
     *
     * @property float $price
     */
    private $price = null;

    /**
     * акциз
     *
     * @property float $excise
     */
    private $excise = null;

    /**
     * сумма без учета налога
     *
     * @property float $subtotalWithVatExcluded
     */
    private $subtotalWithVatExcluded = null;

    /**
     * сумма налога
     *
     * @property float $vat
     */
    private $vat = null;

    /**
     * сумма с учетом налога
     *
     * @property float $subtotal
     */
    private $subtotal = null;

    /**
     * Gets as unit
     *
     * единицы измерения товара (код)
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
     * единицы измерения товара (код)
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
     * количество единиц товара
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
     * количество единиц товара
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
     * цена за единицу товара
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
     * цена за единицу товара
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
     * акциз
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
     * акциз
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
     * Gets as subtotalWithVatExcluded
     *
     * сумма без учета налога
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
     * сумма без учета налога
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
     * сумма налога
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
     * сумма налога
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
     * Gets as subtotal
     *
     * сумма с учетом налога
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
     * сумма с учетом налога
     *
     * @param float $subtotal
     * @return self
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
        return $this;
    }


}

