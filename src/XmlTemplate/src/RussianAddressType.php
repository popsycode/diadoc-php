<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing RussianAddressType
 *
 * 
 * XSD Type: RussianAddress
 */
class RussianAddressType
{

    /**
     * индекс
     *
     * @var string $zipCode
     */
    private $zipCode = null;

    /**
     * регион (код)
     *
     * @var string $region
     */
    private $region = null;

    /**
     * район
     *
     * @var string $territory
     */
    private $territory = null;

    /**
     * город
     *
     * @var string $city
     */
    private $city = null;

    /**
     * населенный пункт
     *
     * @var string $locality
     */
    private $locality = null;

    /**
     * улица
     *
     * @var string $street
     */
    private $street = null;

    /**
     * дом
     *
     * @var string $building
     */
    private $building = null;

    /**
     * корпус
     *
     * @var string $block
     */
    private $block = null;

    /**
     * квартира
     *
     * @var string $apartment
     */
    private $apartment = null;

    /**
     * Gets as zipCode
     *
     * индекс
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Sets a new zipCode
     *
     * индекс
     *
     * @param string $zipCode
     * @return self
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * Gets as region
     *
     * регион (код)
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets a new region
     *
     * регион (код)
     *
     * @param string $region
     * @return self
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * Gets as territory
     *
     * район
     *
     * @return string
     */
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * Sets a new territory
     *
     * район
     *
     * @param string $territory
     * @return self
     */
    public function setTerritory($territory)
    {
        $this->territory = $territory;
        return $this;
    }

    /**
     * Gets as city
     *
     * город
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * город
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as locality
     *
     * населенный пункт
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Sets a new locality
     *
     * населенный пункт
     *
     * @param string $locality
     * @return self
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
        return $this;
    }

    /**
     * Gets as street
     *
     * улица
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * улица
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Gets as building
     *
     * дом
     *
     * @return string
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Sets a new building
     *
     * дом
     *
     * @param string $building
     * @return self
     */
    public function setBuilding($building)
    {
        $this->building = $building;
        return $this;
    }

    /**
     * Gets as block
     *
     * корпус
     *
     * @return string
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Sets a new block
     *
     * корпус
     *
     * @param string $block
     * @return self
     */
    public function setBlock($block)
    {
        $this->block = $block;
        return $this;
    }

    /**
     * Gets as apartment
     *
     * квартира
     *
     * @return string
     */
    public function getApartment()
    {
        return $this->apartment;
    }

    /**
     * Sets a new apartment
     *
     * квартира
     *
     * @param string $apartment
     * @return self
     */
    public function setApartment($apartment)
    {
        $this->apartment = $apartment;
        return $this;
    }


}

