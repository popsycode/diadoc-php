<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing ExtendedOrganizationDetailsManualFillingType
 *
 * 
 * XSD Type: ExtendedOrganizationDetails_ManualFilling
 */
class ExtendedOrganizationDetailsManualFillingType
{

    /**
     * СвИП - СвЮЛУч - СвИнНеУч
     *
     * @var string $orgType
     */
    private $orgType = null;

    /**
     * ОКОПФ - Код организационно-правовой формы по ОКОПФ
     *
     * @var mixed $okopf
     */
    private $okopf = null;

    /**
     * ОКПО - код в общероссийском классификаторе предприятий и организаций
     *
     * @var string $okpo
     */
    private $okpo = null;

    /**
     * ОКДП - код основного вида деятельности по ОКДП
     *
     * @var string $okdp
     */
    private $okdp = null;

    /**
     * Тлф - Номер контактного телефона/факс
     *
     * @var string $phone
     */
    private $phone = null;

    /**
     * ЭлПочта - Адрес электронной почты
     *
     * @var string $email
     */
    private $email = null;

    /**
     * КорСчет - Корреспондентский счёт
     *
     * @var string $correspondentAccount
     */
    private $correspondentAccount = null;

    /**
     * НомерСчета - номер банковского счета
     *
     * @var string $bankAccountNumber
     */
    private $bankAccountNumber = null;

    /**
     * НаимБанк - название банка
     *
     * @var string $bankName
     */
    private $bankName = null;

    /**
     * БИК
     *
     * @var string $bankId
     */
    private $bankId = null;

    /**
     * СтруктПодр - структурное подразделение
     *
     * @var string $department
     */
    private $department = null;

    /**
     * ИнфДляУчаст - Информация для участника
     *
     * @var string $organizationAdditionalInfo
     */
    private $organizationAdditionalInfo = null;

    /**
     * ИныеСвед - Иные сведения, идентифицирующие ФЛ или ЮЛ
     *
     * @var string $organizationOrPersonInfo
     */
    private $organizationOrPersonInfo = null;

    /**
     * СвГосРегИп - Реквизиты свидетельства о государственной регистрации ИП
     *
     * @var string $individualEntityRegistrationCertificate
     */
    private $individualEntityRegistrationCertificate = null;

    /**
     * Идентиф - Идентификатор ЮЛ, нужен для автоматизированной обработки
     *
     * @var string $legalEntityId
     */
    private $legalEntityId = null;

    /**
     * КраткНазв - Краткое название
     *
     * @var string $shortOrgName
     */
    private $shortOrgName = null;

    /**
     * Страна
     *
     * @var string $country
     */
    private $country = null;

    /**
     * Gets as orgType
     *
     * СвИП - СвЮЛУч - СвИнНеУч
     *
     * @return string
     */
    public function getOrgType()
    {
        return $this->orgType;
    }

    /**
     * Sets a new orgType
     *
     * СвИП - СвЮЛУч - СвИнНеУч
     *
     * @param string $orgType
     * @return self
     */
    public function setOrgType($orgType)
    {
        $this->orgType = $orgType;
        return $this;
    }

    /**
     * Gets as okopf
     *
     * ОКОПФ - Код организационно-правовой формы по ОКОПФ
     *
     * @return mixed
     */
    public function getOkopf()
    {
        return $this->okopf;
    }

    /**
     * Sets a new okopf
     *
     * ОКОПФ - Код организационно-правовой формы по ОКОПФ
     *
     * @param mixed $okopf
     * @return self
     */
    public function setOkopf($okopf)
    {
        $this->okopf = $okopf;
        return $this;
    }

    /**
     * Gets as okpo
     *
     * ОКПО - код в общероссийском классификаторе предприятий и организаций
     *
     * @return string
     */
    public function getOkpo()
    {
        return $this->okpo;
    }

    /**
     * Sets a new okpo
     *
     * ОКПО - код в общероссийском классификаторе предприятий и организаций
     *
     * @param string $okpo
     * @return self
     */
    public function setOkpo($okpo)
    {
        $this->okpo = $okpo;
        return $this;
    }

    /**
     * Gets as okdp
     *
     * ОКДП - код основного вида деятельности по ОКДП
     *
     * @return string
     */
    public function getOkdp()
    {
        return $this->okdp;
    }

    /**
     * Sets a new okdp
     *
     * ОКДП - код основного вида деятельности по ОКДП
     *
     * @param string $okdp
     * @return self
     */
    public function setOkdp($okdp)
    {
        $this->okdp = $okdp;
        return $this;
    }

    /**
     * Gets as phone
     *
     * Тлф - Номер контактного телефона/факс
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * Тлф - Номер контактного телефона/факс
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Gets as email
     *
     * ЭлПочта - Адрес электронной почты
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * ЭлПочта - Адрес электронной почты
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as correspondentAccount
     *
     * КорСчет - Корреспондентский счёт
     *
     * @return string
     */
    public function getCorrespondentAccount()
    {
        return $this->correspondentAccount;
    }

    /**
     * Sets a new correspondentAccount
     *
     * КорСчет - Корреспондентский счёт
     *
     * @param string $correspondentAccount
     * @return self
     */
    public function setCorrespondentAccount($correspondentAccount)
    {
        $this->correspondentAccount = $correspondentAccount;
        return $this;
    }

    /**
     * Gets as bankAccountNumber
     *
     * НомерСчета - номер банковского счета
     *
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->bankAccountNumber;
    }

    /**
     * Sets a new bankAccountNumber
     *
     * НомерСчета - номер банковского счета
     *
     * @param string $bankAccountNumber
     * @return self
     */
    public function setBankAccountNumber($bankAccountNumber)
    {
        $this->bankAccountNumber = $bankAccountNumber;
        return $this;
    }

    /**
     * Gets as bankName
     *
     * НаимБанк - название банка
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Sets a new bankName
     *
     * НаимБанк - название банка
     *
     * @param string $bankName
     * @return self
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * Gets as bankId
     *
     * БИК
     *
     * @return string
     */
    public function getBankId()
    {
        return $this->bankId;
    }

    /**
     * Sets a new bankId
     *
     * БИК
     *
     * @param string $bankId
     * @return self
     */
    public function setBankId($bankId)
    {
        $this->bankId = $bankId;
        return $this;
    }

    /**
     * Gets as department
     *
     * СтруктПодр - структурное подразделение
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Sets a new department
     *
     * СтруктПодр - структурное подразделение
     *
     * @param string $department
     * @return self
     */
    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * Gets as organizationAdditionalInfo
     *
     * ИнфДляУчаст - Информация для участника
     *
     * @return string
     */
    public function getOrganizationAdditionalInfo()
    {
        return $this->organizationAdditionalInfo;
    }

    /**
     * Sets a new organizationAdditionalInfo
     *
     * ИнфДляУчаст - Информация для участника
     *
     * @param string $organizationAdditionalInfo
     * @return self
     */
    public function setOrganizationAdditionalInfo($organizationAdditionalInfo)
    {
        $this->organizationAdditionalInfo = $organizationAdditionalInfo;
        return $this;
    }

    /**
     * Gets as organizationOrPersonInfo
     *
     * ИныеСвед - Иные сведения, идентифицирующие ФЛ или ЮЛ
     *
     * @return string
     */
    public function getOrganizationOrPersonInfo()
    {
        return $this->organizationOrPersonInfo;
    }

    /**
     * Sets a new organizationOrPersonInfo
     *
     * ИныеСвед - Иные сведения, идентифицирующие ФЛ или ЮЛ
     *
     * @param string $organizationOrPersonInfo
     * @return self
     */
    public function setOrganizationOrPersonInfo($organizationOrPersonInfo)
    {
        $this->organizationOrPersonInfo = $organizationOrPersonInfo;
        return $this;
    }

    /**
     * Gets as individualEntityRegistrationCertificate
     *
     * СвГосРегИп - Реквизиты свидетельства о государственной регистрации ИП
     *
     * @return string
     */
    public function getIndividualEntityRegistrationCertificate()
    {
        return $this->individualEntityRegistrationCertificate;
    }

    /**
     * Sets a new individualEntityRegistrationCertificate
     *
     * СвГосРегИп - Реквизиты свидетельства о государственной регистрации ИП
     *
     * @param string $individualEntityRegistrationCertificate
     * @return self
     */
    public function setIndividualEntityRegistrationCertificate($individualEntityRegistrationCertificate)
    {
        $this->individualEntityRegistrationCertificate = $individualEntityRegistrationCertificate;
        return $this;
    }

    /**
     * Gets as legalEntityId
     *
     * Идентиф - Идентификатор ЮЛ, нужен для автоматизированной обработки
     *
     * @return string
     */
    public function getLegalEntityId()
    {
        return $this->legalEntityId;
    }

    /**
     * Sets a new legalEntityId
     *
     * Идентиф - Идентификатор ЮЛ, нужен для автоматизированной обработки
     *
     * @param string $legalEntityId
     * @return self
     */
    public function setLegalEntityId($legalEntityId)
    {
        $this->legalEntityId = $legalEntityId;
        return $this;
    }

    /**
     * Gets as shortOrgName
     *
     * КраткНазв - Краткое название
     *
     * @return string
     */
    public function getShortOrgName()
    {
        return $this->shortOrgName;
    }

    /**
     * Sets a new shortOrgName
     *
     * КраткНазв - Краткое название
     *
     * @param string $shortOrgName
     * @return self
     */
    public function setShortOrgName($shortOrgName)
    {
        $this->shortOrgName = $shortOrgName;
        return $this;
    }

    /**
     * Gets as country
     *
     * Страна
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
     * Страна
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }


}

