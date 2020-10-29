<?php

namespace AgentSIB\Diadoc\ProformaInvoice;

/**
 * Class representing VatType
 *
 * 
 * XSD Type: Vat
 */
class VatType
{

    /**
     * @property float $vatTotal
     */
    private $vatTotal = null;

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\EmptyType $withoutVat
     */
    private $withoutVat = null;

    /**
     * Gets as vatTotal
     *
     * @return float
     */
    public function getVatTotal()
    {
        return $this->vatTotal;
    }

    /**
     * Sets a new vatTotal
     *
     * @param float $vatTotal
     * @return self
     */
    public function setVatTotal($vatTotal)
    {
        $this->vatTotal = $vatTotal;
        return $this;
    }

    /**
     * Gets as withoutVat
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\EmptyType
     */
    public function getWithoutVat()
    {
        return $this->withoutVat;
    }

    /**
     * Sets a new withoutVat
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\EmptyType $withoutVat
     * @return self
     */
    public function setWithoutVat(\AgentSIB\Diadoc\ProformaInvoice\EmptyType $withoutVat)
    {
        $this->withoutVat = $withoutVat;
        return $this;
    }


}

