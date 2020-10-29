<?php

namespace AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceItemType;

/**
 * Class representing ExciseAType
 */
class ExciseAType
{

    /**
     * @property float $exciseTotal
     */
    private $exciseTotal = null;

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\EmptyType $withoutExcise
     */
    private $withoutExcise = null;

    /**
     * Gets as exciseTotal
     *
     * @return float
     */
    public function getExciseTotal()
    {
        return $this->exciseTotal;
    }

    /**
     * Sets a new exciseTotal
     *
     * @param float $exciseTotal
     * @return self
     */
    public function setExciseTotal($exciseTotal)
    {
        $this->exciseTotal = $exciseTotal;
        return $this;
    }

    /**
     * Gets as withoutExcise
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\EmptyType
     */
    public function getWithoutExcise()
    {
        return $this->withoutExcise;
    }

    /**
     * Sets a new withoutExcise
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\EmptyType $withoutExcise
     * @return self
     */
    public function setWithoutExcise(\AgentSIB\Diadoc\ProformaInvoice\EmptyType $withoutExcise)
    {
        $this->withoutExcise = $withoutExcise;
        return $this;
    }


}

