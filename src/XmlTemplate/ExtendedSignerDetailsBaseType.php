<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing ExtendedSignerDetailsBaseType
 *
 * 
 * XSD Type: ExtendedSignerDetailsBase
 */
class ExtendedSignerDetailsBaseType
{

    /**
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * @var string $middleName
     */
    private $middleName = null;

    /**
     * Должность
     *
     * @var string $position
     */
    private $position = null;

    /**
     * ИННОбязательно для SignerType=1 (ЮЛ) и SignerType=2 (ИП)Опционально для SignerType=3 (ФЛ)
     *
     * @var string $inn
     */
    private $inn = null;

    /**
     * СвГосРегИП - Реквизиты свидетельства о государственной регистрации индивидуального предпринимателя
     *
     * @var string $registrationCertificate
     */
    private $registrationCertificate = null;

    /**
     * 1 – Представитель юридического лица (ЮЛ)
     *  2 - Индивидуальный предприниматель (ИП)
     *  3 - Физическое лицо (ФЛ)
     *
     * @var string $signerType
     */
    private $signerType = null;

    /**
     * НаимОрг
     *
     * @var string $signerOrganizationName
     */
    private $signerOrganizationName = null;

    /**
     * ИныеСвед - Иные сведения, идентифицирующие физическое лицо
     *
     * @var string $signerInfo
     */
    private $signerInfo = null;

    /**
     * ОснПолн - Основание полномочий (доверия)
     *
     * @var string $signerPowersBase
     */
    private $signerPowersBase = null;

    /**
     * ОснПолнОрг - Основание полномочий (доверия) организации
     *
     * @var string $signerOrgPowersBase
     */
    private $signerOrgPowersBase = null;

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
     * Должность
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
     * Должность
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
     * ИННОбязательно для SignerType=1 (ЮЛ) и SignerType=2 (ИП)Опционально для SignerType=3 (ФЛ)
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
     * ИННОбязательно для SignerType=1 (ЮЛ) и SignerType=2 (ИП)Опционально для SignerType=3 (ФЛ)
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
     * Gets as registrationCertificate
     *
     * СвГосРегИП - Реквизиты свидетельства о государственной регистрации индивидуального предпринимателя
     *
     * @return string
     */
    public function getRegistrationCertificate()
    {
        return $this->registrationCertificate;
    }

    /**
     * Sets a new registrationCertificate
     *
     * СвГосРегИП - Реквизиты свидетельства о государственной регистрации индивидуального предпринимателя
     *
     * @param string $registrationCertificate
     * @return self
     */
    public function setRegistrationCertificate($registrationCertificate)
    {
        $this->registrationCertificate = $registrationCertificate;
        return $this;
    }

    /**
     * Gets as signerType
     *
     * 1 – Представитель юридического лица (ЮЛ)
     *  2 - Индивидуальный предприниматель (ИП)
     *  3 - Физическое лицо (ФЛ)
     *
     * @return string
     */
    public function getSignerType()
    {
        return $this->signerType;
    }

    /**
     * Sets a new signerType
     *
     * 1 – Представитель юридического лица (ЮЛ)
     *  2 - Индивидуальный предприниматель (ИП)
     *  3 - Физическое лицо (ФЛ)
     *
     * @param string $signerType
     * @return self
     */
    public function setSignerType($signerType)
    {
        $this->signerType = $signerType;
        return $this;
    }

    /**
     * Gets as signerOrganizationName
     *
     * НаимОрг
     *
     * @return string
     */
    public function getSignerOrganizationName()
    {
        return $this->signerOrganizationName;
    }

    /**
     * Sets a new signerOrganizationName
     *
     * НаимОрг
     *
     * @param string $signerOrganizationName
     * @return self
     */
    public function setSignerOrganizationName($signerOrganizationName)
    {
        $this->signerOrganizationName = $signerOrganizationName;
        return $this;
    }

    /**
     * Gets as signerInfo
     *
     * ИныеСвед - Иные сведения, идентифицирующие физическое лицо
     *
     * @return string
     */
    public function getSignerInfo()
    {
        return $this->signerInfo;
    }

    /**
     * Sets a new signerInfo
     *
     * ИныеСвед - Иные сведения, идентифицирующие физическое лицо
     *
     * @param string $signerInfo
     * @return self
     */
    public function setSignerInfo($signerInfo)
    {
        $this->signerInfo = $signerInfo;
        return $this;
    }

    /**
     * Gets as signerPowersBase
     *
     * ОснПолн - Основание полномочий (доверия)
     *
     * @return string
     */
    public function getSignerPowersBase()
    {
        return $this->signerPowersBase;
    }

    /**
     * Sets a new signerPowersBase
     *
     * ОснПолн - Основание полномочий (доверия)
     *
     * @param string $signerPowersBase
     * @return self
     */
    public function setSignerPowersBase($signerPowersBase)
    {
        $this->signerPowersBase = $signerPowersBase;
        return $this;
    }

    /**
     * Gets as signerOrgPowersBase
     *
     * ОснПолнОрг - Основание полномочий (доверия) организации
     *
     * @return string
     */
    public function getSignerOrgPowersBase()
    {
        return $this->signerOrgPowersBase;
    }

    /**
     * Sets a new signerOrgPowersBase
     *
     * ОснПолнОрг - Основание полномочий (доверия) организации
     *
     * @param string $signerOrgPowersBase
     * @return self
     */
    public function setSignerOrgPowersBase($signerOrgPowersBase)
    {
        $this->signerOrgPowersBase = $signerOrgPowersBase;
        return $this;
    }


}

