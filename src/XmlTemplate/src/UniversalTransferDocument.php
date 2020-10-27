<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing UniversalTransferDocument
 */
class UniversalTransferDocument
{

    /**
     * Функция - Функция документа
     *
     * @var string $function
     */
    private $function = null;

    /**
     * СоглСтрДопИнф - Информация о наличии согласованной структуры дополнительных
     *  информационных полей
     *
     * @var string $approvedStructureAdditionalInfoFields
     */
    private $approvedStructureAdditionalInfoFields = null;

    /**
     * НаимДокОпр - Наименование первичного документа, определенное организацией
     *
     * @var string $documentName
     */
    private $documentName = null;

    /**
     * ДатаСчФ - дата УПД
     *
     * @var string $documentDate
     */
    private $documentDate = null;

    /**
     * НомерСчФ - номер УПД
     *
     * @var string $documentNumber
     */
    private $documentNumber = null;

    /**
     * КодОКВ - валюта (код)
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * КурсВал - Курс валюты
     *
     * @var float $currencyRate
     */
    private $currencyRate = null;

    /**
     * ДатаИспрСчФ - дата ИСФ (обязательно при формировании
     *  UniversalTransferDocumentSellerTitleRevision)
     *
     * @var string $revisionDate
     */
    private $revisionDate = null;

    /**
     * НомИспрСчФ - номер ИСФ (обязательно при формировании
     *  UniversalTransferDocumentSellerTitleRevision)
     *
     * @var int $revisionNumber
     */
    private $revisionNumber = null;

    /**
     * НаимЭконСубСост - Составитель файла обмена счета-фактуры (информации продавца)
     *
     * @var string $documentCreator
     */
    private $documentCreator = null;

    /**
     * ОснДоверОргСост - Основание, по которому экономический субъект является
     *  составителем файла обмена счета-фактуры
     *
     * @var string $documentCreatorBase
     */
    private $documentCreatorBase = null;

    /**
     * ИдГосКон
     *
     * @var string $governmentContractInfo
     */
    private $governmentContractInfo = null;

    /**
     * ОбстФормСЧФ - Обстоятельства формирования счета-фактуры
     *  1 - счет-фактура, выставляемый при реализации товаров;
     *  2 - счет-фактура, выставляемый при получении оплаты;
     *  3 - счет-фактура, применяемый в случае реализации комиссионером
     *
     * @var string $circumFormatInvoice
     */
    private $circumFormatInvoice = null;

    /**
     * @var \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[] $sellers
     */
    private $sellers = null;

    /**
     * @var \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[] $buyers
     */
    private $buyers = null;

    /**
     * @var \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\ShippersAType\ShipperAType[] $shippers
     */
    private $shippers = null;

    /**
     * @var \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[] $consignees
     */
    private $consignees = null;

    /**
     * @var \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\SignersAType $signers
     */
    private $signers = null;

    /**
     * @var \AgentSIB\Diadoc\XmlTemplate\PaymentDocumentInfoType[] $paymentDocuments
     */
    private $paymentDocuments = null;

    /**
     * ИнфПолФХЖ1 - Информационное поле документа
     *
     * @var \AgentSIB\Diadoc\XmlTemplate\AdditionalInfoIdType $additionalInfoId
     */
    private $additionalInfoId = null;

    /**
     * @var \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType $table
     */
    private $table = null;

    /**
     * @var \AgentSIB\Diadoc\XmlTemplate\TransferInfoType $transferInfo
     */
    private $transferInfo = null;

    /**
     * СвФактор - Сведения о факторе
     *
     * @var \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $factorInfo
     */
    private $factorInfo = null;

    /**
     * ОснУстДенТреб - Основание уступки денежного требования
     *
     * @var \AgentSIB\Diadoc\XmlTemplate\TransferBase820Type $mainAssignMonetaryClaim
     */
    private $mainAssignMonetaryClaim = null;

    /**
     * ИнфПродГосЗакКазн - Информация продавца об обстоятельствах закупок для
     *  государственных и муниципальных нужд
     *
     * @var \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\SellerInfoCircumPublicProcAType $sellerInfoCircumPublicProc
     */
    private $sellerInfoCircumPublicProc = null;

    /**
     * @var \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\DocumentShipmentsAType\DocumentShipmentAType[] $documentShipments
     */
    private $documentShipments = null;

    /**
     * Gets as function
     *
     * Функция - Функция документа
     *
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets a new function
     *
     * Функция - Функция документа
     *
     * @param string $function
     * @return self
     */
    public function setFunction($function)
    {
        $this->function = $function;
        return $this;
    }

    /**
     * Gets as approvedStructureAdditionalInfoFields
     *
     * СоглСтрДопИнф - Информация о наличии согласованной структуры дополнительных
     *  информационных полей
     *
     * @return string
     */
    public function getApprovedStructureAdditionalInfoFields()
    {
        return $this->approvedStructureAdditionalInfoFields;
    }

    /**
     * Sets a new approvedStructureAdditionalInfoFields
     *
     * СоглСтрДопИнф - Информация о наличии согласованной структуры дополнительных
     *  информационных полей
     *
     * @param string $approvedStructureAdditionalInfoFields
     * @return self
     */
    public function setApprovedStructureAdditionalInfoFields($approvedStructureAdditionalInfoFields)
    {
        $this->approvedStructureAdditionalInfoFields = $approvedStructureAdditionalInfoFields;
        return $this;
    }

    /**
     * Gets as documentName
     *
     * НаимДокОпр - Наименование первичного документа, определенное организацией
     *
     * @return string
     */
    public function getDocumentName()
    {
        return $this->documentName;
    }

    /**
     * Sets a new documentName
     *
     * НаимДокОпр - Наименование первичного документа, определенное организацией
     *
     * @param string $documentName
     * @return self
     */
    public function setDocumentName($documentName)
    {
        $this->documentName = $documentName;
        return $this;
    }

    /**
     * Gets as documentDate
     *
     * ДатаСчФ - дата УПД
     *
     * @return string
     */
    public function getDocumentDate()
    {
        return $this->documentDate;
    }

    /**
     * Sets a new documentDate
     *
     * ДатаСчФ - дата УПД
     *
     * @param string $documentDate
     * @return self
     */
    public function setDocumentDate($documentDate)
    {
        $this->documentDate = $documentDate;
        return $this;
    }

    /**
     * Gets as documentNumber
     *
     * НомерСчФ - номер УПД
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    /**
     * Sets a new documentNumber
     *
     * НомерСчФ - номер УПД
     *
     * @param string $documentNumber
     * @return self
     */
    public function setDocumentNumber($documentNumber)
    {
        $this->documentNumber = $documentNumber;
        return $this;
    }

    /**
     * Gets as currency
     *
     * КодОКВ - валюта (код)
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * КодОКВ - валюта (код)
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as currencyRate
     *
     * КурсВал - Курс валюты
     *
     * @return float
     */
    public function getCurrencyRate()
    {
        return $this->currencyRate;
    }

    /**
     * Sets a new currencyRate
     *
     * КурсВал - Курс валюты
     *
     * @param float $currencyRate
     * @return self
     */
    public function setCurrencyRate($currencyRate)
    {
        $this->currencyRate = $currencyRate;
        return $this;
    }

    /**
     * Gets as revisionDate
     *
     * ДатаИспрСчФ - дата ИСФ (обязательно при формировании
     *  UniversalTransferDocumentSellerTitleRevision)
     *
     * @return string
     */
    public function getRevisionDate()
    {
        return $this->revisionDate;
    }

    /**
     * Sets a new revisionDate
     *
     * ДатаИспрСчФ - дата ИСФ (обязательно при формировании
     *  UniversalTransferDocumentSellerTitleRevision)
     *
     * @param string $revisionDate
     * @return self
     */
    public function setRevisionDate($revisionDate)
    {
        $this->revisionDate = $revisionDate;
        return $this;
    }

    /**
     * Gets as revisionNumber
     *
     * НомИспрСчФ - номер ИСФ (обязательно при формировании
     *  UniversalTransferDocumentSellerTitleRevision)
     *
     * @return int
     */
    public function getRevisionNumber()
    {
        return $this->revisionNumber;
    }

    /**
     * Sets a new revisionNumber
     *
     * НомИспрСчФ - номер ИСФ (обязательно при формировании
     *  UniversalTransferDocumentSellerTitleRevision)
     *
     * @param int $revisionNumber
     * @return self
     */
    public function setRevisionNumber($revisionNumber)
    {
        $this->revisionNumber = $revisionNumber;
        return $this;
    }

    /**
     * Gets as documentCreator
     *
     * НаимЭконСубСост - Составитель файла обмена счета-фактуры (информации продавца)
     *
     * @return string
     */
    public function getDocumentCreator()
    {
        return $this->documentCreator;
    }

    /**
     * Sets a new documentCreator
     *
     * НаимЭконСубСост - Составитель файла обмена счета-фактуры (информации продавца)
     *
     * @param string $documentCreator
     * @return self
     */
    public function setDocumentCreator($documentCreator)
    {
        $this->documentCreator = $documentCreator;
        return $this;
    }

    /**
     * Gets as documentCreatorBase
     *
     * ОснДоверОргСост - Основание, по которому экономический субъект является
     *  составителем файла обмена счета-фактуры
     *
     * @return string
     */
    public function getDocumentCreatorBase()
    {
        return $this->documentCreatorBase;
    }

    /**
     * Sets a new documentCreatorBase
     *
     * ОснДоверОргСост - Основание, по которому экономический субъект является
     *  составителем файла обмена счета-фактуры
     *
     * @param string $documentCreatorBase
     * @return self
     */
    public function setDocumentCreatorBase($documentCreatorBase)
    {
        $this->documentCreatorBase = $documentCreatorBase;
        return $this;
    }

    /**
     * Gets as governmentContractInfo
     *
     * ИдГосКон
     *
     * @return string
     */
    public function getGovernmentContractInfo()
    {
        return $this->governmentContractInfo;
    }

    /**
     * Sets a new governmentContractInfo
     *
     * ИдГосКон
     *
     * @param string $governmentContractInfo
     * @return self
     */
    public function setGovernmentContractInfo($governmentContractInfo)
    {
        $this->governmentContractInfo = $governmentContractInfo;
        return $this;
    }

    /**
     * Gets as circumFormatInvoice
     *
     * ОбстФормСЧФ - Обстоятельства формирования счета-фактуры
     *  1 - счет-фактура, выставляемый при реализации товаров;
     *  2 - счет-фактура, выставляемый при получении оплаты;
     *  3 - счет-фактура, применяемый в случае реализации комиссионером
     *
     * @return string
     */
    public function getCircumFormatInvoice()
    {
        return $this->circumFormatInvoice;
    }

    /**
     * Sets a new circumFormatInvoice
     *
     * ОбстФормСЧФ - Обстоятельства формирования счета-фактуры
     *  1 - счет-фактура, выставляемый при реализации товаров;
     *  2 - счет-фактура, выставляемый при получении оплаты;
     *  3 - счет-фактура, применяемый в случае реализации комиссионером
     *
     * @param string $circumFormatInvoice
     * @return self
     */
    public function setCircumFormatInvoice($circumFormatInvoice)
    {
        $this->circumFormatInvoice = $circumFormatInvoice;
        return $this;
    }

    /**
     * Adds as seller
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $seller
     */
    public function addToSellers(\AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $seller)
    {
        $this->sellers[] = $seller;
        return $this;
    }

    /**
     * isset sellers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellers($index)
    {
        return isset($this->sellers[$index]);
    }

    /**
     * unset sellers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellers($index)
    {
        unset($this->sellers[$index]);
    }

    /**
     * Gets as sellers
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[]
     */
    public function getSellers()
    {
        return $this->sellers;
    }

    /**
     * Sets a new sellers
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[] $sellers
     * @return self
     */
    public function setSellers(array $sellers)
    {
        $this->sellers = $sellers;
        return $this;
    }

    /**
     * Adds as buyer
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $buyer
     */
    public function addToBuyers(\AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $buyer)
    {
        $this->buyers[] = $buyer;
        return $this;
    }

    /**
     * isset buyers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBuyers($index)
    {
        return isset($this->buyers[$index]);
    }

    /**
     * unset buyers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBuyers($index)
    {
        unset($this->buyers[$index]);
    }

    /**
     * Gets as buyers
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[]
     */
    public function getBuyers()
    {
        return $this->buyers;
    }

    /**
     * Sets a new buyers
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[] $buyers
     * @return self
     */
    public function setBuyers(array $buyers)
    {
        $this->buyers = $buyers;
        return $this;
    }

    /**
     * Adds as shipper
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\ShippersAType\ShipperAType $shipper
     */
    public function addToShippers(\AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\ShippersAType\ShipperAType $shipper)
    {
        $this->shippers[] = $shipper;
        return $this;
    }

    /**
     * isset shippers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippers($index)
    {
        return isset($this->shippers[$index]);
    }

    /**
     * unset shippers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippers($index)
    {
        unset($this->shippers[$index]);
    }

    /**
     * Gets as shippers
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\ShippersAType\ShipperAType[]
     */
    public function getShippers()
    {
        return $this->shippers;
    }

    /**
     * Sets a new shippers
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\ShippersAType\ShipperAType[] $shippers
     * @return self
     */
    public function setShippers(array $shippers)
    {
        $this->shippers = $shippers;
        return $this;
    }

    /**
     * Adds as consignee
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $consignee
     */
    public function addToConsignees(\AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $consignee)
    {
        $this->consignees[] = $consignee;
        return $this;
    }

    /**
     * isset consignees
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsignees($index)
    {
        return isset($this->consignees[$index]);
    }

    /**
     * unset consignees
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsignees($index)
    {
        unset($this->consignees[$index]);
    }

    /**
     * Gets as consignees
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[]
     */
    public function getConsignees()
    {
        return $this->consignees;
    }

    /**
     * Sets a new consignees
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[] $consignees
     * @return self
     */
    public function setConsignees(array $consignees)
    {
        $this->consignees = $consignees;
        return $this;
    }

    /**
     * Gets as signers
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\SignersAType
     */
    public function getSigners()
    {
        return $this->signers;
    }

    /**
     * Sets a new signers
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\SignersAType $signers
     * @return self
     */
    public function setSigners(\AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\SignersAType $signers)
    {
        $this->signers = $signers;
        return $this;
    }

    /**
     * Adds as document
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\PaymentDocumentInfoType $document
     */
    public function addToPaymentDocuments(\AgentSIB\Diadoc\XmlTemplate\PaymentDocumentInfoType $document)
    {
        $this->paymentDocuments[] = $document;
        return $this;
    }

    /**
     * isset paymentDocuments
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentDocuments($index)
    {
        return isset($this->paymentDocuments[$index]);
    }

    /**
     * unset paymentDocuments
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentDocuments($index)
    {
        unset($this->paymentDocuments[$index]);
    }

    /**
     * Gets as paymentDocuments
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\PaymentDocumentInfoType[]
     */
    public function getPaymentDocuments()
    {
        return $this->paymentDocuments;
    }

    /**
     * Sets a new paymentDocuments
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\PaymentDocumentInfoType[] $paymentDocuments
     * @return self
     */
    public function setPaymentDocuments(array $paymentDocuments)
    {
        $this->paymentDocuments = $paymentDocuments;
        return $this;
    }

    /**
     * Gets as additionalInfoId
     *
     * ИнфПолФХЖ1 - Информационное поле документа
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
     * ИнфПолФХЖ1 - Информационное поле документа
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
     * Gets as table
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Sets a new table
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType $table
     * @return self
     */
    public function setTable(\AgentSIB\Diadoc\XmlTemplate\InvoiceTableType $table)
    {
        $this->table = $table;
        return $this;
    }

    /**
     * Gets as transferInfo
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\TransferInfoType
     */
    public function getTransferInfo()
    {
        return $this->transferInfo;
    }

    /**
     * Sets a new transferInfo
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\TransferInfoType $transferInfo
     * @return self
     */
    public function setTransferInfo(\AgentSIB\Diadoc\XmlTemplate\TransferInfoType $transferInfo)
    {
        $this->transferInfo = $transferInfo;
        return $this;
    }

    /**
     * Gets as factorInfo
     *
     * СвФактор - Сведения о факторе
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType
     */
    public function getFactorInfo()
    {
        return $this->factorInfo;
    }

    /**
     * Sets a new factorInfo
     *
     * СвФактор - Сведения о факторе
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $factorInfo
     * @return self
     */
    public function setFactorInfo(\AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $factorInfo)
    {
        $this->factorInfo = $factorInfo;
        return $this;
    }

    /**
     * Gets as mainAssignMonetaryClaim
     *
     * ОснУстДенТреб - Основание уступки денежного требования
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\TransferBase820Type
     */
    public function getMainAssignMonetaryClaim()
    {
        return $this->mainAssignMonetaryClaim;
    }

    /**
     * Sets a new mainAssignMonetaryClaim
     *
     * ОснУстДенТреб - Основание уступки денежного требования
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\TransferBase820Type $mainAssignMonetaryClaim
     * @return self
     */
    public function setMainAssignMonetaryClaim(\AgentSIB\Diadoc\XmlTemplate\TransferBase820Type $mainAssignMonetaryClaim)
    {
        $this->mainAssignMonetaryClaim = $mainAssignMonetaryClaim;
        return $this;
    }

    /**
     * Gets as sellerInfoCircumPublicProc
     *
     * ИнфПродГосЗакКазн - Информация продавца об обстоятельствах закупок для
     *  государственных и муниципальных нужд
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\SellerInfoCircumPublicProcAType
     */
    public function getSellerInfoCircumPublicProc()
    {
        return $this->sellerInfoCircumPublicProc;
    }

    /**
     * Sets a new sellerInfoCircumPublicProc
     *
     * ИнфПродГосЗакКазн - Информация продавца об обстоятельствах закупок для
     *  государственных и муниципальных нужд
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\SellerInfoCircumPublicProcAType $sellerInfoCircumPublicProc
     * @return self
     */
    public function setSellerInfoCircumPublicProc(\AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\SellerInfoCircumPublicProcAType $sellerInfoCircumPublicProc)
    {
        $this->sellerInfoCircumPublicProc = $sellerInfoCircumPublicProc;
        return $this;
    }

    /**
     * Adds as documentShipment
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\DocumentShipmentsAType\DocumentShipmentAType $documentShipment
     */
    public function addToDocumentShipments(\AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\DocumentShipmentsAType\DocumentShipmentAType $documentShipment)
    {
        $this->documentShipments[] = $documentShipment;
        return $this;
    }

    /**
     * isset documentShipments
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentShipments($index)
    {
        return isset($this->documentShipments[$index]);
    }

    /**
     * unset documentShipments
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentShipments($index)
    {
        unset($this->documentShipments[$index]);
    }

    /**
     * Gets as documentShipments
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\DocumentShipmentsAType\DocumentShipmentAType[]
     */
    public function getDocumentShipments()
    {
        return $this->documentShipments;
    }

    /**
     * Sets a new documentShipments
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument\DocumentShipmentsAType\DocumentShipmentAType[] $documentShipments
     * @return self
     */
    public function setDocumentShipments(array $documentShipments)
    {
        $this->documentShipments = $documentShipments;
        return $this;
    }


}

