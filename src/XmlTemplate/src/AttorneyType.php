<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing AttorneyType
 *
 * 
 * XSD Type: Attorney
 */
class AttorneyType
{

    /**
     * Дата выдачи доверенности
     *
     * @var string $date
     */
    private $date = null;

    /**
     * Номер доверенности
     *
     * @var string $number
     */
    private $number = null;

    /**
     * Организация, представитель которой выдал доверенность
     *
     * @var string $issuerOrganizationName
     */
    private $issuerOrganizationName = null;

    /**
     * Дополнительная информация о выдавшем доверенность
     *
     * @var string $issuerAdditionalInfo
     */
    private $issuerAdditionalInfo = null;

    /**
     * Дополнительная информация о получившем доверенность
     *
     * @var string $recipientAdditionalInfo
     */
    private $recipientAdditionalInfo = null;

    /**
     * Лицо, выдавшее доверенность
     *
     * @var \AgentSIB\Diadoc\XmlTemplate\OfficialType $issuerPerson
     */
    private $issuerPerson = null;

    /**
     * Лицо, получившее доверенность
     *
     * @var \AgentSIB\Diadoc\XmlTemplate\OfficialType $recipientPerson
     */
    private $recipientPerson = null;

    /**
     * Gets as date
     *
     * Дата выдачи доверенности
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
     * Дата выдачи доверенности
     *
     * @param string $date
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as number
     *
     * Номер доверенности
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
     * Номер доверенности
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
     * Gets as issuerOrganizationName
     *
     * Организация, представитель которой выдал доверенность
     *
     * @return string
     */
    public function getIssuerOrganizationName()
    {
        return $this->issuerOrganizationName;
    }

    /**
     * Sets a new issuerOrganizationName
     *
     * Организация, представитель которой выдал доверенность
     *
     * @param string $issuerOrganizationName
     * @return self
     */
    public function setIssuerOrganizationName($issuerOrganizationName)
    {
        $this->issuerOrganizationName = $issuerOrganizationName;
        return $this;
    }

    /**
     * Gets as issuerAdditionalInfo
     *
     * Дополнительная информация о выдавшем доверенность
     *
     * @return string
     */
    public function getIssuerAdditionalInfo()
    {
        return $this->issuerAdditionalInfo;
    }

    /**
     * Sets a new issuerAdditionalInfo
     *
     * Дополнительная информация о выдавшем доверенность
     *
     * @param string $issuerAdditionalInfo
     * @return self
     */
    public function setIssuerAdditionalInfo($issuerAdditionalInfo)
    {
        $this->issuerAdditionalInfo = $issuerAdditionalInfo;
        return $this;
    }

    /**
     * Gets as recipientAdditionalInfo
     *
     * Дополнительная информация о получившем доверенность
     *
     * @return string
     */
    public function getRecipientAdditionalInfo()
    {
        return $this->recipientAdditionalInfo;
    }

    /**
     * Sets a new recipientAdditionalInfo
     *
     * Дополнительная информация о получившем доверенность
     *
     * @param string $recipientAdditionalInfo
     * @return self
     */
    public function setRecipientAdditionalInfo($recipientAdditionalInfo)
    {
        $this->recipientAdditionalInfo = $recipientAdditionalInfo;
        return $this;
    }

    /**
     * Gets as issuerPerson
     *
     * Лицо, выдавшее доверенность
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\OfficialType
     */
    public function getIssuerPerson()
    {
        return $this->issuerPerson;
    }

    /**
     * Sets a new issuerPerson
     *
     * Лицо, выдавшее доверенность
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\OfficialType $issuerPerson
     * @return self
     */
    public function setIssuerPerson(\AgentSIB\Diadoc\XmlTemplate\OfficialType $issuerPerson)
    {
        $this->issuerPerson = $issuerPerson;
        return $this;
    }

    /**
     * Gets as recipientPerson
     *
     * Лицо, получившее доверенность
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\OfficialType
     */
    public function getRecipientPerson()
    {
        return $this->recipientPerson;
    }

    /**
     * Sets a new recipientPerson
     *
     * Лицо, получившее доверенность
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\OfficialType $recipientPerson
     * @return self
     */
    public function setRecipientPerson(\AgentSIB\Diadoc\XmlTemplate\OfficialType $recipientPerson)
    {
        $this->recipientPerson = $recipientPerson;
        return $this;
    }


}

