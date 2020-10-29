<?php

namespace AgentSIB\Diadoc\ProformaInvoice;

/**
 * Class representing ProformaInvoiceSenderTitle
 */
class ProformaInvoiceSenderTitle
{

    /**
     * @property string $documentDate
     */
    private $documentDate = null;

    /**
     * @property string $documentNumber
     */
    private $documentNumber = null;

    /**
     * @property string $governmentContractInfo
     */
    private $governmentContractInfo = null;

    /**
     * @property string $paymentPurpose
     */
    private $paymentPurpose = null;

    /**
     * @property string $currency
     */
    private $currency = null;

    /**
     * @property float $currencyRate
     */
    private $currencyRate = null;

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationInfoType $seller
     */
    private $seller = null;

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationInfoType $buyer
     */
    private $buyer = null;

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationInfoType $recipient
     */
    private $recipient = null;

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationInfoType $payer
     */
    private $payer = null;

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceSenderTitle\SignerAType[] $signer
     */
    private $signer = array(
        
    );

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceSenderTitle\ContractAType $contract
     */
    private $contract = null;

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\AdditionalInfoType[] $additionalInfo
     */
    private $additionalInfo = array(
        
    );

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\PersonalAccountInfoType[] $personalAccountInfo
     */
    private $personalAccountInfo = array(
        
    );

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceTableType $proformaInvoiceTable
     */
    private $proformaInvoiceTable = null;

    /**
     * Gets as documentDate
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
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    /**
     * Sets a new documentNumber
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
     * Gets as governmentContractInfo
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
     * @param string $governmentContractInfo
     * @return self
     */
    public function setGovernmentContractInfo($governmentContractInfo)
    {
        $this->governmentContractInfo = $governmentContractInfo;
        return $this;
    }

    /**
     * Gets as paymentPurpose
     *
     * @return string
     */
    public function getPaymentPurpose()
    {
        return $this->paymentPurpose;
    }

    /**
     * Sets a new paymentPurpose
     *
     * @param string $paymentPurpose
     * @return self
     */
    public function setPaymentPurpose($paymentPurpose)
    {
        $this->paymentPurpose = $paymentPurpose;
        return $this;
    }

    /**
     * Gets as currency
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
     * @return float
     */
    public function getCurrencyRate()
    {
        return $this->currencyRate;
    }

    /**
     * Sets a new currencyRate
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
     * Gets as seller
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationInfoType
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * Sets a new seller
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationInfoType $seller
     * @return self
     */
    public function setSeller(\AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationInfoType $seller)
    {
        $this->seller = $seller;
        return $this;
    }

    /**
     * Gets as buyer
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationInfoType
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * Sets a new buyer
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationInfoType $buyer
     * @return self
     */
    public function setBuyer(\AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationInfoType $buyer)
    {
        $this->buyer = $buyer;
        return $this;
    }

    /**
     * Gets as recipient
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationInfoType
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Sets a new recipient
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationInfoType $recipient
     * @return self
     */
    public function setRecipient(\AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationInfoType $recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * Gets as payer
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationInfoType
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * Sets a new payer
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationInfoType $payer
     * @return self
     */
    public function setPayer(\AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationInfoType $payer)
    {
        $this->payer = $payer;
        return $this;
    }

    /**
     * Adds as signer
     *
     * @return self
     * @param \AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceSenderTitle\SignerAType $signer
     */
    public function addToSigner(\AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceSenderTitle\SignerAType $signer)
    {
        $this->signer[] = $signer;
        return $this;
    }

    /**
     * isset signer
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSigner($index)
    {
        return isset($this->signer[$index]);
    }

    /**
     * unset signer
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSigner($index)
    {
        unset($this->signer[$index]);
    }

    /**
     * Gets as signer
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceSenderTitle\SignerAType[]
     */
    public function getSigner()
    {
        return $this->signer;
    }

    /**
     * Sets a new signer
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceSenderTitle\SignerAType[] $signer
     * @return self
     */
    public function setSigner(array $signer)
    {
        $this->signer = $signer;
        return $this;
    }

    /**
     * Gets as contract
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceSenderTitle\ContractAType
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceSenderTitle\ContractAType $contract
     * @return self
     */
    public function setContract(\AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceSenderTitle\ContractAType $contract)
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * Adds as additionalInfo
     *
     * @return self
     * @param \AgentSIB\Diadoc\ProformaInvoice\AdditionalInfoType $additionalInfo
     */
    public function addToAdditionalInfo(\AgentSIB\Diadoc\ProformaInvoice\AdditionalInfoType $additionalInfo)
    {
        $this->additionalInfo[] = $additionalInfo;
        return $this;
    }

    /**
     * isset additionalInfo
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalInfo($index)
    {
        return isset($this->additionalInfo[$index]);
    }

    /**
     * unset additionalInfo
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalInfo($index)
    {
        unset($this->additionalInfo[$index]);
    }

    /**
     * Gets as additionalInfo
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\AdditionalInfoType[]
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Sets a new additionalInfo
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\AdditionalInfoType[] $additionalInfo
     * @return self
     */
    public function setAdditionalInfo(array $additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }

    /**
     * Adds as personalAccountInfo
     *
     * @return self
     * @param \AgentSIB\Diadoc\ProformaInvoice\PersonalAccountInfoType $personalAccountInfo
     */
    public function addToPersonalAccountInfo(\AgentSIB\Diadoc\ProformaInvoice\PersonalAccountInfoType $personalAccountInfo)
    {
        $this->personalAccountInfo[] = $personalAccountInfo;
        return $this;
    }

    /**
     * isset personalAccountInfo
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPersonalAccountInfo($index)
    {
        return isset($this->personalAccountInfo[$index]);
    }

    /**
     * unset personalAccountInfo
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPersonalAccountInfo($index)
    {
        unset($this->personalAccountInfo[$index]);
    }

    /**
     * Gets as personalAccountInfo
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\PersonalAccountInfoType[]
     */
    public function getPersonalAccountInfo()
    {
        return $this->personalAccountInfo;
    }

    /**
     * Sets a new personalAccountInfo
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\PersonalAccountInfoType[] $personalAccountInfo
     * @return self
     */
    public function setPersonalAccountInfo(array $personalAccountInfo)
    {
        $this->personalAccountInfo = $personalAccountInfo;
        return $this;
    }

    /**
     * Gets as proformaInvoiceTable
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceTableType
     */
    public function getProformaInvoiceTable()
    {
        return $this->proformaInvoiceTable;
    }

    /**
     * Sets a new proformaInvoiceTable
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceTableType $proformaInvoiceTable
     * @return self
     */
    public function setProformaInvoiceTable(\AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceTableType $proformaInvoiceTable)
    {
        $this->proformaInvoiceTable = $proformaInvoiceTable;
        return $this;
    }


}

