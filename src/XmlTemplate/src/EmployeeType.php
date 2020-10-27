<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing EmployeeType
 *
 * 
 * XSD Type: Employee
 */
class EmployeeType
{

    /**
     * Должность
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
     * ОснПолн - Основание полномочий предстваителя
     *
     * @var string $employeeBase
     */
    private $employeeBase = null;

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
     * ОснПолн - Основание полномочий предстваителя
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
     * ОснПолн - Основание полномочий предстваителя
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

