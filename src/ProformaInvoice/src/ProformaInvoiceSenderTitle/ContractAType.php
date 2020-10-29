<?php

namespace AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceSenderTitle;

/**
 * Class representing ContractAType
 */
class ContractAType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $number
     */
    private $number = null;

    /**
     * @property string $date
     */
    private $date = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param string $date
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }


}

