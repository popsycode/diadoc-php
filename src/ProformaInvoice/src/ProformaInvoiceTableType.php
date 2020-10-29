<?php

namespace AgentSIB\Diadoc\ProformaInvoice;

/**
 * Class representing ProformaInvoiceTableType
 *
 * 
 * XSD Type: ProformaInvoiceTable
 */
class ProformaInvoiceTableType
{

    /**
     * @property float $totalWithVatExcluded
     */
    private $totalWithVatExcluded = null;

    /**
     * @property float $total
     */
    private $total = null;

    /**
     * @property float $grandTotal
     */
    private $grandTotal = null;

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceItemType[] $proformaInvoiceItem
     */
    private $proformaInvoiceItem = array(
        
    );

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\VatType $vatTotal
     */
    private $vatTotal = null;

    /**
     * Gets as totalWithVatExcluded
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
     * @param float $totalWithVatExcluded
     * @return self
     */
    public function setTotalWithVatExcluded($totalWithVatExcluded)
    {
        $this->totalWithVatExcluded = $totalWithVatExcluded;
        return $this;
    }

    /**
     * Gets as total
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
     * @param float $total
     * @return self
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Gets as grandTotal
     *
     * @return float
     */
    public function getGrandTotal()
    {
        return $this->grandTotal;
    }

    /**
     * Sets a new grandTotal
     *
     * @param float $grandTotal
     * @return self
     */
    public function setGrandTotal($grandTotal)
    {
        $this->grandTotal = $grandTotal;
        return $this;
    }

    /**
     * Adds as proformaInvoiceItem
     *
     * @return self
     * @param \AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceItemType $proformaInvoiceItem
     */
    public function addToProformaInvoiceItem(\AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceItemType $proformaInvoiceItem)
    {
        $this->proformaInvoiceItem[] = $proformaInvoiceItem;
        return $this;
    }

    /**
     * isset proformaInvoiceItem
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProformaInvoiceItem($index)
    {
        return isset($this->proformaInvoiceItem[$index]);
    }

    /**
     * unset proformaInvoiceItem
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProformaInvoiceItem($index)
    {
        unset($this->proformaInvoiceItem[$index]);
    }

    /**
     * Gets as proformaInvoiceItem
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceItemType[]
     */
    public function getProformaInvoiceItem()
    {
        return $this->proformaInvoiceItem;
    }

    /**
     * Sets a new proformaInvoiceItem
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceItemType[] $proformaInvoiceItem
     * @return self
     */
    public function setProformaInvoiceItem(array $proformaInvoiceItem)
    {
        $this->proformaInvoiceItem = $proformaInvoiceItem;
        return $this;
    }

    /**
     * Gets as vatTotal
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\VatType
     */
    public function getVatTotal()
    {
        return $this->vatTotal;
    }

    /**
     * Sets a new vatTotal
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\VatType $vatTotal
     * @return self
     */
    public function setVatTotal(\AgentSIB\Diadoc\ProformaInvoice\VatType $vatTotal)
    {
        $this->vatTotal = $vatTotal;
        return $this;
    }


}

