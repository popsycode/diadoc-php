<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing AddressType
 *
 * 
 * XSD Type: Address
 */
class AddressType
{

    /**
     * @var \AgentSIB\Diadoc\XmlTemplate\RussianAddressType $russianAddress
     */
    private $russianAddress = null;

    /**
     * @var \AgentSIB\Diadoc\XmlTemplate\ForeignAddressType $foreignAddress
     */
    private $foreignAddress = null;

    /**
     * @var string $addressCode
     */
    private $addressCode = null;

    /**
     * Gets as russianAddress
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\RussianAddressType
     */
    public function getRussianAddress()
    {
        return $this->russianAddress;
    }

    /**
     * Sets a new russianAddress
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\RussianAddressType $russianAddress
     * @return self
     */
    public function setRussianAddress(\AgentSIB\Diadoc\XmlTemplate\RussianAddressType $russianAddress)
    {
        $this->russianAddress = $russianAddress;
        return $this;
    }

    /**
     * Gets as foreignAddress
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\ForeignAddressType
     */
    public function getForeignAddress()
    {
        return $this->foreignAddress;
    }

    /**
     * Sets a new foreignAddress
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\ForeignAddressType $foreignAddress
     * @return self
     */
    public function setForeignAddress(\AgentSIB\Diadoc\XmlTemplate\ForeignAddressType $foreignAddress)
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

