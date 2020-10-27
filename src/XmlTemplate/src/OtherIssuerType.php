<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing OtherIssuerType
 *
 * 
 * XSD Type: OtherIssuer
 */
class OtherIssuerType
{

    /**
     * Должность представителя организацииЕсли заполнено - формируется структура "ПредОргПер".Если не заполнено – формируется структура "ФЛПер".
     *
     * @var string $position
     */
    private $position = null;

    /**
     * ИныеСвед - Иные сведения, идентифицирующие физическое лицо
     *
     * @var string $employeeInfo
     */
    private $employeeInfo = null;

    /**
     * ОснПолнПредПер (ОснДоверФЛ) - Основание полномочий представителя
     *
     * @var string $employeeBase
     */
    private $employeeBase = null;

    /**
     * НаимОргПер - Наименование организации, которой доверена передача
     *
     * @var string $organizationName
     */
    private $organizationName = null;

    /**
     * ОснДоверОргПер - Основание, по которому организации доверена передача
     *
     * @var string $organizationBase
     */
    private $organizationBase = null;

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
     * Gets as position
     *
     * Должность представителя организацииЕсли заполнено - формируется структура "ПредОргПер".Если не заполнено – формируется структура "ФЛПер".
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
     * Должность представителя организацииЕсли заполнено - формируется структура "ПредОргПер".Если не заполнено – формируется структура "ФЛПер".
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
     * Gets as employeeInfo
     *
     * ИныеСвед - Иные сведения, идентифицирующие физическое лицо
     *
     * @return string
     */
    public function getEmployeeInfo()
    {
        return $this->employeeInfo;
    }

    /**
     * Sets a new employeeInfo
     *
     * ИныеСвед - Иные сведения, идентифицирующие физическое лицо
     *
     * @param string $employeeInfo
     * @return self
     */
    public function setEmployeeInfo($employeeInfo)
    {
        $this->employeeInfo = $employeeInfo;
        return $this;
    }

    /**
     * Gets as employeeBase
     *
     * ОснПолнПредПер (ОснДоверФЛ) - Основание полномочий представителя
     *
     * @return string
     */
    public function getEmployeeBase()
    {
        return $this->employeeBase;
    }

    /**
     * Sets a new employeeBase
     *
     * ОснПолнПредПер (ОснДоверФЛ) - Основание полномочий представителя
     *
     * @param string $employeeBase
     * @return self
     */
    public function setEmployeeBase($employeeBase)
    {
        $this->employeeBase = $employeeBase;
        return $this;
    }

    /**
     * Gets as organizationName
     *
     * НаимОргПер - Наименование организации, которой доверена передача
     *
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * Sets a new organizationName
     *
     * НаимОргПер - Наименование организации, которой доверена передача
     *
     * @param string $organizationName
     * @return self
     */
    public function setOrganizationName($organizationName)
    {
        $this->organizationName = $organizationName;
        return $this;
    }

    /**
     * Gets as organizationBase
     *
     * ОснДоверОргПер - Основание, по которому организации доверена передача
     *
     * @return string
     */
    public function getOrganizationBase()
    {
        return $this->organizationBase;
    }

    /**
     * Sets a new organizationBase
     *
     * ОснДоверОргПер - Основание, по которому организации доверена передача
     *
     * @param string $organizationBase
     * @return self
     */
    public function setOrganizationBase($organizationBase)
    {
        $this->organizationBase = $organizationBase;
        return $this;
    }

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


}

