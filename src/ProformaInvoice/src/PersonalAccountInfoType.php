<?php

namespace AgentSIB\Diadoc\ProformaInvoice;

/**
 * Class representing PersonalAccountInfoType
 *
 * 
 * XSD Type: PersonalAccountInfo
 */
class PersonalAccountInfoType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property float $value
     */
    private $value = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

