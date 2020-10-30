<?php

namespace AgentSIB\Diadoc\XmlTemplate\ProformaInvoiceSenderTitle;

/**
 * Class representing SignerAType
 */
class SignerAType
{

    /**
     * @property \AgentSIB\Diadoc\XmlTemplate\SignerDetailsType $signerDetails
     */
    private $signerDetails = null;

    /**
     * @property \AgentSIB\Diadoc\XmlTemplate\SignerReferenceType $signerReference
     */
    private $signerReference = null;

    /**
     * Gets as signerDetails
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\SignerDetailsType
     */
    public function getSignerDetails()
    {
        return $this->signerDetails;
    }

    /**
     * Sets a new signerDetails
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\SignerDetailsType $signerDetails
     * @return self
     */
    public function setSignerDetails(\AgentSIB\Diadoc\XmlTemplate\SignerDetailsType $signerDetails)
    {
        $this->signerDetails = $signerDetails;
        return $this;
    }

    /**
     * Gets as signerReference
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\SignerReferenceType
     */
    public function getSignerReference()
    {
        return $this->signerReference;
    }

    /**
     * Sets a new signerReference
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\SignerReferenceType $signerReference
     * @return self
     */
    public function setSignerReference(\AgentSIB\Diadoc\XmlTemplate\SignerReferenceType $signerReference)
    {
        $this->signerReference = $signerReference;
        return $this;
    }


}

