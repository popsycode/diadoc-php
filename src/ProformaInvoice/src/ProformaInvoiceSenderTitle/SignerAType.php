<?php

namespace AgentSIB\Diadoc\ProformaInvoice\ProformaInvoiceSenderTitle;

/**
 * Class representing SignerAType
 */
class SignerAType
{

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\SignerDetailsType $signerDetails
     */
    private $signerDetails = null;

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\SignerReferenceType $signerReference
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
     * @return \AgentSIB\Diadoc\ProformaInvoice\SignerReferenceType
     */
    public function getSignerReference()
    {
        return $this->signerReference;
    }

    /**
     * Sets a new signerReference
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\SignerReferenceType $signerReference
     * @return self
     */
    public function setSignerReference(\AgentSIB\Diadoc\ProformaInvoice\SignerReferenceType $signerReference)
    {
        $this->signerReference = $signerReference;
        return $this;
    }


}

