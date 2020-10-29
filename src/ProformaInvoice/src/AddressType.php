<?php

namespace AgentSIB\Diadoc\ProformaInvoice;

/**
 * Class representing AddressType
 *
 * 
 * XSD Type: Address
 */
class AddressType
{

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\RussianAddressType $russianAddress
     */
    private $russianAddress = null;

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\ForeignAddressType $foreignAddress
     */
    private $foreignAddress = null;

    /**
     * @property string $addressCode
     */
    private $addressCode = null;

    /**
     * Gets as russianAddress
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\RussianAddressType
     */
    public function getRussianAddress()
    {
        return $this->russianAddress;
    }

    /**
     * Sets a new russianAddress
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\RussianAddressType $russianAddress
     * @return self
     */
    public function setRussianAddress(\AgentSIB\Diadoc\ProformaInvoice\RussianAddressType $russianAddress)
    {
        $this->russianAddress = $russianAddress;
        return $this;
    }

    /**
     * Gets as foreignAddress
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\ForeignAddressType
     */
    public function getForeignAddress()
    {
        return $this->foreignAddress;
    }

    /**
     * Sets a new foreignAddress
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\ForeignAddressType $foreignAddress
     * @return self
     */
    public function setForeignAddress(\AgentSIB\Diadoc\ProformaInvoice\ForeignAddressType $foreignAddress)
    {
        $this->foreignAddress = $foreignAddress;
        return $this;
    }

    /**
     * Gets as addressCode
     *
     * @return string
     */
    public function getAddressCode()
    {
        return $this->addressCode;
    }

    /**
     * Sets a new addressCode
     *
     * @param string $addressCode
     * @return self
     */
    public function setAddressCode($addressCode)
    {
        $this->addressCode = $addressCode;
        return $this;
    }


}

