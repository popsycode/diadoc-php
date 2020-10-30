<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing ProformaInvoiceItemType
 *
 * 
 * XSD Type: ProformaInvoiceItem
 */
class ProformaInvoiceItemType
{

    /**
     * @property string $product
     */
    private $product = null;

    /**
     * @property string $unitName
     */
    private $unitName = null;

    /**
     * @property string $unit
     */
    private $unit = null;

    /**
     * @property float $quantity
     */
    private $quantity = null;

    /**
     * @property float $price
     */
    private $price = null;

    /**
     * @property float $subtotalWithVatExcluded
     */
    private $subtotalWithVatExcluded = null;

    /**
     * @property string $taxRate
     */
    private $taxRate = null;

    /**
     * @property float $subtotal
     */
    private $subtotal = null;

    /**
     * @property \AgentSIB\Diadoc\XmlTemplate\ProformaInvoiceItemType\ExciseAType $excise
     */
    private $excise = null;

    /**
     * @property \AgentSIB\Diadoc\XmlTemplate\VatType $vat
     */
    private $vat = null;

    /**
     * @property \AgentSIB\Diadoc\XmlTemplate\AdditionalInfoType[] $additionalInfo
     */
    private $additionalInfo = array(
        
    );

    /**
     * Gets as product
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
     * @param string $product
     * @return self
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Gets as unitName
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
     * @param string $unitName
     * @return self
     */
    public function setUnitName($unitName)
    {
        $this->unitName = $unitName;
        return $this;
    }

    /**
     * Gets as unit
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
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
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
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
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
     * Gets as subtotalWithVatExcluded
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
     * @param float $subtotalWithVatExcluded
     * @return self
     */
    public function setSubtotalWithVatExcluded($subtotalWithVatExcluded)
    {
        $this->subtotalWithVatExcluded = $subtotalWithVatExcluded;
        return $this;
    }

    /**
     * Gets as taxRate
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
     * @param string $taxRate
     * @return self
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * Gets as subtotal
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
     * @param float $subtotal
     * @return self
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
        return $this;
    }

    /**
     * Gets as excise
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\ProformaInvoiceItemType\ExciseAType
     */
    public function getExcise()
    {
        return $this->excise;
    }

    /**
     * Sets a new excise
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\ProformaInvoiceItemType\ExciseAType $excise
     * @return self
     */
    public function setExcise(\AgentSIB\Diadoc\XmlTemplate\ProformaInvoiceItemType\ExciseAType $excise)
    {
        $this->excise = $excise;
        return $this;
    }

    /**
     * Gets as vat
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\VatType
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Sets a new vat
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\VatType $vat
     * @return self
     */
    public function setVat(\AgentSIB\Diadoc\XmlTemplate\VatType $vat)
    {
        $this->vat = $vat;
        return $this;
    }

    /**
     * Adds as additionalInfo
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\AdditionalInfoType $additionalInfo
     */
    public function addToAdditionalInfo(\AgentSIB\Diadoc\XmlTemplate\AdditionalInfoType $additionalInfo)
    {
        $this->additionalInfo[] = $additionalInfo;
        return $this;
    }

    /**
     * isset additionalInfo
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalInfo($index)
    {
        return isset($this->additionalInfo[$index]);
    }

    /**
     * unset additionalInfo
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalInfo($index)
    {
        unset($this->additionalInfo[$index]);
    }

    /**
     * Gets as additionalInfo
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\AdditionalInfoType[]
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Sets a new additionalInfo
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\AdditionalInfoType[] $additionalInfo
     * @return self
     */
    public function setAdditionalInfo(array $additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }


}

