<?php

namespace AgentSIB\Diadoc\ProformaInvoice;

/**
 * Class representing SignerDetailsType
 *
 * 
 * XSD Type: SignerDetails
 */
class SignerDetailsType
{

    /**
     * @property string $lastName
     */
    private $lastName = null;

    /**
     * @property string $firstName
     */
    private $firstName = null;

    /**
     * @property string $middleName
     */
    private $middleName = null;

    /**
     * Обязательно для титула покупателя
     *
     * @property string $position
     */
    private $position = null;

    /**
     * @property string $inn
     */
    private $inn = null;

    /**
     * @property string $soleProprietorRegistrationCertificate
     */
    private $soleProprietorRegistrationCertificate = null;

    /**
     * Gets as lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Gets as firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as middleName
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Sets a new middleName
     *
     * @param string $middleName
     * @return self
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * Gets as position
     *
     * Обязательно для титула покупателя
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * Обязательно для титула покупателя
     *
     * @param string $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as inn
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
     * @param string $inn
     * @return self
     */
    public function setInn($inn)
    {
        $this->inn = $inn;
        return $this;
    }

    /**
     * Gets as soleProprietorRegistrationCertificate
     *
     * @return string
     */
    public function getSoleProprietorRegistrationCertificate()
    {
        return $this->soleProprietorRegistrationCertificate;
    }

    /**
     * Sets a new soleProprietorRegistrationCertificate
     *
     * @param string $soleProprietorRegistrationCertificate
     * @return self
     */
    public function setSoleProprietorRegistrationCertificate($soleProprietorRegistrationCertificate)
    {
        $this->soleProprietorRegistrationCertificate = $soleProprietorRegistrationCertificate;
        return $this;
    }


}

