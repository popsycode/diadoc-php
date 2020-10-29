<?php

namespace AgentSIB\Diadoc\ProformaInvoice;

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
     * @property string $orgType
     */
    private $orgType = null;

    /**
     * ОКПО - код в общероссийском классификаторе предприятий и организаций
     *
     * @property string $okpo
     */
    private $okpo = null;

    /**
     * Тлф - Номер контактного телефона/факс
     *
     * @property string $phone
     */
    private $phone = null;

    /**
     * ЭлПочта - Адрес электронной почты
     *
     * @property string $email
     */
    private $email = null;

    /**
     * КорСчет - Корреспондентский счёт
     *
     * @property string $correspondentAccount
     */
    private $correspondentAccount = null;

    /**
     * НомерСчета - номер банковского счета
     *
     * @property string $bankAccountNumber
     */
    private $bankAccountNumber = null;

    /**
     * НаимБанк - название банка
     *
     * @property string $bankName
     */
    private $bankName = null;

    /**
     * БИК
     *
     * @property string $bankId
     */
    private $bankId = null;

    /**
     * СтруктПодр - структурное подразделение
     *
     * @property string $department
     */
    private $department = null;

    /**
     * ИныеСвед - Иные сведения, идентифицирующие ФЛ или ЮЛ
     *
     * @property string $organizationOrPersonInfo
     */
    private $organizationOrPersonInfo = null;

    /**
     * СвГосРегИп - Реквизиты свидетельства о государственной регистрации ИП
     *
     * @property string $individualEntityRegistrationCertificate
     */
    private $individualEntityRegistrationCertificate = null;

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


}

