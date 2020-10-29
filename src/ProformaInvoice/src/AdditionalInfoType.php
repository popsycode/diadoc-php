<?php

namespace AgentSIB\Diadoc\ProformaInvoice;

/**
 * Class representing AdditionalInfoType
 *
 * 
 * XSD Type: AdditionalInfo
 */
class AdditionalInfoType
{

    /**
     * Идентиф - идентификатор (наименование)
     *
     * @property string $id
     */
    private $id = null;

    /**
     * Значен - значение
     *
     * @property string $value
     */
    private $value = null;

    /**
     * Gets as id
     *
     * Идентиф - идентификатор (наименование)
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
     * Идентиф - идентификатор (наименование)
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
     * Значен - значение
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Значен - значение
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

