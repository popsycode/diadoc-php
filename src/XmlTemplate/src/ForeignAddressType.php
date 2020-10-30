<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing ForeignAddressType
 *
 * 
 * XSD Type: ForeignAddress
 */
class ForeignAddressType
{

    /**
     * страна (код)
     *
     * @property string $country
     */
    private $country = null;

    /**
     * текст адреса
     *
     * @property string $address
     */
    private $address = null;

    /**
     * Gets as country
     *
     * страна (код)
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * страна (код)
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as address
     *
     * текст адреса
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * текст адреса
     *
     * @param string $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }


}

