<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing CorrectableInvoiceItemFieldsWithTaxedByAgentType
 *
 * 
 * XSD Type: CorrectableInvoiceItemFields_WithTaxedByAgent
 */
class CorrectableInvoiceItemFieldsWithTaxedByAgentType extends CorrectableInvoiceItemFieldsWithoutTaxRateType
{

    /**
     * ставка налога
     *
     * @var string $taxRate
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

