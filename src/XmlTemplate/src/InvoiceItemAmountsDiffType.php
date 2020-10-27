<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing InvoiceItemAmountsDiffType
 *
 * 
 * XSD Type: InvoiceItemAmountsDiff
 */
class InvoiceItemAmountsDiffType
{

    /**
     * акциз
     *
     * @var float $excise
     */
    private $excise = null;

    /**
     * сумма без учета налога
     *
     * @var float $subtotalWithVatExcluded
     */
    private $subtotalWithVatExcluded = null;

    /**
     * сумма налога
     *
     * @var float $vat
     */
    private $vat = null;

    /**
     * сумма с учетом налога
     *
     * @var float $subtotal
     */
    private $subtotal = null;

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

