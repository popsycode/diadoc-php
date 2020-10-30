<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing TransferInfoType
 *
 * 
 * XSD Type: TransferInfo
 */
class TransferInfoType
{

    /**
     * СодОпер - Содержание операции
     *
     * @property string $operationInfo
     */
    private $operationInfo = null;

    /**
     * ВидОпер - Вид операции
     *
     * @property string $operationType
     */
    private $operationType = null;

    /**
     * ДатаПер - Дата отгрузки
     *
     * @property string $transferDate
     */
    private $transferDate = null;

    /**
     * ДатаНач - Дата начала периода оказания услуг (выполнения работ, поставки товаров)
     *
     * @property string $transferStartDate
     */
    private $transferStartDate = null;

    /**
     * ДатаОкон - Дата окончания периода оказания услуг (выполнения работ, поставки товаров)
     *
     * @property string $transferEndDate
     */
    private $transferEndDate = null;

    /**
     * СвТранГруз - Сведения о транспортировке и грузе
     *
     * @property string $transferTextInfo
     */
    private $transferTextInfo = null;

    /**
     * ДатаПерВещ - Дата передачи вещи, изготовленной по договору
     *
     * @property string $createdThingTransferDate
     */
    private $createdThingTransferDate = null;

    /**
     * СвПерВещ - Сведения о передаче, изготовленной по договору
     *
     * @property string $createdThingInfo
     */
    private $createdThingInfo = null;

    /**
     * @property \AgentSIB\Diadoc\XmlTemplate\TransferBase820Type[] $transferBases
     */
    private $transferBases = null;

    /**
     * ТранНакл - Транспортная накладная
     *
     * @property \AgentSIB\Diadoc\XmlTemplate\WaybillsType\WaybillAType[] $waybills
     */
    private $waybills = null;

    /**
     * ИнфПолФХЖ3 - Информационное поле документа
     *
     * @property \AgentSIB\Diadoc\XmlTemplate\AdditionalInfoIdType $additionalInfoId
     */
    private $additionalInfoId = null;

    /**
     * Перевозчик
     *
     * @property \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $carrier
     */
    private $carrier = null;

    /**
     * РабОргПрод
     *
     * @property \AgentSIB\Diadoc\XmlTemplate\EmployeeType $employee
     */
    private $employee = null;

    /**
     * ИнЛицо
     *
     * @property \AgentSIB\Diadoc\XmlTemplate\OtherIssuerType $otherIssuer
     */
    private $otherIssuer = null;

    /**
     * Gets as operationInfo
     *
     * СодОпер - Содержание операции
     *
     * @return string
     */
    public function getOperationInfo()
    {
        return $this->operationInfo;
    }

    /**
     * Sets a new operationInfo
     *
     * СодОпер - Содержание операции
     *
     * @param string $operationInfo
     * @return self
     */
    public function setOperationInfo($operationInfo)
    {
        $this->operationInfo = $operationInfo;
        return $this;
    }

    /**
     * Gets as operationType
     *
     * ВидОпер - Вид операции
     *
     * @return string
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * Sets a new operationType
     *
     * ВидОпер - Вид операции
     *
     * @param string $operationType
     * @return self
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
        return $this;
    }

    /**
     * Gets as transferDate
     *
     * ДатаПер - Дата отгрузки
     *
     * @return string
     */
    public function getTransferDate()
    {
        return $this->transferDate;
    }

    /**
     * Sets a new transferDate
     *
     * ДатаПер - Дата отгрузки
     *
     * @param string $transferDate
     * @return self
     */
    public function setTransferDate($transferDate)
    {
        $this->transferDate = $transferDate;
        return $this;
    }

    /**
     * Gets as transferStartDate
     *
     * ДатаНач - Дата начала периода оказания услуг (выполнения работ, поставки товаров)
     *
     * @return string
     */
    public function getTransferStartDate()
    {
        return $this->transferStartDate;
    }

    /**
     * Sets a new transferStartDate
     *
     * ДатаНач - Дата начала периода оказания услуг (выполнения работ, поставки товаров)
     *
     * @param string $transferStartDate
     * @return self
     */
    public function setTransferStartDate($transferStartDate)
    {
        $this->transferStartDate = $transferStartDate;
        return $this;
    }

    /**
     * Gets as transferEndDate
     *
     * ДатаОкон - Дата окончания периода оказания услуг (выполнения работ, поставки товаров)
     *
     * @return string
     */
    public function getTransferEndDate()
    {
        return $this->transferEndDate;
    }

    /**
     * Sets a new transferEndDate
     *
     * ДатаОкон - Дата окончания периода оказания услуг (выполнения работ, поставки товаров)
     *
     * @param string $transferEndDate
     * @return self
     */
    public function setTransferEndDate($transferEndDate)
    {
        $this->transferEndDate = $transferEndDate;
        return $this;
    }

    /**
     * Gets as transferTextInfo
     *
     * СвТранГруз - Сведения о транспортировке и грузе
     *
     * @return string
     */
    public function getTransferTextInfo()
    {
        return $this->transferTextInfo;
    }

    /**
     * Sets a new transferTextInfo
     *
     * СвТранГруз - Сведения о транспортировке и грузе
     *
     * @param string $transferTextInfo
     * @return self
     */
    public function setTransferTextInfo($transferTextInfo)
    {
        $this->transferTextInfo = $transferTextInfo;
        return $this;
    }

    /**
     * Gets as createdThingTransferDate
     *
     * ДатаПерВещ - Дата передачи вещи, изготовленной по договору
     *
     * @return string
     */
    public function getCreatedThingTransferDate()
    {
        return $this->createdThingTransferDate;
    }

    /**
     * Sets a new createdThingTransferDate
     *
     * ДатаПерВещ - Дата передачи вещи, изготовленной по договору
     *
     * @param string $createdThingTransferDate
     * @return self
     */
    public function setCreatedThingTransferDate($createdThingTransferDate)
    {
        $this->createdThingTransferDate = $createdThingTransferDate;
        return $this;
    }

    /**
     * Gets as createdThingInfo
     *
     * СвПерВещ - Сведения о передаче, изготовленной по договору
     *
     * @return string
     */
    public function getCreatedThingInfo()
    {
        return $this->createdThingInfo;
    }

    /**
     * Sets a new createdThingInfo
     *
     * СвПерВещ - Сведения о передаче, изготовленной по договору
     *
     * @param string $createdThingInfo
     * @return self
     */
    public function setCreatedThingInfo($createdThingInfo)
    {
        $this->createdThingInfo = $createdThingInfo;
        return $this;
    }

    /**
     * Adds as transferBase
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\TransferBase820Type $transferBase
     */
    public function addToTransferBases(\AgentSIB\Diadoc\XmlTemplate\TransferBase820Type $transferBase)
    {
        $this->transferBases[] = $transferBase;
        return $this;
    }

    /**
     * isset transferBases
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransferBases($index)
    {
        return isset($this->transferBases[$index]);
    }

    /**
     * unset transferBases
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransferBases($index)
    {
        unset($this->transferBases[$index]);
    }

    /**
     * Gets as transferBases
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\TransferBase820Type[]
     */
    public function getTransferBases()
    {
        return $this->transferBases;
    }

    /**
     * Sets a new transferBases
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\TransferBase820Type[] $transferBases
     * @return self
     */
    public function setTransferBases(array $transferBases)
    {
        $this->transferBases = $transferBases;
        return $this;
    }

    /**
     * Adds as waybill
     *
     * ТранНакл - Транспортная накладная
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\WaybillsType\WaybillAType $waybill
     */
    public function addToWaybills(\AgentSIB\Diadoc\XmlTemplate\WaybillsType\WaybillAType $waybill)
    {
        $this->waybills[] = $waybill;
        return $this;
    }

    /**
     * isset waybills
     *
     * ТранНакл - Транспортная накладная
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWaybills($index)
    {
        return isset($this->waybills[$index]);
    }

    /**
     * unset waybills
     *
     * ТранНакл - Транспортная накладная
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWaybills($index)
    {
        unset($this->waybills[$index]);
    }

    /**
     * Gets as waybills
     *
     * ТранНакл - Транспортная накладная
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\WaybillsType\WaybillAType[]
     */
    public function getWaybills()
    {
        return $this->waybills;
    }

    /**
     * Sets a new waybills
     *
     * ТранНакл - Транспортная накладная
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\WaybillsType\WaybillAType[] $waybills
     * @return self
     */
    public function setWaybills(array $waybills)
    {
        $this->waybills = $waybills;
        return $this;
    }

    /**
     * Gets as additionalInfoId
     *
     * ИнфПолФХЖ3 - Информационное поле документа
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\AdditionalInfoIdType
     */
    public function getAdditionalInfoId()
    {
        return $this->additionalInfoId;
    }

    /**
     * Sets a new additionalInfoId
     *
     * ИнфПолФХЖ3 - Информационное поле документа
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\AdditionalInfoIdType $additionalInfoId
     * @return self
     */
    public function setAdditionalInfoId(\AgentSIB\Diadoc\XmlTemplate\AdditionalInfoIdType $additionalInfoId)
    {
        $this->additionalInfoId = $additionalInfoId;
        return $this;
    }

    /**
     * Gets as carrier
     *
     * Перевозчик
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Sets a new carrier
     *
     * Перевозчик
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $carrier
     * @return self
     */
    public function setCarrier(\AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $carrier)
    {
        $this->carrier = $carrier;
        return $this;
    }

    /**
     * Gets as employee
     *
     * РабОргПрод
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\EmployeeType
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Sets a new employee
     *
     * РабОргПрод
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\EmployeeType $employee
     * @return self
     */
    public function setEmployee(\AgentSIB\Diadoc\XmlTemplate\EmployeeType $employee)
    {
        $this->employee = $employee;
        return $this;
    }

    /**
     * Gets as otherIssuer
     *
     * ИнЛицо
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\OtherIssuerType
     */
    public function getOtherIssuer()
    {
        return $this->otherIssuer;
    }

    /**
     * Sets a new otherIssuer
     *
     * ИнЛицо
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\OtherIssuerType $otherIssuer
     * @return self
     */
    public function setOtherIssuer(\AgentSIB\Diadoc\XmlTemplate\OtherIssuerType $otherIssuer)
    {
        $this->otherIssuer = $otherIssuer;
        return $this;
    }


}

