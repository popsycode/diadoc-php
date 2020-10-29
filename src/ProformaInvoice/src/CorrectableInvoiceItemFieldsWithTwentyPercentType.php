<?php

namespace AgentSIB\Diadoc\ProformaInvoice;

/**
 * Class representing CorrectableInvoiceItemFieldsWithTwentyPercentType
 *
 * 
 * XSD Type: CorrectableInvoiceItemFields_WithTwentyPercent
 */
class CorrectableInvoiceItemFieldsWithTwentyPercentType extends CorrectableInvoiceItemFieldsWithoutTaxRateType
{

    /**
     * ставка налога
     *
     * @property string $taxRate
     */
    private $taxRate = null;

    /**
     * Gets as taxRate
     *
     * ставка налога
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
     * ставка налога
     *
     * @param string $taxRate
     * @return self
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;
        return $this;
    }


}

