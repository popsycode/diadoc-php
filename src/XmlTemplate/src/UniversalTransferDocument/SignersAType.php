<?php

namespace AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument;

/**
 * Class representing SignersAType
 */
class SignersAType
{

    /**
     * @property \AgentSIB\Diadoc\XmlTemplate\SignerReferenceType[] $signerReference
     */
    private $signerReference = array(
        
    );

    /**
     * @property \AgentSIB\Diadoc\XmlTemplate\ExtendedSignerDetailsSellerTitleType[] $signerDetails
     */
    private $signerDetails = array(
        
    );

    /**
     * Adds as signerReference
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\SignerReferenceType $signerReference
     */
    public function addToSignerReference(\AgentSIB\Diadoc\XmlTemplate\SignerReferenceType $signerReference)
    {
        $this->signerReference[] = $signerReference;
        return $this;
    }

    /**
     * isset signerReference
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSignerReference($index)
    {
        return isset($this->signerReference[$index]);
    }

    /**
     * unset signerReference
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSignerReference($index)
    {
        unset($this->signerReference[$index]);
    }

    /**
     * Gets as signerReference
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\SignerReferenceType[]
     */
    public function getSignerReference()
    {
        return $this->signerReference;
    }

    /**
     * Sets a new signerReference
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\SignerReferenceType[] $signerReference
     * @return self
     */
    public function setSignerReference(array $signerReference)
    {
        $this->signerReference = $signerReference;
        return $this;
    }

    /**
     * Adds as signerDetails
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedSignerDetailsSellerTitleType $signerDetails
     */
    public function addToSignerDetails(\AgentSIB\Diadoc\XmlTemplate\ExtendedSignerDetailsSellerTitleType $signerDetails)
    {
        $this->signerDetails[] = $signerDetails;
        return $this;
    }

    /**
     * isset signerDetails
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSignerDetails($index)
    {
        return isset($this->signerDetails[$index]);
    }

    /**
     * unset signerDetails
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSignerDetails($index)
    {
        unset($this->signerDetails[$index]);
    }

    /**
     * Gets as signerDetails
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\ExtendedSignerDetailsSellerTitleType[]
     */
    public function getSignerDetails()
    {
        return $this->signerDetails;
    }

    /**
     * Sets a new signerDetails
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedSignerDetailsSellerTitleType[] $signerDetails
     * @return self
     */
    public function setSignerDetails(array $signerDetails)
    {
        $this->signerDetails = $signerDetails;
        return $this;
    }


}

