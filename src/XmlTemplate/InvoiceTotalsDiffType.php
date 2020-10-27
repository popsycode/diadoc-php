<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing InvoiceTotalsDiffType
 *
 * 
 * XSD Type: InvoiceTotalsDiff
 */
class InvoiceTotalsDiffType
{

    /**
     * сумма без учета налога
     *
     * @var float $totalWithVatExcluded
     */
    private $totalWithVatExcluded = null;

    /**
     * сумма налога
     *
     * @var float $vat
     */
    private $vat = null;

    /**
     * сумма всего
     *
     * @var float $total
     */
    private $total = null;

    /**
     * Gets as totalWithVatExcluded
     *
     * сумма без учета налога
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
     * сумма без учета налога
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
     * Gets as total
     *
     * сумма всего
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
     * сумма всего
     *
     * @param float $total
     * @return self
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }


}

