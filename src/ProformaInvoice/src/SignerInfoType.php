<?php

namespace AgentSIB\Diadoc\ProformaInvoice;

/**
 * Class representing SignerInfoType
 *
 * 
 * XSD Type: SignerInfo
 */
class SignerInfoType
{

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\SignerDetailsType $signerDetails
     */
    private $signerDetails = null;

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\SignerReferenceInfoType $signerReference
     */
    private $signerReference = null;

    /**
     * Gets as signerDetails
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\SignerDetailsType
     */
    public function getSignerDetails()
    {
        return $this->signerDetails;
    }

    /**
     * Sets a new signerDetails
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\SignerDetailsType $signerDetails
     * @return self
     */
    public function setSignerDetails(\AgentSIB\Diadoc\ProformaInvoice\SignerDetailsType $signerDetails)
    {
        $this->signerDetails = $signerDetails;
        return $this;
    }

    /**
     * Gets as signerReference
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\SignerReferenceInfoType
     */
    public function getSignerReference()
    {
        return $this->signerReference;
    }

    /**
     * Sets a new signerReference
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\SignerReferenceInfoType $signerReference
     * @return self
     */
    public function setSignerReference(\AgentSIB\Diadoc\ProformaInvoice\SignerReferenceInfoType $signerReference)
    {
        $this->signerReference = $signerReference;
        return $this;
    }


}

