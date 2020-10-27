<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing ExtendedOrganizationDetailsType
 *
 * 
 * XSD Type: ExtendedOrganizationDetails
 */
class ExtendedOrganizationDetailsType extends ExtendedOrganizationDetailsManualFillingType
{

    /**
     * НаимОрг - название организации
     *
     * @var string $orgName
     */
    private $orgName = null;

    /**
     * ИНН ФЛ-ИНН - ИНН
     *
     * @var string $inn
     */
    private $inn = null;

    /**
     * КПП
     *
     * @var string $kpp
     */
    private $kpp = null;

    /**
     * идентификатор участника ЭДО
     *
     * @var string $fnsParticipantId
     */
    private $fnsParticipantId = null;

    /**
     * Адрес
     *
     * @var \AgentSIB\Diadoc\XmlTemplate\AddressType $address
     */
    private $address = null;

    /**
     * Gets as orgName
     *
     * НаимОрг - название организации
     *
     * @return string
     */
    public function getOrgName()
    {
        return $this->orgName;
    }

    /**
     * Sets a new orgName
     *
     * НаимОрг - название организации
     *
     * @param string $orgName
     * @return self
     */
    public function setOrgName($orgName)
    {
        $this->orgName = $orgName;
        return $this;
    }

    /**
     * Gets as inn
     *
     * ИНН ФЛ-ИНН - ИНН
     *
     * @return string
     */
    public function getInn()
    {
        return $this->inn;
    }

    /**
     * Sets a new inn
     *
     * ИНН ФЛ-ИНН - ИНН
     *
     * @param string $inn
     * @return self
     */
    public function setInn($inn)
    {
        $this->inn = $inn;
        return $this;
    }

    /**
     * Gets as kpp
     *
     * КПП
     *
     * @return string
     */
    public function getKpp()
    {
        return $this->kpp;
    }

    /**
     * Sets a new kpp
     *
     * КПП
     *
     * @param string $kpp
     * @return self
     */
    public function setKpp($kpp)
    {
        $this->kpp = $kpp;
        return $this;
    }

    /**
     * Gets as fnsParticipantId
     *
     * идентификатор участника ЭДО
     *
     * @return string
     */
    public function getFnsParticipantId()
    {
        return $this->fnsParticipantId;
    }

    /**
     * Sets a new fnsParticipantId
     *
     * идентификатор участника ЭДО
     *
     * @param string $fnsParticipantId
     * @return self
     */
    public function setFnsParticipantId($fnsParticipantId)
    {
        $this->fnsParticipantId = $fnsParticipantId;
        return $this;
    }

    /**
     * Gets as address
     *
     * Адрес
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Адрес
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\AddressType $address
     * @return self
     */
    public function setAddress(\AgentSIB\Diadoc\XmlTemplate\AddressType $address)
    {
        $this->address = $address;
        return $this;
    }


}

